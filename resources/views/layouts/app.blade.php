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
    <div class="wrapper">

  <a class="logo" href="https://gcds.tv/"><img src="{{ url('/images/footer-logo.png') }}" alt=""></a>

    <ul>
    <li><a href="{{ url('/about') }}">ABOUT</a></li>
    <li><a href="{{ url('/faq') }}">FAQ</a></li>
    <li><a href="{{url('/')}}">RESOURCES</a></li>
    <li><a href="{{url('/membership')}}">MEMBERSHIP</a></li>
    <li><a href="{{ url('/contact') }}">CONTACT US</a></li>
    <li><a href="{{ url('/privacy-policy') }}">PRIVACY POLICY</a></li>
  </ul>
  </footer>

</body>
</html>
