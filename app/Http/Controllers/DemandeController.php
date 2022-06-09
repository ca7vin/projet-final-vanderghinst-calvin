<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DemandeController extends Controller
{
    //
    public function index()
    {
        $demandes = Demande::all();
        return view("/back/demandes/all",compact("demandes"));
    }
    public function create()
    {
        return view("/back/demandes/create");
    }
    public function store(Request $request)
    {
        $demande = new Demande;
        $request->validate([
         'from'=> 'required',
         'to'=> 'required',
         'content'=> 'required',
        ]); // store_validated_anchor;
        $demande->from = $request->from;
        $demande->to = $request->to;
        $demande->content = $request->content;
        $demande->save(); // store_anchor
        return redirect()->back()->with('message', "Demande bien envoyée !");
    }

    public function show($id)
    {
        $demande = Demande::find($id);
        return view("/back/demandes/read",compact("demande"));
    }
    public function edit($id)
    {
        $demande = Demande::find($id);
        return view("/back/demandes/edit",compact("demande"));
    }

    public function update($id, Request $request)
    {
        $demande = Demande::find($id);
        $request->validate([
         'from'=> 'required',
         'to'=> 'required',
         'content'=> 'required',
         'date'=> 'required',
        ]); // update_validated_anchor;
        $demande->from = $request->from;
        $demande->to = $request->to;
        $demande->content = $request->content;
        $demande->date = $request->date;
        $demande->status = true;
        // COURS ETUDIANT
        $user = User::where('name', $demande->from)->first();
        $userTo = User::where('name', $demande->to)->first();
        $user->save();
        $userTo->save();
        $user->courses()->sync($userTo->prof->courses, [
            'user_id' => $user->id,
        ]);
        $demande->save(); // update_anchor
        $user_mail = User::select('email')->where('name', $demande->from)->first();
            Mail::send('emails.rdv', array( 
                'email' => $user_mail->email, 
                'from' => $demande->from,
                'to' => $demande->to,
                'status' => $demande->status,
                'date' => $demande->date,
            ), function($message) use ($user_mail){ 
                $message->to($user_mail->email, 'Admin'); 
                $message->from(Auth::user()->email);
            });
        return redirect()->route("demandes.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $demande = Demande::find($id);
        $demande->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
