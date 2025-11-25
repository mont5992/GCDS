<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function index()
    {
        return view('global.globalchurch');
    }

    public function hub(){
        return view('global.globalhub');
    }

    public function globallife(){
        return view('global.globallife');
    }
}
