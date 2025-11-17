<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="content login">
  <div class="wrapper-2">

    <div class="login_form">
      <form action="{{ url('login') }}" method="POST">
        @csrf
        <h2>Log In to your account</h2>

        @if(session('login_err'))
          <span class="status status--error">{{ session('login_err') }}</span>
        @endif

        <div class="textFields">
          <label for="email">E-mail:</label>
          <input class="text" type="email" name="email" id="email" required>

          <label for="passw">Password:</label>
          <input class="text" type="password" name="passw" id="passw" required>

          <a class="forgot_pass" href="{{ url('forgot_pass') }}">Forgot Password?</a>
        </div>

        <p><button type="submit">LOGIN</button></p>
      </form>
    </div>

  </div>
</div>

</body>
</html>