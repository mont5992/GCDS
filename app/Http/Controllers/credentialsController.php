<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class credentialsController extends Controller
{
    public function credentials()
    {
        return view('credentials.credentials');
    }
}
