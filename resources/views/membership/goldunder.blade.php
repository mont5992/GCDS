

@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/join.css') }}" rel="stylesheet">
@endsection


@section('title', 'Classroom | Global Church Divinity School')

@section('content')
<style>
  form {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 800px;
    margin: auto;
    font-family: Arial, sans-serif;
    text-align: left; 
  }

  .col-md-12 {
    flex: 1 1 100%;
  }

  .col-md-6 {
    flex: 1 1 48%;
  }

  .col-md-4 {
    flex: 1 1 30%;
  }

  label {
    color: #999;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  input[type="email"],
  input[type="password"],
  select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 14px;
  }

  select {
    background-color: #fff;
  }

  @media (max-width: 768px) {
    .col-md-6,
    .col-md-4 {
      flex: 1 1 100%;
    }
  }
  .btn {
    margin-top: 25px;
    margin-left: 700px;
    border-radius: 12px;
    width: 125px;
    height: 45px;
    background-color: #1c4f6f;
    color: white;
    text-transform: uppercase;
  }
  
</style>
<center>
<div class= "gold_container">
    <div class="gold_image">
        <img src="{{ asset('images/membership-2.png') }}" alt="Join 2">
    </div>
    <h1>GOLD MEMBERSHIP</h1>
    <h2>UNDER 500 MORNING WORSHIP<div class="price">$3,600</div> <small> ($100/month) </small>OVER 3 YEARS </h2>
    <br>
    <ul>
        <li>Enlist One Church</li>
       <li>Unlimited number of students permitted to attend.</li>
        <li>10% off Global Church Network Resources</li>
        <li>Access to the Global Church Library.</li>
    </ul>
</div>
<br>
<div>
</div>
</center>
<center>
  <div class="registrationform">
  <h2>Registration</h2>
 
  <h3>Create Your Account</h3>
</div>
  <br>
   <p style="margin-left:-300px;padding:10px; color: #999;" >Choose a name for your Campus that reflect the name of your Church.</p>
   <small style="margin-left:-213px; color: #999;" >(For example, First Baptist Divinity School; Faith Assembly Divinity School; Discovery Divinity School)</small>
   <br>
   <br>
<form action ="/register_growth_membership" method="POST">
  <div class="col-md-6">
    <label style="color:#999">First Name</label><br>
    <input type="text" class="text" required name="first_name" value="">
  </div>

  <div class="col-md-6">
    <label style="color:#999">Last Name</label><br>
    <input type="text" class="text" required name="last_name" value="">
  </div>

  <div class="col-md-12">
    <label style="color:#999">Email</label><br>
    <input type="email" class="text" required name="email" value="">
  </div>

  <div class="col-md-12">
    <label style="color:#999">Address</label><br>
    <input type="text" class="text" required name="address" value="">
  </div>

  <div class="col-md-4">
    <label style="color:#999">State / Province / Region</label><br>
    <input type="text" class="text" required name="state" value="">
  </div>

  <div class="col-md-4">
    <label style="color:#999">City</label><br>
    <input type="text" class="text" required name="city" value="">
  </div>

  <div class="col-md-4">
    <label style="color:#999">Country</label><br>
    <select name="country" required>
      <option value="">Select</option>
      <option>USA</option>
      <option>Canada</option>
      <option>UK</option>
      <option>Other</option>
    </select>
  </div>

  <div class="col-md-6">
    <label style="color:#999">Primary Language</label><br>
    <select name="primary_language" required>
      <option value="">Select</option>
      <option>English</option>
      <option>Spanish</option>
      <option>French</option>
      <option>Other</option>
    </select>
  </div>

  <div class="col-md-6">
    <label style="color:#999">What Form of Ministry Do You Have?</label><br>
    <select name="ministry_form" required>
      <option value="">Select</option>
      <option>Pastoral</option>
      <option>Teaching</option>
      <option>Missionary</option>
      <option>Other</option>
    </select>
  </div>

  <div class="col-md-6">
    <label style="color:#999">Password</label><br>
    <input type="password" class="text" required name="password" value="">
  </div>

  <div class="col-md-6">
    <label style="color:#999">Confirm Password</label><br>
    <input type="password" class="text" required name="confirm_password" value="">
  </div>
</form>
</center>
<button type="button" class="btn btn-dark">Continue</button>
<br>
<br>
@endsection
