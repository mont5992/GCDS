@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('title', 'Contact | Global Church Divinity School')
@section('content')
<body>
    <div class="page page--contact">
  <div class="wrapper">
    <div class="content">
      <h1 class="h1">Contact</h1>

      {{-- Show success message --}}
      @if(session('success'))
        <p><span class="status status--complete">{{ session('success') }}</span></p>
      @endif

      <p>
        <img src="{{ asset('./images/header-logo.png') }}"
             alt="Global Church Network"
             class="logo">
      </p>

      <p>We enjoy hearing from you - whether it's a note of encouragement, a prayer request, or other information.</p>

      <p><strong>Send us a message:</strong></p>
      <form id="contact" class="grid_4" action="{{ route('contact.submit') }}" method="POST">
        @csrf

        <div class="textFields">
          <label>Name:</label>
          <input type="text" id="contact_name" name="contact_name"
                 value="{{ old('contact_name') }}" required>

          <label>Email:</label>
          <input type="email" id="email" name="contact_email"
                 value="{{ old('contact_email') }}" required>

          <label>Message:</label>
          <textarea id="contact_message" name="contact_message" required>{{ old('contact_message') }}</textarea>

          {{-- Validation Errors --}}
          @if($errors->any())
            <span class="status status--error">
              {{ $errors->first() }}
            </span>
          @endif

          <div>
            <input type="submit" value="Submit" class="btn">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
@endsection