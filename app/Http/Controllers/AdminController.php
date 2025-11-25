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

    $admin = admin_users::where('name', $request->admin_name)->first();

    if (!$admin) {
        return back()->with('error', 'Invalid username or password');
    }

    $inputPassword = $request->admin_passw;
    $storedPassword = $admin->pw;

    // Detect hash type
    $isSHA512 = strlen($storedPassword) === 128 && ctype_xdigit($storedPassword);
    $isBcrypt = strlen($storedPassword) === 60 && str_starts_with($storedPassword, '$2');

    // --- BCRYPT ---
    if ($isBcrypt) {
        if (!\Hash::check($inputPassword, $storedPassword)) {
            return back()->with('error', 'Invalid username or password');
        }
    }
    // --- SHA-512 ---
    else if ($isSHA512) {

        $sha512_input = hash("sha512", $inputPassword);

        if ($sha512_input !== $storedPassword) {
            return back()->with('error', 'Invalid username or password');
        }

        // UPDATE using name (NO id required)
        admin_users::where('name', $request->admin_name)
            ->update(['pw' => \Hash::make($inputPassword)]);
    }
    else {
        return back()->with('error', 'Password format not recognized');
    }

    // Start session
    session([
        'admin_logged_in' => true,
        'admin_name' => $admin->name
    ]);

    return redirect()->route('admin.dashboard');
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
