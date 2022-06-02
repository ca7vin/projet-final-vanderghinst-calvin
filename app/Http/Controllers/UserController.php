<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Models\Prof;
use App\Models\Redacteur;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('/back/users/all', compact('users'));
    }

    public function create()
    {
        if (! Gate::allows('create-user')) {
            abort(403);
        }
        $roles=Role::all();
        return view('/back/users/create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $this->authorize('create', User::class);
        $email = new Email();
        $input = $request->all(); 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // default role
        if ($request->role_id === "null") {
            $user->role_id = 4;
        } else {
            $user->role_id = $request->role_id;
        }
        // si role id = 2 alors créer un professeur
        if ($user->role_id == 2) {
            $prof = new Prof();
            $prof->subject = "write here";
            $prof->bio_short = "write here";
            $prof->bio_long = "write here";
            $prof->phone = "write here";
            $prof->skype = "write here";
            $prof->save();
            $user->prof_id = $prof->id;
        }
        // si role id = 3 alors créer un redacteur
        if ($user->role_id == 3) {
            $redacteur = new Redacteur();
            $redacteur->name = $request->name;
            $redacteur->save();
            $user->redacteur_id = $redacteur->id;
        }
        // default image
        if ($request->image === null) {
            $user->image = "default.jpg";
        } else {
            $user->image = $request->image->hashName();
            $request->file('image')->storePublicly('images', 'public');
        }
        // mail
        $email->email = $request->email;
        if (Email::where('email', $request->email)->exists()) {
            return redirect('/back/users')->with(['error' => 'This Email is already registered !']);
        } else {
            Mail::send('emails.newsletter', array( 
                'email' => $input['email'], 
            ), function($message) use ($request){ 
                $message->to($request->email, 'Admin'); 
                $message->from('ca7vin@gmail.com');
            }); 
        $email->save();
        $user->save();
        return redirect('/back/users')->with('success', 'User created successfully');
    }
    }

    public function edit($id)
    {
        $roles=Role::all();
        $user = User::find($id);
        if (! Gate::allows('update-user', $user)) {
            abort(403);
        }
        return view("/back/users/edit", compact('user', 'roles'));
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $this->authorize('update', $user);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'required|min:8',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($user->password == $request->password) {
            $user->password = $user->password;
        } else {
            $user->password = Hash::make($request->password);
        }
        // default role
        if ($request->role_id === "null") {
            $user->role_id = $user->role_id;
        } else {
            $user->role_id = $request->role_id;
        }
        // default image
        if ($request->image === null) {
            $user->image = $user->image;
        } else {
            $user->image = $request->image->hashName();
            $request->file('image')->storePublicly('images', 'public');
        }
        $user->save();
        return redirect()->route("user.index")->with('message', "Successful update !");
    }

    public function read($id)
    {
        $user = User::find($id);
        return view("/back/users/read", compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $this->authorize('delete', $user);
        if ($user->id === Auth::user()->id) {
            return redirect()->route("user.index")->with('error', "You cannot delete your own account !");
        } else {
            $user->delete();
            $destination = "img/" . $user ->image;
            if (File::exists($destination)) 
            {
                File::delete($destination);
            }
            if ($user->role_id === 2) {
                $prof = Prof::find($user->prof_id);
                $prof->delete();
            } elseif ($user->role_id === 3) {
                $redacteur = Redacteur::find($user->redacteur_id);
                $redacteur->delete();
            }
            return redirect()->route("user.index")->with('message', "Successful delete !");
        }
    }

}
