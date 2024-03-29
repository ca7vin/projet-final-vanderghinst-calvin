<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();
        $this->authorize('viewAny', Contact::class);
        return view("/back/contacts/all",compact("contacts"));
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        if (! Gate::allows('update-contact', $contact)) {
            abort(403);
        }
        return view("/back/contacts/edit",compact("contact"));
    }
    public function update($id, Request $request)
    {
        $contact = Contact::find($id);
        $this->authorize('update', $contact);
        $request->validate([
         'adress'=> 'required',
         'phone'=> 'required',
         'mail'=> 'required',
        ]); // update_validated_anchor;
        $contact->adress = $request->adress;
        $contact->phone = $request->phone;
        $contact->mail = $request->mail;
        $contact->save(); // update_anchor
        return redirect()->route("contacts.index")->with('message', "Successful update !");
    }
}
