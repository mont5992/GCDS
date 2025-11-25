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

    .sidebar {
        width: 245px;
        background-color: #d6dede;
        padding: 30px;
        border-radius: 0 8px 8px 0;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        height: 100vh;
        box-sizing: border-box;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar li {
        margin-bottom: 20px;
    }

    .sidebar a {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #333;
        padding: 10px 12px;
        border-radius: 4px;
        transition: 0.2s;
        font-size: 20px;
        font-weight: bold;
    }

    .sidebar a i {
        margin-right: 8px;
    }

    .sidebar a:hover {
        background-color: #ccc;
    }

    .sidebar a.active {
        background-color: #1C4F6F;
        color: white;
    }

    .content {
        flex: 1;
        padding: 30px;
        background-color: #f5f5f5;
        height: 100vh;
        box-sizing: border-box;
    }
    h1{
        /* text-align: center; */
        font-size: 45px;
        font-weight: bolder;
        color:#1C4F6F;
         font-family: 'Times New Roman', Times, serif;
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

<body>

<div class="sidebar">
    <ul>
        <li><a href="#" class="active"><i class="fa-solid fa-user"></i> Manage User</a></li>
        <li><a href="#"><i class="fa-brands fa-discourse"></i> Manage Course</a></li>
        <li><a href="#"><i class="fas fa-question-circle"></i> Manage Quizzes</a></li>
        <li><a href="#"><i class="fa-regular fa-address-card"></i> Manage Bios</a></li>
        <li><a href="#"><i class="fa-solid fa-building"></i> Manage Organizations</a></li>
        <li><a href="#"><i class="fa-solid fa-record-vinyl"></i> Manage Tracks</a></li>
        <li><a href="#"><i class="fa-solid fa-book"></i> Manage Library</a></li>
    </ul>
</div>

<div class="content"style="column-gap: 20px;">
    <img src="{{ asset('images/logo.png') }}" alt="Global Church Divinity School" width="150">
 <h1>Admin Dashboard</h1>

<table id="userTable" class="display nowrap" style="width:100%">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last name</th>
        </tr>
    </thead>
</table>
<script>
$(document).ready(function () {
    $('#userTable').DataTable({
        processing: true,
        serverSide: true,
        scrollX: true,
        

        ajax: {
            url: "{{ route('userdata') }}",
            type: "GET",
            xhrFields: { withCredentials: true } 
        },

        columns: [
            { data: 'first_name', name: 'first_name' },
            { data: 'last_name', name: 'last_name' }
            
        ],

        dom: 'Bfrtip',
        buttons: ['copy', 'excel', 'pdf', 'print', 'colvis'],
    });
});
</script>



</html>
