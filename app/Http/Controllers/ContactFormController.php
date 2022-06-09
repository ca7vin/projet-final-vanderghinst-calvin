<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //
    public function index()
    {
        $contactforms = ContactForm::all();
        return view("/back/contactforms/all",compact("contactforms"));
    }
    public function create()
    {
        return view("/back/contactforms/create");
    }
    public function store(Request $request)
    {
        $contactform = new ContactForm;
        $request->validate([
         'from'=> 'required',
         'to'=> 'required',
         'content'=> 'required',
        ]); // store_validated_anchor;
        $contactform->from = $request->from;
        $contactform->to = $request->to;
        $contactform->content = $request->content;
        $contactform->save(); // store_anchor
        return redirect()->back()->with('message', "Message envoyé !");
    }
    public function show($id)
    {
        $contactform = ContactForm::find($id);
        return view("/back/contactforms/read",compact("contactform"));
    }
    public function edit($id)
    {
        $contactform = ContactForm::find($id);
        return view("/back/contactforms/edit",compact("contactform"));
    }
    public function reply($id)
    {
        $contactform = ContactForm::find($id);
        return view("/back/contactforms/reply",compact("contactform"));
    }
    public function update($id, Request $request)
    {
        $contactform = ContactForm::find($id);
        $request->validate([
         'from'=> 'required',
         'to'=> 'required',
         'content'=> 'required',
        ]); // update_validated_anchor;
        $contactform->from = $request->from;
        $contactform->to = $request->to;
        $contactform->content = $request->content;
        $contactform->save(); // update_anchor
        return redirect()->route("contactforms.index")->with('message', "Successful update !");
    }
    public function mail($id, Request $request)
    {
        $contactform = ContactForm::find($id);
        $request->validate([
         'from'=> 'required',
         'to'=> 'required',
         'content'=> 'required',
        ]); // update_validated_anchor;
        $contactform->from = $request->from;
        $contactform->to = $request->to;
        $contactform->content = $request->content;
        $contactform->save(); // update_anchor
        // dd($request->to->email);
        Mail::send('emails.message', array( 
            'email' => $request->to, 
            'content' => $request->content,
        ), function($message) use ($request){ 
            $message->to($request->to); 
            $message->from('ca7vin@gmail.com');
        });
        return redirect()->route("contactforms.index")->with('message', "Réponse bien envoyée !");
    }

    public function destroy($id)
    {
        $contactform = ContactForm::find($id);
        $contactform->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
