<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|email',
            'contact_message' => 'required|string',
        ]);


        return redirect()->route('contact')
                         ->with('success', 'Your message has been sent to an administrator. We will contact you shortly via the email you provided.');
    }
}
