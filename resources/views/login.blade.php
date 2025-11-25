@extends('layouts.app')

@section('title', 'Classroom | Global Church Divinity School')

@section('content')
<style>

.loginimg {
    background-image: url("{{ asset('images/image.png') }}");
    background-size: cover;
    background-position: center;
    padding: 50px; 
    border-radius: 10px;
    position: relative;
}

.hidden {
    visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.toggle-container {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.switch {
    position: relative;
    display: inline-block;
    width: 55px;
    height: 28px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0; 
    left: 0;
    right: 0; 
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 34px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 22px;
    width: 22px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

input:checked + .slider {
    background-color: #1C4F6F;
}

input:checked + .slider:before {
    transform: translateX(26px);
}

.toggle-label {
    margin-left: 12px;
    font-size: 16px;
    font-weight: bold;
}
</style>

<div class="content login">
    <div>

        <div class="toggle-container">
            <label class="switch">
                <input type="checkbox" id="toggleForm">
                <span class="slider round"></span>
            </label>
            <span class="toggle-label">Switch Form</span>
        </div>

        <div class="login_form loginimg">

            <form action="{{ url('login') }}" method="POST" id="form1">
                @csrf
                <h2>Log In to your account (User Login)</h2>

                @if(session('login_err'))
                    <span class="status status--error">{{ session('login_err') }}</span>
                @endif

                <div class="textFields">
                    <label>E-mail:</label>
                    <input class="text" type="email" name="email" required>

                    <label>Password:</label>
                    <input class="text" type="password" name="passw" required>

                    <a class="forgot_pass" href="{{ url('forgot_pass') }}">Forgot Password?</a>
                </div>

                <p><button type="submit">LOGIN</button></p>
            </form>

        <form action="{{ route('admin.login') }}" method="POST" id="form2" class="hidden">

                @csrf
                <h2>Log In to your account (Admin Login)</h2>

                @if(session('login_err'))
                    <span class="status status--error">{{ session('login_err') }}</span>
                @endif

                <div class="textFields">
                    <label>Username:</label>
                    <input class="text" type="text" name="admin_name" required>

                    <label>Password:</label>
                    <input class="text" type="password" name="admin_passw" required>

                    <a class="forgot_pass" href="{{ url('forgot_pass') }}">Forgot Password?</a>
                </div>

                <p><button type="submit">LOGIN</button></p>
            </form>

        </div>
    </div>
</div>

<script>
    const toggle = document.getElementById('toggleForm');
    const form1 = document.getElementById('form1');
    const form2 = document.getElementById('form2');

    toggle.addEventListener('change', function () {
        if (this.checked) {
            form1.classList.add('hidden');
            form2.classList.remove('hidden');
        } else {
            form1.classList.remove('hidden');
            form2.classList.add('hidden');
        }
    });
</script>

@endsection
