<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Global Church Divinity School')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @yield('styles')
</head>
<body>

  {{-- Include shared navbar --}}
  @include('layouts.navbar')

  {{-- Main content section --}}
  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; 2025 Global Church Divinity School. All rights reserved.</p>
    <p>Part of the <a href="http://www.gcnw.tv" target="_blank">Global Church Network</a></p>
  </footer>

</body>
</html>
