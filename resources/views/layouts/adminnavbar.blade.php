<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard Gcds</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
<body>

<div class="sidebar">
    <ul>
        <li><a href="dashboard" class="active"><i class="fa-solid fa-user"></i> Manage User</a></li>
        <li>
    <a href="#manageCourseMenu" data-bs-toggle="collapse" aria-expanded="false">
        <i class="fa-brands fa-discourse"></i> Manage Course
    </a>
    <ul class="collapse" id="manageCourseMenu">
        <li><a href="/admin/manage-course-add">Add Course</a></li>
        <li><a href="/admin/manage-course/view">View Courses</a></li>
        <li><a href="/admin/manage-course/categories">Manage Categories</a></li>
    </ul>
</li>
        <li><a href="#"><i class="fas fa-question-circle"></i> Manage Quizzes</a></li>
        <li><a href="#"><i class="fa-regular fa-address-card"></i> Manage Bios</a></li>
        <li><a href="#"><i class="fa-solid fa-building"></i> Manage Organizations</a></li>
        <li><a href="#"><i class="fa-solid fa-record-vinyl"></i> Manage Tracks</a></li>
        <li><a href="#"><i class="fa-solid fa-book"></i> Manage Library</a></li>
    </ul>
</div>
<div class="content">
@yield('content')
</div>

</body>
</html>
