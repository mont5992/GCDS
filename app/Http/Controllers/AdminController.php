<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin_users;
use App\Models\user;
use Yajra\DataTables\Facades\DataTables;


class AdminController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'admin_name' => 'required',
            'admin_passw' => 'required',
        ]);

        
        $admin = admin_users::where('name', $request->admin_name)  
                          ->first();

        if ($admin) {
            session(['admin_logged_in' => true]);
           return redirect()->route('admin.dashboard');
        }

        return redirect('/login')->with('error', 'Invalid credentials');
    }

    public function dashboard (){

        return view ('admin.dashboard');
    }
    public function userdata(Request $request)
    {
    
    if ($request->ajax()) {
        $data = user::select('first_name', 'last_name') ->get();
        
        return DataTables::of($data)->make(true);
    }
    }

}
