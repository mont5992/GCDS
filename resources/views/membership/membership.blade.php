
@extends('layouts.app')

@section('styles')
<link href="{{ asset('css/join.css') }}" rel="stylesheet">
@endsection


@section('title', 'Classroom | Global Church Divinity School')

@section('content')
<!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->

<div id="memberships">
  <div class="content">
    <div class="container-fluid">

      <h1>Select a Membership Level</h1>

      <p class="intro">
        The Global Church Divinity School<sup><small>®</small></sup> offers 7 world class credentials for the fields of study in Preaching, Teaching, Healing, Story, The Arts, Christ Formation, and Contextual Semiotics.
        <br><br>
        Each of these credentialing tracks has seven levels of learning, each level building about the previous one. When students have completed all 7 tracks, they are eligible to apply for the most prestigious credential, Omega.
        <br><br>
        The Growth track is personalized to the individual; but the Gold, Grand and Global offer small, medium and large GCDS extension campuses!

      </p>

      <div class="row">
        <div class="col-md-5ths">
          <div class="growth level">
            <h3>
              Growth
            <img src="{{ asset('images/membership-1.png') }}" alt="Join 2">
              Membership
            </h3>

            <ul>
              <li><i>Equip</i> One Leader</li>
              <li><strong style="color:white">Choose from one to seven credentials.</strong> (Each credential track includes the related courses.)</li>
              <li>Access to the Global Church Library.</li>
            </ul>
          </div>

          <!-- <div class="growth option" onclick="location.href='/join?plan=growth-1';">
          <i class="fa fa-check"></i>
          ONE CREDENTIAL
          <div class="price">$495</div>
          OVER 3 YEARS
        </div> -->

          <!-- <div class="growth option" onclick="location.href='/join?plan=growth-2';">
          <i class="fa fa-check"></i>
          FOUR CREDENTIALS
          <div class="price">$1980</div>
          OVER 3 YEARS
        </div> -->

          <div class="growth option" onclick="growthmembership();">
            <i class="fa fa-check"></i>
            <!-- SEVEN CREDENTIALS -->
            <div class="price">$2950</div>
            ($82/month) <br>
            OVER 3 YEARS <br>
            <small>(1 FREE CREDENTIAL)</small>
          </div>
        </div> <!--col-->



        <div class="col-md-5ths">
          <div class="notice">Open Your GCDS Campus Today!</div>
          <div class="gold level">
            <h3>
              GOLD
              <img src="{{ asset('images/membership-2.png') }}" alt="Join 2">
              Membership
            </h3>

            <ul>
              <li><i>Enlist</i> one church</li>
              <li><strong style="color:white">Choose name of you campus</strong> (i.e. First Baptist Campus, Faith Assembly Campus, etc.)</li>
              <li><strong style="color:white">Unlimited number of students permitted to attend.</strong></li>
              <li><strong style="color:white">10% off Global Church Network Resources</strong></li>
              <li>Access to the Global Church Library.</li>
            </ul>
          </div>

          <div class="gold option" onclick="gold_membership_under();">
            <i class="fa fa-check"></i>
            UNDER 500 <br>MORNING WORSHIP
            <div class="price">$3,600</div>
            ($100/month) <br>
            OVER 3 YEARS
          </div>

          <div class="gold option" onclick="gold_membership_above();">
            <i class="fa fa-check"></i>
            ABOVE 500 <br>MORNING WORSHIP
            <div class="price">$4,800</div>
            ($133/month) <br>
            OVER 3 YEARS
          </div>
        </div> <!--col-->

        <div class="col-md-5ths">
          <div class="notice">Open Your GCDS Campus Today!</div>
          <div class="grand level">
            <h3>
              GRAND
              <img src="{{ asset('images/membership-3.png') }}" alt="Join 2">
              MEMBERSHIP
            </h3>

            <ul>
              <li><i>Encourage</i> up to 10 regional churches to join your local church in one campus.</li>
              <li><strong style="color:white">Choose name of your campus</strong> (i.e. Zurich Campus, Los Angeles Campus, etc.)</li>
              <li><strong style="color:white">Unlimited number of students permitted to attend.</strong></li>
              <li><strong style="color:white">10% Discount of Training Summits</strong></li>
              <li><strong style="color:white">10% off Global Church Network Resources</strong></li>
              <li>Access to the Global Church Library.</li>
            </ul>
          </div>

          <div class="grand option" onclick="grand_membership_above();">
            <i class="fa fa-check"></i>
            <div class="price">$5,950</div>
            ($165/month over) <br>
            OVER 3 YEARS
          </div>
        </div> <!--col-->

        <div class="col-md-5ths">
          <div class="notice">Open Your GCDS Campus Today!</div>
          <div class="global level">
            <h3>
              GLOBAL
                <img src="{{ asset('images/membership-4.png') }}" alt="Join 2">
              MEMBERSHIP
            </h3>

            <ul>
              <li><i>Expand</i> the opportunity for the pastor to select up to 50 local churches anywhere in the world to become a part of his/her campus.</li>
              <li><strong style="color:white">Choose name of your campus</strong> (i.e. Grace Campus, Faith Campus, etc.)</li>
              <li><strong style="color:white">Unlimited number of students permitted to attend.</strong></li>
              <li><strong style="color:white">15% Discount off Training Summits</strong></li>
              <li><strong style="color:white">15% off Global Church Network Resources</strong></li>
              <li>Access to the Global Church Library.</li>
            </ul>
          </div>

          <div class="global option" onclick="global_membership_above();">
            <i class="fa fa-check"></i>

            <div class="price">$9,950</div>
            ($267/month) <br>
            OVER 3 YEARS
          </div>

        </div> <!--col-->






        <div class="col-md-5ths">
          <div class="notice">Open Your GCDS Campus Today!</div>
          <div class="general level">
            <h3>
              GENERAL MEMBERSHIP
             <img src="{{ asset('images/membership-5.jpg') }}" alt="Join 2">
              MEMBERSHIP
            </h3>


            <ul>
              <li><i>Enroll</i> opportunity for the President or Superintendent of Organization/Denomination to select as many leaders they choose anywhere in the world to become a part of their campus.</li>
              <li><strong style="color:white">Choose name of your campus</strong> (i.e. Grace Campus, Faith Campus, etc.)</li>
              <li><strong style="color:white">Unlimited number of students permitted to attend.</strong></li>
              <li><strong style="color:white">20% Discount off Training Summits</strong></li>
              <li><strong style="color:white">20% off Global Church Network Resources</strong></li>
              <li>Access to the Global Church Library.</li>
            </ul>
          </div>

          <div class="general option" onclick="general_membership_above();">
            <i class="fa fa-check"></i>

            100 LEADERS
            <div class="price">$14,920</div>
            ($415/month) <br>
            OVER 3 YEARS
            <br><br><br>
            EVERY ADDITIONAL <br>50 LEADERS
            <div class="price">$2,950</div>
            ($83/month) <br>
            OVER 3 YEARS
          </div>

        </div> <!--col-->




      </div> <!--row-->

    </div>
  </div>

   <div class="container">
    <div class="row">

      <div class="col">
        <div class="featured">
          <img src="images/aglogo.png" alt="Assemblies of God" class="aglogo">
           <div class="button red" onclick="assemblies_of_god_membership_above();">Assemblies of God</div>
        </div>
      </div>

      <div class="col">
        <div class="featured">
          <img src="images/agtslogo.png" alt="AGTS Programs" class="aglogo">
          <a href="join?plan=agts&agts=1" class="button red">AGTS Programs</a>
        </div>
      </div>

    </div>

    <div class="button-group">
      <a href="/globalchurch" class="button blue">Global Church Evangelists</a>
      <a href="/globalhub" class="button blue">Global Hubs of Christianity</a>
      <a href="/globallife" class="button blue">Global Life University</a>
    </div>
  </div>
</div>




<br>

<div class="content blue_bg">
  <div class="container">
    <h1 class="h2" style="color:#1c4f6f;margin-bottom:-15px">Apply for a GCDS Scholarship</h2>
    <br>
      <p style="color:black;margin-bottom:-5px;">FREE approved membership to all core courses, electives, and library resources.</p>
      <br>
      <a href="#demo" class="button center"style="background-color: #174d6e;color: white; margin-left: 0px;margin-bottom:-15px;">Apply for a GCN Scholarship</a>
      <br>
      <br>
      <p style ="color:black">Global Church Divinity School Scholarships are ONLY made available for leaders who primarily live in developing countries. Each month scholarships are approved and leaders are notified. These countries include:</p>
      <br>
      <ul id="countries" style="columns: 5;font-family:'Times New Roman', serif; list-style-type:none; padding-left: 0;color:black;">
        <li style="margin-bottom: 15px;">Afghanistan</li>
        <li style="margin-bottom: 15px;">Albania</li>
        <li style="margin-bottom: 15px;">Algeria</li>
        <li style="margin-bottom: 15px;">American Samoa</li>
        <li style="margin-bottom: 15px;">Angola</li>
        <li style="margin-bottom: 15px;">Antigua and Barbuda</li>
        <li style="margin-bottom: 15px;">Argentina</li>
        <li style="margin-bottom: 15px;">Armenia</li>
        <li style="margin-bottom: 15px;">Azerbaijan</li>
        <li style="margin-bottom: 15px;">Bangladesh</li>
        <li style="margin-bottom: 15px;">Belarus</li>
        <li style="margin-bottom: 15px;">Belize</li>
        <li style="margin-bottom: 15px;">Benin</li>
        <li style="margin-bottom: 15px;">Bhutan</li>
        <li style="margin-bottom: 15px;">Bolivia</li>
        <li style="margin-bottom: 15px;">Bosnia-Herzegovina</li>
        <li style="margin-bottom: 15px;">Botswana</li>
        <li style="margin-bottom: 15px;">Brazil</li>
        <li style="margin-bottom: 15px;">Bulgaria</li>
        <li style="margin-bottom: 15px;">Burkina Faso</li>
        <li style="margin-bottom: 15px;">Burundi</li>
        <li style="margin-bottom: 15px;">Cambodia</li>
        <li style="margin-bottom: 15px;">Cameroon</li>
        <li style="margin-bottom: 15px;">Cape Verde</li>
        <li style="margin-bottom: 15px;">Central African Republic</li>
        <li style="margin-bottom: 15px;">Chad</li>
        <li style="margin-bottom: 15px;">Chile</li>
        <li style="margin-bottom: 15px;">Colombia</li>
        <li style="margin-bottom: 15px;">Comoros</li>
        <li style="margin-bottom: 15px;">Congo, Dem. Rep.</li>
        <li style="margin-bottom: 15px;">Congo, Rep.</li>
        <li style="margin-bottom: 15px;">Costa Rica</li>
        <li style="margin-bottom: 15px;">Cote d'Ivoire</li>
        <li style="margin-bottom: 15px;">Croatia</li>
        <li style="margin-bottom: 15px;">Cuba</li>
        <li style="margin-bottom: 15px;">Djibouti</li>
        <li style="margin-bottom: 15px;">Dominica</li>
        <li style="margin-bottom: 15px;">Dominican Republic</li>
        <li style="margin-bottom: 15px;">Ecuador</li>
        <li style="margin-bottom: 15px;">Egypt</li>
        <li style="margin-bottom: 15px;">El Salvador</li>
        <li style="margin-bottom: 15px;">Eritrea</li>
        <li style="margin-bottom: 15px;">Ethiopia</li>
        <li style="margin-bottom: 15px;">Fiji</li>
        <li style="margin-bottom: 15px;">Gabon</li>
        <li style="margin-bottom: 15px;">Gambia</li>
        <li style="margin-bottom: 15px;">Georgia Republic</li>
        <li style="margin-bottom: 15px;">Ghana</li>
        <li style="margin-bottom: 15px;">Grenada</li>
        <li style="margin-bottom: 15px;">Guatemala</li>
        <li style="margin-bottom: 15px;">Guinea</li>
        <li style="margin-bottom: 15px;">Guinea-Bissau</li>
        <li style="margin-bottom: 15px;">Guyana</li>
        <li style="margin-bottom: 15px;">Haiti</li>
        <li style="margin-bottom: 15px;">Honduras</li>
        <li style="margin-bottom: 15px;">India</li>
        <li style="margin-bottom: 15px;">Indonesia</li>
        <li style="margin-bottom: 15px;">Iran</li>
        <li style="margin-bottom: 15px;">Jamaica</li>
        <li style="margin-bottom: 15px;">Iraq</li>
        <li style="margin-bottom: 15px;">Kazakhstan</li>
        <li style="margin-bottom: 15px;">Jordan</li>
        <li style="margin-bottom: 15px;">Kiribati</li>
        <li style="margin-bottom: 15px;">Kenya</li>
        <li style="margin-bottom: 15px;">Kyrgyzstan</li>
        <li style="margin-bottom: 15px;">Korea, Dem. Rep.</li>
        <li style="margin-bottom: 15px;">Latvia</li>
        <li style="margin-bottom: 15px;">Laos</li>
        <li style="margin-bottom: 15px;">Lesotho</li>
        <li style="margin-bottom: 15px;">Lebanon</li>
        <li style="margin-bottom: 15px;">Libya</li>
        <li style="margin-bottom: 15px;">Liberia</li>
        <li style="margin-bottom: 15px;">Macedonia</li>
        <li style="margin-bottom: 15px;">Lithuania</li>
        <li style="margin-bottom: 15px;">Malawi</li>
        <li style="margin-bottom: 15px;">Madagascar</li>
        <li style="margin-bottom: 15px;">Maldives</li>
        <li style="margin-bottom: 15px;">Malaysia</li>
        <li style="margin-bottom: 15px;">Marshall Islands</li>
        <li style="margin-bottom: 15px;">Mali</li>
        <li style="margin-bottom: 15px;">Mauritius</li>
        <li style="margin-bottom: 15px;">Mauritania</li>
        <li style="margin-bottom: 15px;">Micronesia</li>
        <li style="margin-bottom: 15px;">Mexico</li>
        <li style="margin-bottom: 15px;">Mongolia</li>
        <li style="margin-bottom: 15px;">Moldova</li>
        <li style="margin-bottom: 15px;">Morocco</li>
        <li style="margin-bottom: 15px;">Montenegro</li>
        <li style="margin-bottom: 15px;">Myanmar</li>
        <li style="margin-bottom: 15px;">Mozambique</li>
        <li style="margin-bottom: 15px;">Nepal</li>
        <li style="margin-bottom: 15px;">Namibia</li>
        <li style="margin-bottom: 15px;">Niger</li>
        <li style="margin-bottom: 15px;">Nicaragua</li>
        <li style="margin-bottom: 15px;">Pakistan</li>
        <li style="margin-bottom: 15px;">Nigeria</li>
        <li style="margin-bottom: 15px;">Panama</li>
        <li style="margin-bottom: 15px;">Palau</li>
        <li style="margin-bottom: 15px;">Paraguay</li>
        <li style="margin-bottom: 15px;">Papua New Guinea</li>
        <li style="margin-bottom: 15px;">Philippines</li>
        <li style="margin-bottom: 15px;">Peru</li>
        <li style="margin-bottom: 15px;">Romania</li>
        <li style="margin-bottom: 15px;">Poland</li>
        <li style="margin-bottom: 15px;">Rwanda</li>
        <li style="margin-bottom: 15px;">Russia</li>
        <li style="margin-bottom: 15px;">Saint Lucia</li>
        <li style="margin-bottom: 15px;">Saint Kitts and Nevis</li>
        <li style="margin-bottom: 15px;">Samoa</li>
        <li style="margin-bottom: 15px;">Saint Vincent</li>
        <li style="margin-bottom: 15px;">Senegal</li>
        <li style="margin-bottom: 15px;">Sao Tome and Principe</li>
        <li style="margin-bottom: 15px;">Seychelles</li>
        <li style="margin-bottom: 15px;">Serbia</li>
        <li style="margin-bottom: 15px;">Solomon Islands</li>
        <li style="margin-bottom: 15px;">Sierra Leone</li>
        <li style="margin-bottom: 15px;">South Africa</li>
        <li style="margin-bottom: 15px;">Somalia</li>
        <li style="margin-bottom: 15px;">Sudan</li>
        <li style="margin-bottom: 15px;">Sri-Lanka</li>
        <li style="margin-bottom: 15px;">Swaziland</li>
        <li style="margin-bottom: 15px;">Suriname</li>
        <li style="margin-bottom: 15px;">Tajikistan</li>
        <li style="margin-bottom: 15px;">Syria</li>
        <li style="margin-bottom: 15px;">Thailand</li>
        <li style="margin-bottom: 15px;">Tanzania</li>
        <li style="margin-bottom: 15px;">Togo</li>
        <li style="margin-bottom: 15px;">Timor</li>
        <li style="margin-bottom: 15px;">Trinidad and Tobago</li>
        <li style="margin-bottom: 15px;">Tonga</li>
        <li style="margin-bottom: 15px;">Turkey</li>
        <li style="margin-bottom: 15px;">Tunisia</li>
        <li style="margin-bottom: 15px;">Tuvalu</li>
        <li style="margin-bottom: 15px;">Turkmenistan</li>
        <li style="margin-bottom: 15px;">Ukraine</li>
        <li style="margin-bottom: 15px;">Uganda</li>
        <li style="margin-bottom: 15px;">Uzbekistan</li>
        <li style="margin-bottom: 15px;">Uruguay</li>
        <li style="margin-bottom: 15px;">Venezuela</li>
        <li style="margin-bottom: 15px;">Vanuatu</li>
        <li style="margin-bottom: 15px;">Yemen</li>
        <li style="margin-bottom: 15px;">Vietnam</li>
        <li style="margin-bottom: 15px;">Zimbabwe</li>
        <li>Zambia</li>
      </ul>

      <div class="clear"></div>
  </div>
</div>

<script>
  function growthmembership() {
  
  window.location.href = "{{ route('membership.growth') }}";
}
  function gold_membership_under() {
  
  window.location.href = "{{ route('membership.goldunder') }}";
}
  function gold_membership_above() {
  
  window.location.href = "{{ route('membership.goldabove') }}";
}
  function grand_membership_above() {
  
  window.location.href = "{{ route('membership.grand') }}";
}
  function global_membership_above() {
  
  window.location.href = "{{ route('membership.global') }}";
}
  function general_membership_above() {
  
  window.location.href = "{{ route('membership.general') }}";
}
  function assemblies_of_god_membership_above() {
  
  window.location.href = "{{ route('membership.assemblie') }}";
}
</script>
@endsection
