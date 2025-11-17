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
    <div class="home">

  <div id="hero" class="home">
    <div class="container">
      <h1>The Best Training From The <br> Global Church Network For <br>Christian Leaders Worldwide</h1>
      <h3>
        The Global Church Divinity School<sup>®</sup> houses 200 interactive training courses in the Global Church Classroom<sup>®</sup> and hundreds of more training resources in the Global Church Library<sup>®</sup>. All courses and resources are tailored to be visually attractive, doctrinally-vital and interactively engaging to help you to reach your maximum potential in your ministry.
      </h3>
    </div>
  </div>

<div class="content">
  <div class="wrapper">
    <h1>Gain Access to Vast Ministry Resources</h1>

    {{-- Image --}}
    <img class="fullwidth" src="{{ asset('images/home_pastors.jpg') }}" alt="">

    <h2>The Best Global Church Classroom<sup>®</sup> in the World</h2>

    <p>
      You will discover each training course has been prepared with various cultures in mind.
      These global objectives bring focus to each training session.
      This GCDS approach allows you to learn at the highest possible level.
      Rather than learning everything that there is on a particular topic, the teacher has provided the very essence of the most important concepts in each topic.
      Additionally, you can learn at your own rate, without feeling pressured to finish each course as fast as possible.
      It’s called “Just-in-Time training!”
    </p>

    {{-- Video Lightbox --}}
    <a class="lightbox" href="https://player.vimeo.com/video/452324293?autoplay=1">
      <img src="{{ asset('images/video_thumb.jpg?cache=1') }}" alt=""><br>
      An Overview Of The Global Church Divinity School & What It Means To You <br>
      <em>By Dr. James O. Davis</em>
    </a>

    <h2>Renowned Authors in the Global Church Library<sup>®</sup></h2>

    <p>
      The Global Church Library is designed to augment the phenomenal courses of the Global Church Classroom
      and to become the international resource bank of the finest Christian resources in the world.
      As a member of the Global Church Divinity School, you have complete access to the continuous growing number of world class resources (books, video, audio and articles)
      in the Global Church Library. Additional resources are posted each month!
    </p>

    {{-- Learn More Link --}}
    <a class="more right" href="{{ url('resources') }}">Learn More About Resources & FREE Samples</a>

    <div class="clear"></div>
  </div>
</div>

<div class="content campus-ad">
  <div class="wrapper">
    <img src="{{ asset('images/campus-ad.png') }}" alt="">
    <p>The Global Church Divinity School offers the local church or ministry organization the opportunity of open a small, medium or large extension campus. More information is provided the Membership page. Be sure to check out the Gold, Grand and Global options!</p>
    <a href="/join" class="button">Sign Up Today</a>
  </div>
</div>

<div class="content testimonials">
  <div class="wrapper">
    <h1>Testimonials</h1>

    <ul id="testimonial_slider">

      {{-- Panel 1 --}}
      <li class="panel">
        <div class="testimonial">
          <p>The Global Church Divinity School houses many of the finest training courses for Christian leaders. I highly recommend you become a member today!</p>
          <div class="author">
            <img src="{{ asset('images/home_testimonial1.jpg') }}" alt="">
            <div class="upper">Glen Burris, President</div>
            <div class="lower">Foursquare Church</div>
          </div>
        </div>

        <div class="testimonial">
          <p>The more we can learn from each other, the more we can lead together in the future. I don’t know of any place where one can be taught by key global Church leaders all the time besides the Global Church Divinity School. Simply the best!</p>
          <div class="author">
            <img src="{{ asset('images/home_testimonial2.jpg') }}" alt="">
            <div class="upper">Fred Luter, President Emeritus</div>
            <div class="lower">Southern Baptist Convention</div>
          </div>
        </div>

        <div class="testimonial">
          <p>There is no place on the Internet where a pastor or leader can find the highest quality of training like there is in the Global Church Divinity School. When you join, you will learn from the finest Christian leaders worldwide.</p>
          <div class="author">
            <img src="{{ asset('images/home_testimonial3.jpg') }}" alt="">
            <div class="upper">Jack Hayford, President Emeritus</div>
            <div class="lower">Kings University</div>
          </div>
        </div>

        <div class="testimonial">
          <p>The best resources help to reproduce the best leaders. The Global Church Divinity School will help to equip you to fulfill your divine calling, just like it has for thousands of Christian leaders in every nation.</p>
          <div class="author">
            <img src="{{ asset('images/home_testimonial4.jpg') }}" alt="">
            <div class="upper">Gustavo Crocker, General Superintendent</div>
            <div class="lower">Church of the Nazarene</div>
          </div>
        </div>
      </li>

      {{-- Panel 2 --}}
      <li class="panel">
        <div class="testimonial">
          <p>Wesleyan leaders worldwide are thrilled to partner with the Global Church Network and to receive incredible training through the Global Church Divinity School. Be sure to check it out!</p>
          <div class="author">
            <img src="{{ asset('images/lyon.jpg') }}" alt="">
            <div class="upper">Jo Anne Lyon, General Superintendent</div>
            <div class="lower">Wesleyans</div>
          </div>
        </div>

        <div class="testimonial">
          <p>The Global Church Divinity School comprises amazing training from throughout the Body of Christ. It was a joy to prepare and present a course on “Synergizing With The Next Generation.” I know you will be enriched through all the courses.</p>
          <div class="author">
            <img src="{{ asset('images/wood.jpg') }}" alt="">
            <div class="upper">George O. Wood, General Superintendent</div>
            <div class="lower">Assemblies of God</div>
          </div>
        </div>

        <div class="testimonial">
          <p>I have been involved in the Global Church Network from its beginning in 2001. I can say unequivocally the Global Church Divinity School contains many of the finest courses throughout the entire Global Church. You would be a wise leader to join GCDS and start learning concepts and applications that you have never learned before!</p>
          <div class="author">
            <img src="{{ asset('images/towns.jpg') }}" alt="">
            <div class="upper">Elmer L. Towns, Cofounder/Liberty University</div>
            <div class="lower">CoChair/Dean GCDS</div>
          </div>
        </div>

        <div class="testimonial">
          <p>Dr. James O. Davis, Cofounder of the Global Church Network, and I have served together in India and throughout the world since 1996. I count it a real joy and privilege to serve in this ever-growing and developing network throughout the Body of Christ. Thousands of leaders in India have joined the Global Church Divinity School. Become a member today!</p>
          <div class="author">
            <img src="{{ asset('images/mohan.jpg') }}" alt="">
            <div class="upper">David Mohan, Founder/New Life Assembly</div>
            <div class="lower">Chinai, India</div>
          </div>
        </div>
      </li>

      {{-- Panel 3 --}}
      <li class="panel">
        <div class="testimonial">
          <p>You will not find better courses and training than those in the Global Church Divinity School. When you choose to become a GCDS member, your faith will grow, your thinking will enlarge and your ministry quality will compound.</p>
          <div class="author">
            <img src="{{ asset('images/dykes.jpg') }}" alt="">
            <div class="upper">David Dykes, Senior Pastor</div>
            <div class="lower">Green Acres Baptist Church</div>
          </div>
        </div>

        <div class="testimonial">
          <p>The International Pentecostal Holiness Church and the Global Church Network have a powerful synergistic partnership worldwide. IPHC pastors are currently taking GCDS courses in every world region. Your personal life and ministry through the GCDS will compound exponentially in the years to come.</p>
          <div class="author">
            <img src="{{ asset('images/beacham.jpg') }}" alt="">
            <div class="upper">Doug Beacham</div>
            <div class="lower">Presiding Bishop</div>
          </div>
        </div>

        <div class="testimonial">
          <p>There is no network like the Global Church Network. This network works! I encourage you to become a Global Church Divinity School member and get ahead of the ministry curve for powerful effectiveness. Do it today!</p>
          <div class="author">
            <img src="{{ asset('images/sweet.jpg') }}" alt="">
            <div class="upper">Leonard Sweet</div>
            <div class="lower">Futurist & Renown Author</div>
          </div>
        </div>

        <div class="testimonial">
          <p>I have been fortunate to be a founding member of the Global Church Network. I can say without hesitation that the Global Church Divinity School training is simply the finest in the world today. You will love it!</p>
          <div class="author">
            <img src="{{ asset('images/ulmer.jpg') }}" alt="">
            <div class="upper">Kenneth C. Ulmer, Senior Pastor</div>
            <div class="lower">Faithful Central Bible Church</div>
          </div>
        </div>
      </li>
    </ul>

  </div>
</div>

{{-- <div class="bx-controls bx-has-controls-direction">
  <div class="bx-controls-direction">
    <a class="bx-prev" href="">Prev</a>
    <a class="bx-next" href="">Next</a>
  </div>
</div> --}}

{{-- Sign-up section --}}
<div class="content tan_bg sign_up">
  <div class="wrapper">
    <p>The Best Training From The Global Church Network<br>Is Available To You!</p>
    <a href="{{ url('join') }}" class="button">Sign Up</a>
  </div>
</div>
  </div>
  
</body>
</html>