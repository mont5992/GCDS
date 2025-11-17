<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="page page--forgot">
    @if (session('sent'))
        <span class="status status--notice">
            Information has been sent to the provided email on how to reset your password.
        </span>
    @else
        @if (session('error'))
            <span class="status status--error">{{ session('error') }}</span>
        @endif

        <form action="{{ route('forgot_pass.submit') }}" method="POST">
            @csrf
            <h1 class="h1">Forgot Password?</h1>

            <p>
                Enter Email Address:<br>
                <input type="email" name="email" required>
           

            <br><br>
            <input type="submit" value="Submit">
             </p>
        </form>
    @endif
</div>
</body>
</html>