@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/join.css') }}" rel="stylesheet">
@endsection
<style>
  /* Reset and base */
  * {
    box-sizing: border-box;
  }
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: white;
    color: white;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  .assemblie_head {
    background: #d7d8d9;
    text-align: center;
    padding: 25px 0 90px;
    color: #9c1a1e;
    font-weight: 400;
    font-size: 1rem;
    user-select: none;
    margin-bottom: -75px;
  }
  .assemblie_head img {
    margin-top: 10px;
    width: 200px;
    height: 180px;
    user-select: none;
  }
  .container {
    max-width: 1100px;
    margin: 0 auto 60px;
    display: flex;
    justify-content: center;
    gap: 25px;
    padding: 20px 15px;
  }
  /* Plan Cards */
  .agplan {
    flex: 1;
    border-radius: 8px;
    padding: 40px 25px 35px;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: 0 6px 20px rgb(0 0 0 / 0.15);
    user-select: none;
    min-width: 250px;
    max-width: 320px;
  }
  /* Colors for each plan */
  .ag-certified {
    background-color: #0d3c57; /* dark blue */
  }
  .ag-licensed {
    background-color: #84455e; /* muted purple */
  }
  .ag-ordained {
    background-color: #a84145; /* deep red */
  }

  /* Icon styling */
  .agplan img, .plan-icon {
    width: 65px;
    height: 65px;
    margin-bottom: 20px;
    user-select: none;
  }

  /* Headings */
  h3 {
    font-size: 1.2rem;
    letter-spacing: 1.5px;
    margin: 0 0 8px;
    font-weight: 700;
    user-select: none;
    text-transform: uppercase;
    color: white;
  }
  h4 {
    font-size: 1.15rem;
    font-weight: 600;
    margin: 0 0 15px;
    user-select: none;
    color: white;
  }

  ul {
    padding-left: 1.15rem;
    margin: 0 0 35px;
    font-weight: 400;
    font-size: 0.95rem;
    line-height: 1.4;
    user-select: none;
    list-style-type: none;
    position: relative;
  }
  ul li {
    position: relative;
    margin-bottom: 8px;
    padding-left: 20px;
    color: white;
  }
  /* ul li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 9px;
    width: 10px;
    height: 10px;
    border: 2px solid white;
    border-radius: 50%;
  } */

  /* Divider line */
  .line {
    border-top: 2px solid rgba(255 255 255 / 0.25);
    width: 75%;
    margin: 20px 0 35px;
    user-select: none;
  }

  /* Pricing option buttons */
  .option {
    border: 1px solid white;
    padding: 8px 18px;
    font-weight: 700;
    font-size: 0.85rem;
    text-align: center;
    cursor: pointer;
    margin-bottom: 30px;
    border-radius: 3px;
    user-select: none;
    transition: background-color 0.25s ease, color 0.25s ease;
    width: fit-content;
    white-space: nowrap;
    background: transparent;
    color: white;
  }
  .option:hover {
    background-color: white;
    color: inherit;
    font-weight: 900;
  }

  /* The "or" text between pricing options */
  .or-text {
    font-weight: 400;
    font-size: 0.85rem;
    margin: 0 0 30px;
    user-select: none;
    color: white;
    text-align: center;
  }

  /* Responsive adjustments */
  @media (max-width: 950px) {
    .container {
      flex-wrap: wrap;
      justify-content: center;
    }
    .agplan {
      max-width: 90%;
      margin-bottom: 25px;
    }
  }
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
    margin-bottom:45px;
  }
</style>


@section('title', 'Classroom | Global Church Divinity School')

@section('content')
<div class="assemblie_head">
    <h2>Global Church Divinity School</h2>
    <img src="{{ asset('images/aglogo.png') }}" alt="Assemblies of God Logo">
</div>

<div class="container" role="main" aria-label="Ministry training plans">
  <!-- Certified -->
  <div class="ag-certified agplan" aria-labelledby="certified-title" role="region">
    <img src="{{ asset('images/ag-ordained-icon.png')}}" alt="" aria-hidden="true" />
    <h3 id="certified-title">CERTIFIED</h3>
    <h4>Birth Your Ministry</h4>
    <ul>
      <li>First level in ministerial training</li>
      <li>9 courses, plus one internship</li>
    </ul>
    <div class="line"></div>
    <button class="option" type="button" aria-label="$200 per course for Certified Plan">$200 PER COURSE</button>
    <div class="line"></div>
    <button class="option" type="button" aria-label="$450 for all courses in Certified Plan">$450 FOR ALL COURSES</button>
    <div class="or-text">or</div>
    <button class="option" type="button" aria-label="$37.50 per month for all courses in Certified Plan">$37.50 / MONTH FOR ALL COURSES</button>
  </div>

  <!-- Licensed -->
  <div class="ag-licensed agplan" aria-labelledby="licensed-title" role="region">
    <img src="{{ asset('images/ag-certified-icon.png')}}" alt="" aria-hidden="true" />
    <h3 id="licensed-title">LICENSED</h3>
    <h4>Build Your Ministry</h4>
    <ul>
      <li>Second level in ministerial training</li>
      <li>9 courses, plus one internship</li>
    </ul>
    <div class="line"></div>
    <button class="option" type="button" aria-label="$200 per course for Licensed Plan">$200 PER COURSE</button>
    <div class="line"></div>
    <button class="option" type="button" aria-label="$450 for all courses in Licensed Plan">$450 FOR ALL COURSES</button>
    <div class="or-text">or</div>
    <button class="option" type="button" aria-label="$37.50 per month for all courses in Licensed Plan">$37.50 / MONTH FOR ALL COURSES</button>
  </div>

  <!-- Ordained -->
  <div class="ag-ordained agplan" aria-labelledby="ordained-title" role="region">
    <img src="{{ asset('images/ag-licensed-icon.png')}}" alt="" aria-hidden="true" />
    <h3 id="ordained-title">ORDAINED</h3>
    <h4>Broaden Your Ministry</h4>
    <ul>
      <li>Third level in ministerial training</li>
      <li>7 courses, plus one internship</li>
    </ul>
    <div class="line"></div>
    <button class="option" type="button" aria-label="$200 per course for Ordained Plan">$200 PER COURSE</button>
    <div class="line"></div>
    <button class="option" type="button" aria-label="$350 for all courses in Ordained Plan">$350 FOR ALL COURSES</button>
    <div class="or-text">or</div>
    <button class="option" type="button" aria-label="$29.17 per month for all courses in Ordained Plan">$29.17 / MONTH FOR ALL COURSES</button>
  </div>
</div>

<center>
  <div class="registrationform">
  <h2>Registration</h2>
  <h3>Create Your Account</h3>
</div>
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
@endsection
