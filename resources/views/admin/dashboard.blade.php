
@extends('layouts.adminnavbar')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard Gcds</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
   
 body {
        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
        display: flex;        
    }
    .content {
        flex: 1;
        padding: 30px;
        background-color: #f5f5f5;
        height: 100vh;
        box-sizing: border-box;
    }

    h1 {
        font-size: 45px;
        font-weight: bolder;
        color:#1C4F6F;
        font-family: 'Times New Roman', Times, serif;
    }

    
    .custom-modal {
        display: none;
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(0,0,0,0.6);
        justify-content: center;
        align-items: center;
    }

    .modal-content {
        width: 400px;
        background: white;
        padding: 25px;
        border-radius: 8px;
        margin: 80px auto;
        padding-right:45px;
    }
    
    .close-modal {
        float: right;
        cursor: pointer;
        font-size: 20px;
        font-weight: bold;
    }

    .input-box {
        width: 100%;
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid gray;
        border-radius: 5px;
    }

    .save-btn {
        width: 100%;
        padding: 12px;
        background: #1C4F6F;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        border-radius: 5px;
      
    }
    #addUserBtn{
        background-color: #1C4F6F;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 12px 26px;
        cursor: pointer;
    }

    
</style>
</head>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<body>



<div class="content">
    <img src="{{ asset('images/logo.png') }}" alt="Global Church Divinity School" width="180">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Admin Dashboard</h1>
    <a href="{{ route('export.users') }}" class="btn btn-primary" id="addUserBtn">
    <i class="fa-solid fa-plus"></i> Export All Users
    </a>
    <a href="{{ route('export.leaders') }}" class="btn btn-primary" id="addUserBtn">
    <i class="fa-solid fa-plus"></i> Export Campus Leaders
    </a>
    </div>
    <table id="userTable" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last name</th>
                <th>School name</th>
                <th>User Level</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>

    <div id="editModal" class="custom-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>

            <h2>Edit User</h2>

            <form id="updateForm" action="{{ route('update.user') }}" method="POST  ">
                @csrf

                <input type="hidden" id="user_id">

                <label>First Name</label>
                <input type="text" id="first_name" class="input-box">

                <label>Last Name</label>
                <input type="text" id="last_name" class="input-box">

                <label>School Name</label>
                <input type="text" id="school_name" class="input-box">

                <label>User Level</label>
                <input type="text" id="user_level" class="input-box">

                <label>Country</label>
                <input type="text" id="country" class="input-box">

                <button type="submit" class="save-btn">Update</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var userdataRoute = "{{ route('userdata') }}";
    var updateUserRoute = "{{ route('update.user') }}";
    var csrfToken = "{{ csrf_token() }}";
</script>
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
@endsection