<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function storeContactForm(Request $request) 
    { 
        $request->validate([ 
            'email' => 'required|email', 
        ]); 
        $input = $request->all(); 
        //  Send mail to admin 
        $email = new Email();
        $email->email = $request->email;
        if (Email::where('email', $request->email)->exists()) {
            return redirect()->back()->with(['error' => 'This Email is already registered !']);
        } else {
            Mail::send('emails.newsletter', array( 
                'email' => $input['email'], 
            ), function($message) use ($request){ 
                $message->to($request->email, 'Admin'); 
                $message->from('ca7vin@gmail.com');
            }); 
            $email->save();
            return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
        }
    }
}