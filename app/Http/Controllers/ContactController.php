<?php

namespace App\Http\Controllers;

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

        \Illuminate\Support\Facades\Mail::to('admin@example.com')->send(new \App\Mail\ContactMail($request->email, $request->message));
        return redirect()->back()->with(['success' => 'Richiesta inviata con successo!']);

    }
}