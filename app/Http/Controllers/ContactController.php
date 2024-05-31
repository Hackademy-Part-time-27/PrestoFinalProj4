<?php

namespace App\Http\Controllers;

use \App\Mail\ContactMail;
use \Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function viewForm()
    {
        return view('contacts.contacts');
    }

    public function send(Request $request)
    {

        if ($request->email == '' || $request->message == '') {
            return redirect()->back()->with(['error' => 'I campi non possono essere vuoti.']);
        }

        Mail::to('admin@example.com')->send(new ContactMail($request->email, $request->message));
        return redirect()->back()->with(['success' => 'Richiesta inviata con successo!']);

    }
}