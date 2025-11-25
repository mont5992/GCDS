@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('title', 'About | Global Church Divinity School')
@section('content')
<body>
    <div class="about">

  <div class="content">
    <div class="wrapper">
      <h1>About</h1>

      <a href="{{ asset('images/objectives.jpg') }}" target="_blank">
        <img class="right" src="{{ asset('images/objectives.jpg') }}" width="500" alt="GCLC Global Objectives">
      </a>

      <p>The Global Church Divinity School houses <span>more than 200 interactive training curriculum courses by renowned Christian leaders from every major world region.</span></p>

      <p>The Global Church Divinity School is offering this global church training in four levels of membership: <span>Growth, Gold, Grand, and Global.</span> In addition, a limited number of Global Church Scholarships are available. A qualifying pastor/leader must apply for the scholarship and, if approved, will be notified by email.</p>

      <p>The <span>Global Objectives</span> are time-tested in every world region and bring focus to each training session. A pastor/leader will discover that each training course has been prepared with various cultures in mind, and that each segment is both stimulating and rewarding.</p>

      <p>The GCDS curriculum is comprised of seven ministry training tracks, each with seven levels of learning, for a total of forty-nine learning modules available to each student. The seven ministry tracks are Preaching, Teaching, Healing, Story, The Arts & Imagination, Christ Formation and Contextual Semiotics. The seven levels of learning within each track are Novice, Apprentice, Specialist, Docent, Maven, Master and Mentor. While the courses within each ministry track do not have to be taken in a specific order, all seven levels of learning are required to complete the track.</p>

      <div class="wrapper curriculum">
        <img src="{{ asset('images/curriculum-chart.jpg') }}" alt="Curriculum Chart">

        <div class="hover preaching">
          Both Gutenberg and Google, with expertise in all media forms of communication & story-telling including Instagram, YouTube, Tik Tok, Vimeo and Online Streaming.
        </div>
        <div class="hover teaching">
          Communicating the Jesus Story on the Lecture Circuit through professorships in authoring books and resources for the church.
        </div>
        <div class="hover healing">
          Church health is found in the Sozo Jesus who heals relationships with individuals, communities, and cities: mental, physical, emotional health.
        </div>
        <div class="hover story">
          Biblical studies is reframed as learning, not only as 66 books, but as One Masternarrative. Historical studies unfolding the never-ending story of the God’s Love for mankind.
        </div>
        <div class="hover arts">
          A Theology of play teaches the rapture of being alive in Christ through the three transcendentals of being: beauty, truth, goodness.
        </div>
        <div class="hover formation">
          Including MRI-based (M=Missional, R=Relational, I=Incarnational) Personal Prayer, Spirit-Empowerment & Faith Coaching.
        </div>
        <div class="hover semiotics">
          Entrepreneurial Ministries, Leadership Development, High CI [Contextual Intelligence] Cultivation, & Intergenerational Ministries yoked to a theology of trusteeship and creation care.
        </div>

        <br><br>
      </div>

      <div style="clear:both; height:30px;"></div>
    </div>
  </div>

  <div class="content blue_bg">
    <div class="wrapper">
      <img src="{{ asset('images/elmer.png') }}" alt="Elmer Towns" class="right" width="400">
      <p>Dr. Elmer Towns, Cofounder of Liberty University and CoChair/Dean of GCLC has made available the Elmer Towns Legacy Library for all Global Church Divinity School Members. The Elmer Towns Legacy Library consists of more than 1 terabyte of ministry resources valued at more than $15,000.</p>
      <p>Each course in the <span>Global Church Divinity School</span> is comprised of four overarching phases to enhance the student’s retention levels for greater ministry success in the years to come. The GCDS learning environment provides the finest, cutting-edge technological thinking processes available today. We are not asking where the Global Church was in the past but where will we be in 5, 10, 15 years from now.</p>
    </div>
  </div>

</div>
</body>
@endsection