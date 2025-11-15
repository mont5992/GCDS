@extends('layouts.app')

@section('title', 'Credentials | Global Church Divinity School')

@section('content')

<style>
  .preview_container .mod .button {
  display: inline-block;
  line-height: 40px;
  background: #1C4F6F;
  color: #fff;
  padding: 0 30px;
  font-family: 'Open Sans', sans-serif;
  text-transform: uppercase;
  font-size: 14px;
  border-radius: 5px;
  transition: all 0.1s linear;
  text-decoration: none;
}
  </style>

<!-- HERO SECTION -->
<div class="main-classroom" 
     style="background: #ebe8df url('{{ asset('images/credentials.png') }}') no-repeat center top; 
            background-size: cover; 
            padding: 80px 0;">
  <div class="wrapper">
    <h1 style="text-align:center; color:white; font-family:'Open Sans', sans-serif; font-weight:700; font-size:40px; line-height:1.3;">
      ADVANCE YOUR MINISTRY WHILE EARNING WORLD<br>CLASS CREDENTIALS
    </h1>
  </div>
</div>


<div class="wrapper" 
     style="display:flex; flex-wrap:wrap; justify-content:space-between; gap:40px; margin:60px auto; max-width:1200px;">

 
  <div style="flex:1 1 60%; background-color:#fff; padding:40px; border-radius:10px;">
    <h2 style="font-size:32px; font-family:'Open Sans', sans-serif; font-weight:700; color:#1c4f6f; margin-bottom:25px;">
      World Class Training Partnership
    </h2>

    <p style="font-size:17px; line-height:1.8; color:#333; margin-bottom:20px;">
      Through the synergistic efforts of Dr. Leonard Sweet, Dr. Kenneth C. Ulmer and Dr. James O. Davis, 
      the Global Church Network has forged a global relationship through the Global Church Divinity School. 
      It is now possible for you to obtain the finest teaching while continuing part-time or full-time in ministry. 
      You do not have to stop what you are doing, relocate to a new city, or incur astronomical debt in order 
      to receive high-level ministry training that will help you succeed in fulfilling your divine destiny.
    </p>

    <p style="font-size:17px; line-height:1.8; color:#333;">
      Through the GCDS, you have the opportunity to personally and professionally achieve many dynamic credentialing levels 
      in seven powerful ministry tracks. These highly recognized, credentialing achievements are awarded to Christian leaders, 
      who stair-step through the Novice, Apprentice, Specialist, Docent, Maven, Master and Mentor learning levels of understanding 
      and application. The crowning credential, Omega, is only issued after all the ministry tracks have been fully completed.
    </p>
  </div>

  
  <div style="flex:1 1 35%; text-align:center;">
    <img src="{{ asset('images/home_pic1.jpg') }}" 
         alt="Training Leaders" 
         style="width:100%; max-width:300px; border-radius:8px; margin-bottom:25px; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
         <br>
    <img src="{{ asset('images/home_pic_3.jpg') }}" 
         alt="Global Church Gathering" 
         style="width:100%; max-width:300px; border-radius:8px; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
  </div>

</div>

<div>
</div>
<div class="campus" style="background-color: #f3f0f0; padding:60px 0;">
  <div class="wrapper" 
       style="display:flex; flex-wrap:wrap; align-items:flex-start; justify-content:space-between; gap:40px; max-width:1200px; margin:auto;">

    <!-- LEFT SIDE (TEXT) -->
    <div style="flex:1 1 60%;">
      <h1 style="text-align:center; color:#1c4f6f; font-family:'Open Sans', sans-serif; font-weight:700; margin-bottom:25px;">
        The Global Church Library<sup>®</sup>
      </h1>
      <p style="font-size:17px; line-height:1.8; color:#333;">
       Dr. Elmer Towns, Cofounder of Liberty University has made available the Elmer Towns Legacy Library for all Global Church Divinity School Members. He serves as the GCDS Dean. The Elmer Towns Legacy Library consists of more than 1 terabyte of ministry resources valued at more than $15,000. The Elmer Towns Legacy Library consists of more than 225 books in 50 languages, 
       along with every teaching lesson that he has given over the last 50 years. Dr. Towns has taught more than 260,000 students.
      </p>
    </div>

    <!-- RIGHT SIDE (IMAGES) -->
    <div style="flex:1 1 35%; text-align:center;">
      <img src="{{ asset('images/elmer.png') }}" 
           alt="Training Leaders" 
           style="width:100%; max-width:300px; border-radius:8px; margin-bottom:25px;">
    </div>

  </div>
</div>

<div class="campus" style="background-color: #d6dede; padding:60px 0;">
  <div class="wrapper">
    <h1 style="text-align:center; color:#1c4f6f; font-family:'Open Sans', sans-serif; font-weight:700; margin-bottom:25px;">
      Credentials & Awards
    </h1>

    <p style="font-size:18px; text-align:center; line-height:28px; margin-bottom:50px;">
      The Global Church Divinity School<sup><small>®</small></sup> offers 8 Educational Credentials with 7 levels of learning in each. Each GCDS track and level has been developed to equip Christian leaders with the finest principled and practical training.
    </p>

    <ul style="
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 60px 100px;
      list-style: none;
      padding: 0;
      margin: 0 auto;
      max-width: 1100px;
    ">
      <li class="preaching" style="text-align:center;">
        <img src="{{ asset('images/gcdstv_Icons_Preaching_FINAL.png') }}" style="width:60px; margin-bottom:15px;" alt="">
        <h2 style="color:#064f73; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">Preaching</h2>
        <h3 style="font-size:16px; color:#3a6b8d; margin-bottom:10px;">Communication Arts</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">Both Gutenberg and Google, with expertise in all media forms of communication & story-telling including Instagram, YouTube, Tik Tok, Vimeo and Online Streaming.</p>
      </li>

      <li class="teaching" style="text-align:center;">
        <img src="{{ asset('images/gcdstv_Icons_Teaching_FINAL.png') }}" style="width:60px; margin-bottom:15px;" alt="">
        <h2 style="color:#064f73; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">Teaching</h2>
        <h3 style="font-size:16px; color:#3a6b8d; margin-bottom:10px;">Parenting, Catechist, Bible Studies, Lecturers & Authors</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">Communicating the Jesus Story on the Lecture Circuit through professorships in authoring books and resources for the church.</p>
      </li>

      <li class="healing" style="text-align:center;">
        <img src="{{ asset('images/gcdstv_Icons_Healing_FINAL.png') }}" style="width:60px; margin-bottom:15px;" alt="">
        <h2 style="color:#064f73; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">Healing</h2>
        <h3 style="font-size:16px; color:#3a6b8d; margin-bottom:10px;">Pastoral Vocation</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">Church health is found in the Sozo Jesus who heals relationships with individuals, communities, and cities: mental, physical, emotional health.</p>
      </li>

      <li class="story" style="text-align:center;">
        <img src="{{ asset('images/gcdstv_Icons_TheStory_FINAL.png') }}" style="width:60px; margin-bottom:15px;" alt="">
        <h2 style="color:#064f73; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">The Story</h2>
        <h3 style="font-size:16px; color:#3a6b8d; margin-bottom:10px;">Scripture, Traditional, and Historical Studies</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">Biblical studies is reframed as learning, not only as 66 books, but as One Masternarrative. Historical studies unfolding the never-ending story of the God’s Love for mankind.</p>
      </li>

      <li class="arts" style="text-align:center;">
        <img src="{{ asset('images/gcdstv_Icons_TheArts_FINAL.png') }}" style="width:60px; margin-bottom:15px;" alt="">
        <h2 style="color:#064f73; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">The Arts & Imagination</h2>
        <h3 style="font-size:16px; color:#3a6b8d; margin-bottom:10px;">Worship, Liturgy and Creativity</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">A Theology of play teaches the rapture of being alive in Christ through the three transcendentals of being: beauty, truth, goodness.</p>
      </li>

      <li class="formation" style="text-align:center;">
        <img src="{{ asset('images/gcdstv_Icons_ChristFormation_FINAL.png') }}" style="width:60px; margin-bottom:15px;" alt="">
        <h2 style="color:#064f73; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">Christ Formation</h2>
        <h3 style="font-size:16px; color:#3a6b8d; margin-bottom:10px;">Christ Formation</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">Including MRI-based (M=Missional, R=Relational, I=Incarnational) Personal Prayer, Spirit-Empowerment & Faith Coaching.</p>
      </li>

      <li class="semiotics" style="text-align:center;">
        <img src="{{ asset('images/gcdstv_Icons_ContextualSemiotics_FINAL.png') }}" style="width:60px; margin-bottom:15px;" alt="">
        <h2 style="color:#064f73; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">Contextual Semiotics</h2>
        <h3 style="font-size:16px; color:#3a6b8d; margin-bottom:10px;">Missiology, Ecclesiology, Synergistic Networking</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">Entrepreneurial Ministries, Leadership Development, High CI [Contextual Intelligence] Cultivation, & Intergenerational Ministries yoked to a theology of trusteeship and creation care.</p>
      </li>

      <li class="omega" style="text-align:center;">
        <img src="{{ asset('images/gcdstv_Icons_Omega_FINAL.png') }}" style="width:60px; margin-bottom:15px;" alt="">
        <h2 style="color:#064f73; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">Omega</h2>
        <p style="font-size:20px; line-height:24px; color:#333;">Upon the completion of all 7 ministry tracks, the student will have a face to face 3 day intensive with 30-40 students, with one of the Board of Governors members.</p>
      </li>
    </ul>
  </div>
</div>

<div class="campus" style="background-color:white; padding:60px 0;">
  <div class="wrapper">
    <h2 style="text-align:center; font-family:'Open Sans', sans-serif; font-weight:500; margin-bottom:25px;">
      The Global Church Divinity School offers 3 Awards as for the completion of recognized milestones within the 7 tracks and 7 levels.
</h2>

    <p style="font-size:18px; text-align:center; line-height:28px; margin-bottom:50px;">
      The Global Church Divinity School<sup><small>®</small></sup> offers 8 Educational Credentials with 7 levels of learning in each. Each GCDS track and level has been developed to equip Christian leaders with the finest principled and practical training.
    </p>

    <ul style="
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 60px 100px;
      list-style: none;
      padding: 0;
      margin: 0 auto;
      max-width: 1100px;
    ">
      <li class="preaching" style="text-align:center;">
        <img src="{{ asset('images/award-1.png') }}" style="width:115px; margin-bottom:15px;" alt="">
        <h2 style="color:#e07700; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">THE DEAN’S</h2>
        <h3 style="font-size:16px; margin-bottom:10px;color:#e07700">AWARD</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">If pastors has chosen the Gold, Grand or Global Memberships, he they will serve as the Dean of their local, regional or global divinity school. The Dean’s Award is given to those students who have completed the learning levels of <strong>Novice and Apprentice</strong> in all seven ministry tracks.</p>
        <p>If a pastor has chosen the Growth Membership, the Dean’s Award will be sent electronically, signed by the Board of Governors.</p>
      </li>

      <li class="teaching" style="text-align:center;">
        <img src="{{ asset('images/award-2.png') }}" style="width:115px; margin-bottom:15px;" alt="">
        <h3 style="font-family:'Open Sans', sans-serif; font-weight:300; margin-bottom:5px;color:#00edeb">THE CHANCELLOR’S</h3>
        <h3 style="font-size:16px; color:#3a6b8d; margin-bottom:10px;color:#00edeb">AWARD</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">The Chancellor’s Award is given to all students who have completed the learning levels of <strong> Novice, Apprentice, Specialist, Docent and Maven </strong>for all seven ministry tracks. This prestigious award will be provided electronically to the student, signed by the Board of Governors</p>
      </li>

      <li class="healing" style="text-align:center;">
        <img src="{{ asset('images/award-3.png') }}" style="width:115px; margin-bottom:15px;" alt="">
        <h2 style="color:#f9d700; font-family:'Open Sans', sans-serif; font-weight:600; margin-bottom:5px;">THE BOARD OF</h2>
        <h3 style="font-size:16px; color:#f9d700; margin-bottom:10px;">GOVERNORS AWARD</h3>
        <p style="font-size:20px; line-height:24px; color:#333;">Once the Christian leaders have completed <strong> all seven levels of learning for all seven ministry tracks,</strong> they will have opportunity to achieve the Omega Credential. The Omega Credential is only given after a three-day intensive with one of the Board of Governors. The Board of Governors is comprised of the finest ministry leaders from around the world.</p>
      </li>

     
    </ul>
  </div>
</div>

<div class="content tan_bg sign_up" style="text-align:center;background:#e8e2d3;padding:50px 0;font-size:18px;">
  <div class="wrapper">
    <p>The Global Church Divinity School® Membership Is<br/>The Doorway To The Finest Ministry Education Today!
</p>
<br>
   <div class="preview_container">
        <a class="mod preview" href="#leondard">
        <span class="button">SIGN UP</span>
        </a>
  </div>






@endsection
