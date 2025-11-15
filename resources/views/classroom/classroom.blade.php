@extends('layouts.app')

@section('title', 'Classroom | Global Church Divinity School')

@section('content')

<style>
    
    .curriculum {max-width: 938px; width: auto; position: relative;}
.curriculum img {max-width: 100%;}
.curriculum .hover {position: absolute; background: #aa3f46; width: 21.5%; right: 13.5%; padding: 0; color: #FFF; font-family: 'Open Sans', sans-serif; font-size: 11px; line-height: 14px; text-align: center; opacity: 0; cursor: pointer; letter-spacing: -0.4px;
	-webkit-transition: all .2s ease; 
	-moz-transition: all .2s ease;
	transition: all .2s ease;
} 
.curriculum .hover:hover {opacity: 1;}

.curriculum .hover.preaching {top: 25%}
.curriculum .hover.teaching {top: 36%; background: #c16f47;}
.curriculum .hover.healing {top: 47%; background: #ccae54;}
.curriculum .hover.story {top: 55.5%; background: #8a8b49;}
.curriculum .hover.arts {top: 67%; background: #2a4f6a;}
.curriculum .hover.formation {top: 77%; background: #0071a3;}
.curriculum .hover.semiotics {top: 86.6%; background: #834861;}

.preview_container {
  padding: 0 0 30px;
  text-align: center;
}

.preview_container .mod {
  width: 140px;
  display: inline-block;
  text-align: center;
  margin: 0 15px 20px 15px;
  vertical-align: top;
}

.preview_container .mod img {
  width: 150px;
  height: 150px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 10px;
}

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

.preview_container .mod .button.gray {
  background: #888;
}

/* --- Responsive --- */
@media (max-width: 768px) {
  .preview_container .mod {
    width: 120px;
    margin: 0 10px 15px 10px;
  }

  .preview_container .mod img {
    width: 120px;
    height: 120px;
  }

  .preview_container .mod .button {
    padding: 0 20px;
    font-size: 12px;
    line-height: 35px;
  }
  .button {
  display: inline-block;
  line-height: 40px;
  background: #1C4F6F;
  color: #FFF;
  padding: 0 30px;
  font-family: 'Open Sans', sans-serif;
  text-transform: uppercase;
  transition: all 0.1s linear;
  border-radius: 5px;
  text-decoration: none;
}

.button:hover {
  background: #163E56;
}
}

</style>

        <div class="main-classroom" style="background: #ebe8df url({{ asset('images/classroom.png') }}) no-repeat center top; background-size: cover;">
        <div class="top">
            <div class="wrapper">
            <h1>LEARN DIRECTLY FROM THE GREATEST TEACHERS <br />IN THEIR FIELDS OF STUDY AND MINISTRY</h1>
            </div>
        </div>
        </div>

        <div class="campus" style="background-color: white;">
        <div class="lower">
            <div class="wrapper">
            <p>The GCDS curriculum is comprised of seven ministry training tracks, each with seven levels of learning, for a total of forty-nine learning modules available to each student. The seven ministry tracks are Preaching, Teaching, Healing, Story, The Arts & Imagination, Christ Formation and Contextual Semiotics. The seven levels of learning within each track are Novice, Apprentice, Specialist, Docent, Maven, Master and Mentor. While the courses within each ministry track do not have to be taken in a specific order, all seven levels of learning are required to complete the track.</p>
            <br>
            <br>
            <h2 style="font-size:24px; font-family:'Open Sans', sans-serif; font-weight:500; color:#1c4f6f; text-align:center;">
                Check Out The Three FREE Course Samples Below
            </h2>
            </div>
        </div>
        <br>
        <br>

    <div class="preview_container">
        <a class="mod preview" href="#leondard">
        <img src="{{ asset('images/preview_3.jpg') }}" alt="Preview 1">
        <span class="button">Preview</span>
        </a>

        <a class="mod" href="#join">
        <img src="{{ asset('images/LynnCohick.png') }}" alt="Join 1">
        <span class="button gray">Join Now!</span>
        </a>

        <a class="mod preview" href="#ulmer">
        <img src="{{ asset('images/preview_5.jpg') }}" alt="Preview 2">
        <span class="button">Preview</span>
        </a>

        <a class="mod" href="#join">
        <img src="{{ asset('images/ByounghoZoh.png') }}" alt="Join 2">
        <span class="button gray">Join Now!</span>
        </a>

        <a class="mod preview" href="#hendricks">
        <img src="{{ asset('images/CraigKeener.jpg') }}" alt="Preview 3">
        <span class="button">Preview</span>
        </a>
    </div>
  </div>

    <div class="campus" style="background-color: white;">
    <div class="wrapper content">    
        <p>All the Global Church Divinity School courses are sequenced for progression In level of difficulty, from Novice to Mentor. Each course is designed with cutting edge methodology to move you through higher levels of knowledge and application for powerful results. GCDS does not compete with Bible Schools, Institutes or Seminaries. GCDS  does not offer ordination of men and women for ministry. The Global Church Classroom provides a state-of-the-art environment for individualized courses, community cohorts and face-to-face learning taught by key Christian leaders from around the globe. </p>
        <div class="clear"></div>
    </div>
    </div>


    <center>
    <div class="wrapper curriculum">
     <img src="{{ asset('images/curriculum-chart.jpg') }}" alt="Join 2">
        <div class="hover preaching">Both Gutenberg and Google, with expertise in all media forms of communication & story-telling including Instagram, YouTube, Tik Tok, Vimeo and Online Streaming.</div>
        <div class="hover teaching">Communicating the Jesus Story on the Lecture Circuit through professorships in authoring books and resources for the church.</div>
        <div class="hover healing">Church health is found in the Sozo Jesus who heals relationships with individuals, communities, and cities: mental, physical, emotional health. </div>
        <div class="hover story">Biblical studies is reframed as learning, not only as 66 books, but as One Masternarrative. Historical studies unfolding the never-ending story of the God’s Love for mankind.</div>
        <div class="hover arts">A Theology of play teaches the rapture of being alive in Christ through the three transcendentals of being: beauty, truth, goodness.</div>
        <div class="hover formation">Including MRI-based (M=Missional, R=Relational, I=Incarnational) Personal Prayer, Spirit-Empowerment & Faith Coaching.</div>
        <div class="hover semiotics">Entrepreneurial Ministries, Leadership Development, High CI [Contextual Intelligence] Cultivation, & Intergenerational Ministries yoked to a theology of trusteeship and creation care. </div>
    </div>
    </center>

    <br>
    </br>

    <div class="wrapper">
    @include('classroom.seven-levels')
   </div>

            <div style="display:none">
            <div id="leondard" class="lightbox">
                <iframe src="https://player.vimeo.com/video/653730370?color=ffffff&title=0&byline=0&portrait=0" width="585" height="329" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <h3>Thank you for previewing <em>Designer Jesus: Discipleship Formation As Christ Formation</em> by Leonard Sweet! </h3>
                <a href="#join">To View The Entire Course, Click Here To See Our Membership Opportunities!</a>
                <p>The Global Church Divinity School consists of the greatest teachers and authors in the Global Church today. When you choose to become a paid member, this permits the Global Church Network to scholarship five more pastors/leaders in specific nations. Tens of thousands have been scholarshipped due to the faithful paid memberships. This dynamic content in the GCDS has been designed to enhance Leadership Development, Global Missions, Church Multiplication, Evangelism/Discipleship and Visionary Networking.</p>
                </div>
            </div>

            <div style="display:none">
                <div id="ulmer" class="lightbox">
                <iframe src="https://player.vimeo.com/video/256885238?color=ffffff&title=0&byline=0&portrait=0" width="585" height="329" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <h3>Thank you for previewing Funding the Mission by Kenneth Ulmer! </h3>
                <a href="#join">To View The Entire Course, Click Here To See Our Membership Opportunities!</a>
                <p>The Global Church Divinity School consists of the greatest teachers and authors in the Global Church today. When you choose to become a paid member, this permits the Global Church Network to scholarship five more pastors/leaders in specific nations. Tens of thousands have been scholarshipped due to the faithful paid memberships. This dynamic content in the GCDS has been designed to enhance Leadership Development, Global Missions, Church Multiplication, Evangelism/Discipleship and Visionary Networking.</p>    </div>
            </div>

            <div style="display:none">
                <div id="hendricks" class="lightbox">
                <iframe src="https://player.vimeo.com/video/623449296?color=ffffff&title=0&byline=0&portrait=0" width="585" height="329" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <h3>Thank you for previewing <em>Bible Hermeneutics</em> by Craig Keener! </h3>
                <a href="#join">To View The Entire Course, Click Here To See Our Membership Opportunities!</a>
                <p>The Global Church Divinity School consists of the greatest teachers and authors in the Global Church today. When you choose to become a paid member, this permits the Global Church Network to scholarship five more pastors/leaders in specific nations. Tens of thousands have been scholarshipped due to the faithful paid memberships. This dynamic content in the GCDS has been designed to enhance Leadership Development, Global Missions, Church Multiplication, Evangelism/Discipleship and Visionary Networking.</p>    </div>
             </div>
                
                <div class="campus" style="background-color: white;">
                 <div class="wrapper content">    
                <p>The GCDS approaching the learning process from a pragmatic viewpoint. Rather than teaching everything that there is to know on a particular topic, each global teacher has presented the very essence of the topic’s most important concepts. He/she has provided wisdom, knowledge and application from life experiences and from personal study intended to provide dynamic outcomes for pastors everywhere.</p>        <div class="clear"></div>
                <h2 style="font-size:24px; font-family:'Open Sans', sans-serif; font-weight:500; color:#1c4f6f;">360-Degree Teaching </h2>
                <br>
                <p>Over a ten-year period, the Global Church Network® hosted strategic summits in every world region, with more than 10,000 leaders attending from hundreds of Christian denominations and organizations. From these key global leadership meetings, the seeds for the Global Church Divinity School were planted. Today, the Global Church Divinity School brings “the circumference of Christianity” to each student. This “360 Degree Teaching” is the most comprehensive training available in the Body of Christ today. </p>
                </div>
              

        <div class="campus" style="background-color: white; padding: 30px;">
        <div class="wrapper content" style="max-width: 910px; margin: 0 auto; font-family: 'Open Sans', sans-serif;">
    
    <h2 style="font-size: 24px; font-weight: 500; margin-bottom: 10px; color: #1c4f6f;">
      Learn from the Brightest Minds Today
    </h2>

    <p style="font-size: 19px; color: #333; line-height: 1.6; margin-bottom: 20px;font-family:'times new roman', serif;">
      Each of the GCDS teachers have contributed their best teaching in their specialized field of ministry. 
      There’s never been a Global Church Classroom where 54 of the 100 teachers have earned at least one PhD 
      from a highly recognized seminary or university. These teachers include:
    </p>
    <br></br>

    <ul id="teachers" style="
      list-style: none;
      padding: 0;
      margin: 0;
      columns: 4;
      -webkit-columns: 4;
      -moz-columns: 4;
      column-gap: 30px;
      font-size: 17px;
      font-family:'times new roman', serif;
      
    ">
      <li>Howard Hendricks</li>
      <br>
      <li>Kay Arthur</li>
      <br>
      <li>Philip Jenkins</li>
      <br>
      <li>Alex Tanuseputra</li>
      <br>
      <li>David Ramirez</li>
      <br>
      <li>Walter Kaiser</li>
      <br>
      <li>Elmer Towns</li>
      <br>
      <li>Mathew Barnett</li>
      <br>
      <li>Kathleen Patterson</li>
      <br>
      <li>Mark Balmer</li>
      <br>
      <li>Leonard Sweet</li>
      <br>
      <li>Fred Luter</li>
      <br>
      <li>Kenneth Ulmer</li>
      <br>
      <li>Gary Smalley</li>
      <br>
      <li>James Hudson Taylor IV</li>
      <br>
      <li>George O. Wood</li>
      <br>
      <li>Gustavo Crocker</li>
      <br>
      <li>Frank Damazio</li>
      <br>
      <li>Leon Fontaine</li>
      <br>
      <li>David Mohan</li>
      <br>
      <li>Mark Williams</li>
      <br>
      <li>Dave Stone</li>
      <br>
      <li>James O. Davis</li>
      <br>
      <li>David Dykes</li>
      <br>
      <li>John Ed Mathison</li>
      <br>
      <li>Stan Toler</li>
      <br>
      <li>Adrian Rogers</li>
      <br>
      <li>Ronnie Floyd</li>
      <br>
      <li>James Merritt</li>
      <br>
      <li>Suliasi Kurulo</li>
      <br>
      <li>Glenn Burris</li>
      <br>
      <li>Jack Hayford</li>
      <br>
      <li>Enoch Adeboye</li>
      <br>
      <li>Johnny Hunt</li>
      <br>
      <li>Doug Beacham</li>
    </ul>

  </div>
</div>

            
                
<div class="campus" style="background-color: #d6dede;">
        <div class="wrapper">
    <h1><center>The Global Church Library<sup>®</sup></center></h1>
    <p>
      The Global Church Library consists of the finest authors from throughout every world region. 
      Doctrinal balance is maintained through a diversified screening committee that reviews resources 
      on a consistent basis before new resources are posted in the Global Church Library. 
      Teachers and authors include:
    </p>

    <ul id="teachers" style="
  list-style: none;
  padding: 0;
  margin: 0;
  columns: 4;
  -webkit-columns: 4;
  -moz-columns: 4;
  column-gap: 30px;
  font-size: 17px;
  font-family: 'Times New Roman', serif;
">
  <li style="margin-bottom: 15px;">A. T. Robertson</li>
  <li style="margin-bottom: 15px;">Ademola Ishola</li>
  <li style="margin-bottom: 15px;">Adrian Rogers</li>
  <li style="margin-bottom: 15px;">Alexander MaClaren</li>
  <li style="margin-bottom: 15px;">Alex Mitala</li>
  <li style="margin-bottom: 15px;">Alton Garrison</li>
  <li style="margin-bottom: 15px;">Andrew Murray</li>
  <li style="margin-bottom: 15px;">Andy Stanley</li>
  <li style="margin-bottom: 15px;">Bill Winston</li>
  <li style="margin-bottom: 15px;">Billy Jo Daughtery</li>
  <li style="margin-bottom: 15px;">Brian Houston</li>
  <li style="margin-bottom: 15px;">Casey Treat</li>
  <li style="margin-bottom: 15px;">Charles Spurgeon</li>
  <li style="margin-bottom: 15px;">Dale Bronner</li>
  <li style="margin-bottom: 15px;">Daniel Akin</li>
  <li style="margin-bottom: 15px;">David Cooper</li>
  <li style="margin-bottom: 15px;">David Sobrepena</li>
  <li style="margin-bottom: 15px;">David Uth</li>
  <li style="margin-bottom: 15px;">David Mohan</li>
  <li style="margin-bottom: 15px;">Doug Stringer</li>
  <li style="margin-bottom: 15px;">Ed Young</li>
  <li style="margin-bottom: 15px;">Eddy Leo</li>
  <li style="margin-bottom: 15px;">Gary Smalley</li>
  <li style="margin-bottom: 15px;">Heidi Baker</li>
  <li style="margin-bottom: 15px;">James O. Davis</li>
  <li style="margin-bottom: 15px;">James Merritt</li>
  <li style="margin-bottom: 15px;">Jim Garlow</li>
  <li style="margin-bottom: 15px;">John Bevere</li>
  <li style="margin-bottom: 15px;">John Bunyan</li>
  <li style="margin-bottom: 15px;">Leon Fontaine</li>
  <li style="margin-bottom: 15px;">Kay Arthur</li>
  <li style="margin-bottom: 15px;">Paul Walker</li>
  <li style="margin-bottom: 15px;">Randy Pope</li>
  <li style="margin-bottom: 15px;">Reinhard Bonnke</li>
  <li style="margin-bottom: 15px;">William Bright</li>
</ul>
    <div class="clear"></div>
  </div>
</div>

<div class="content tan_bg sign_up" style="text-align:center;background:#e8e2d3;padding:40px 0;">
  <div class="wrapper">
    <p>Each Global Church Divinity School  <br />Membership Exceeds $40,000 In Value!</p>
   <div class="preview_container">
        <a class="mod preview" href="#leondard">
        <span class="button">SIGN UP</span>
        </a>
  </div>
<!-- </div> -->
  

@endsection
