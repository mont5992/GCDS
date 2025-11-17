<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('forgotpassword');
    }

    public function submit(Request $request)
    {
         $request->validate(['email' => 'required|email']);

        // Use Laravel's built-in password broker
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('forgot_pass')->with('sent', true)
            : back()->with('error', __($status));
    }
}
