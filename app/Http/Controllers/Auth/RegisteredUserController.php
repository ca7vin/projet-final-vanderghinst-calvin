<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Email;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request->image == null) {
            $user = User::create([
                'image' => 'default.jpg',
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 4,
            ]);
            $input = $request->all(); 
            $email = Email::create([
                'email' => $request->email,
            ]);
        } elseif ($request->image != null) {
            $user = User::create([
                'image' => $request->image->hashName(),
                $request->file('image')->storePublicly('images', 'public'),
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 4,
            ]);
            $input = $request->all(); 
            $email = Email::create([
                'email' => $request->email,
            ]);
        }
        $email->save();
        event(new Registered($user));

        Auth::login($user);
        Mail::send('emails.newsletter', array( 
            'email' => $input['email'], 
        ), function($message) use ($request){ 
            $message->to($request->email, 'Admin'); 
            $message->from('ca7vin@gmail.com');
        }); 
        return redirect(RouteServiceProvider::HOME);
    }
}
