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

    
    $isSHA512 = strlen($storedPassword) === 128 && ctype_xdigit($storedPassword);
    $isBcrypt = strlen($storedPassword) === 60 && str_starts_with($storedPassword, '$2');

   
    if ($isBcrypt) {
        if (!\Hash::check($inputPassword, $storedPassword)) {
            return back()->with('error', 'Invalid username or password');
        }
    }
    else if ($isSHA512) {

        $sha512_input = hash("sha512", $inputPassword);

        if ($sha512_input !== $storedPassword) {
            return back()->with('error', 'Invalid username or password');
        }

        
        admin_users::where('name', $request->admin_name)
            ->update(['pw' => \Hash::make($inputPassword)]);
    }
    else {
        return back()->with('error', 'Password format not recognized');
    }

    
    session([
        'admin_logged_in' => true,
        'admin_name' => $admin->name
    ]);

    return redirect()->route('admin.dashboard');
}

public function dashboard() {

    $schools = User::whereNotNull('school_name')
                    ->pluck('school_name')
                    ->unique()
                    ->values();

    return view('admin.dashboard', compact('schools'));

}
    public function userdata(Request $request)
{

    if ($request->ajax()) {

        $query = User::select('id','first_name','last_name','school_name','user_level','account_level','country','student_of')
        ->whereNull('student_of');
       
        if ($request->school_name) {
            $query->where('school_name', $request->school_name);
        }
        return DataTables::of($query)
    ->addColumn('action', function ($row) {
        return '
            <button class="editBtn"
                data-id="'.$row->id.'"
                data-first="'.$row->first_name.'"
                data-last="'.$row->last_name.'"
                data-school="'.$row->school_name.'"
                data-level="'.$row->user_level.'"
                data-country="'.$row->country.'"
                style="padding:6px 10px; background:#1C4F6F; color:white; border:none; border-radius:4px; cursor:pointer;">
                <i class="fas fa-edit"></i>
            </button>
        ';
    })
    ->addColumn('export_students', function($row) {
      
    if (!empty($row->school_name) && $row->student_of === null) {
    return '
        <button onclick="window.location.href=\''.route('export.leaders.students').'?school_name='.$row->school_name.'\'"
            class="btn btn-success"
            style="padding:6px 12px; background:#1C4F6F; color:white; border:none; border-radius:4px; cursor:pointer;">
            Export Students
        </button>
    ';
}else {
        return 'No Students';
    }
})


    ->rawColumns(['action', 'export_students'])
    ->make(true);

    }
}

public function leaderstudents(Request $request)
{
    $school_name = $request->query('school_name');

    $users = User::where('school_name', $school_name)
                 ->get();

    $list = [
        "Last Name|First Name|User Level|School Name|Account Level|Email|Phone|Address|City|State/Province|Zip|Country|Promo Used|Organization Code"
    ];

    foreach ($users as $user) {
        $list[] =
            $user->last_name . '|' .
            $user->first_name . '|' .
            $user->user_level . '|' .
            $user->school_name . '|' .
            $user->account_level . '|' .
            $user->email . '|' .
            $user->addr1 . '|' .
            $user->city . '|' .
            $user->state . '|' .
            $user->zip . '|' .
            $user->country . '|' .
            $user->promo . '|' .
            $user->organization_code;
    }

    $filename = "students_of_" . str_replace(' ', '_', $school_name) . "-" . date('m-d-y') . ".csv";

    $headers = [
        "Content-Type" => "text/csv; charset=utf-8",
        "Content-Disposition" => "attachment; filename={$filename}",
    ];

    $callback = function () use ($list) {
        $file = fopen('php://output', 'w');

        foreach ($list as $line) {
            fputcsv($file, explode('|', $line));
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}  

   public function edituserdata(Request $req)
{
    $user = User::findOrFail($req->user_id);
    $fields = [
        'first_name',
        'last_name',
        'school_name',
        'user_level',
        'country'
    ];
    foreach ($fields as $field) {
        if ($req->has($field)) {

            
            $user->$field = $req->$field === "" ? null : $req->$field;
        }
    }
    $user->save();
    return response()->json([
        'success' => 'Record updated successfully'
    ]);
}

public function exportleaders()
{
    
    $users = User::whereNull('student_of')->get();

    $user_array = [];

    foreach ($users as $user) {

        $entry['user'] = $user;

        
        $students = User::where('student_of', $user->user_hash)->get();

        if ($students->count() > 0) {
            $entry['students'] = $students;
        }

        $user_array[] = $entry;
    }

    
    $list = [
        "Last Name|First Name|User Level|School Name|Account Level|Email|Phone|Address|City|State/Province|Zip|Country|Promo Used|Organization Code"
    ];

    foreach ($user_array as $user) {

        $leader = $user['user'];

        $school = 'Individual';

        if ($leader->school_name && in_array($leader->account_level, ['master', 'submaster'])) {
            $school = $leader->school_name;

         
            $list[] =
                $leader->last_name . '|' .
                $leader->first_name . '|' .
                $leader->user_level . '|' .
                $school . '|' .
                $leader->account_level . '|' .
                $leader->email . '|' .
              
                $leader->addr1 . '|' .
                $leader->city . '|' .
                $leader->state . '|' .
                $leader->zip . '|' .
                $leader->country . '|' .
                $leader->promo . '|' .
                $leader->organization_code;
        }
    }

    $filename = "leaders-" . date('m-d-y') . ".csv";

    
    $headers = [
        "Content-Type" => "text/csv; charset=utf-8",
        "Content-Disposition" => "attachment; filename={$filename}",
    ];

    
    $callback = function () use ($list) {
        $file = fopen('php://output', 'w');

        foreach ($list as $line) {
            fputcsv($file, explode('|', $line));
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}





}
