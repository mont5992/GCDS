<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        return view('classroom.classroom');
    }
    
    // public function campus()
    // {
    //     return view('welcome');
    // }
    
}
