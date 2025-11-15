<?php

namespace App\Http\Controllers;

use App\Models\Memberships;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $get_data = Memberships::all();
       
        return view('welcome');
    }

    public function membership()
    {
        return view('membership.membership');
    }

      public function showGrowth()
    {
        
        return view('membership.growth'); 
    }
      public function showgoldunder()
    {
        
        return view('membership.goldunder'); 
    }
      public function showgoldabove()
    {
        
        return view('membership.goldabove'); 
    }
      public function showgrand()
    {
        
        return view('membership.grand'); 
    }
      public function showglobal()
    {
        
        return view('membership.global'); 
    }
      public function showgeneral()
    {

        return view('membership.general'); 
    }
      public function assembliesgod()
    {

        return view('membership.assemblie'); 
    }

}

