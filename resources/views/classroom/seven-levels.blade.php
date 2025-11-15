<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Seven Levels of Learning</title>

<!-- ✅ jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
/* ==== MAIN CONTAINER ==== */
#seven-levels {
  margin: 0 auto 60px;
  position: relative;
  background: url('{{ asset('images/seven-levels-bg.png') }}') no-repeat center center;
  background-size: cover;
  max-width: 497px;
}

#seven-levels img.bg {
  width: 124%;
  display: block;

}

/* ==== HOVER ZONES ==== */
#seven-levels .hover {
  background: rgba(0,0,0,0);
  position: absolute;
  cursor: pointer;
}

/* Adjust these for where each hover area is on your diagram */
#seven-levels .hover-1 {top:0%; height:6%; left:0; width:55%;}
#seven-levels .hover-2 {top:31%; height:7%; left:0; width:43%;}
#seven-levels .hover-3 {top:72%; height:7%; left:0; width:38%;}
#seven-levels .hover-4 {bottom:0%; height:11%; left:0; width:60%;}
#seven-levels .hover-5 {top:79%; height:10%; left:0; width:60%;}
#seven-levels .hover-6 {top:61%; height:11%; left:0; width:60%;}
#seven-levels .hover-7 {top:50%; height:11%; left:0; width:60%;}
#seven-levels .hover-8 {top:39%; height:11%; left:0; width:60%;}
#seven-levels .hover-9 {top:20%; height:11%; left:0; width:60%;}
#seven-levels .hover-10 {top:8%; height:12%; left:0; width:60%;}

/* ==== BOXES ==== */
#seven-levels .box {
  position: absolute;
  width: 100%;
  left: 50%;
  padding: 20px 25px;
  border-radius: 8px;
  color: #fff;
  line-height: 1.5;
  display: none;
  font-family: 'Open Sans', sans-serif;
  box-shadow: 3px 3px 13px rgba(50,50,50,0.41);
}

#seven-levels .box h3 {
  font-size: 22px;
  text-transform: uppercase;
  font-weight: 700;
  text-align: center;
  margin: 0;
  padding-bottom: 5px;
}

#seven-levels .box h4 {
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 600;
  text-align: center;
  margin-bottom: 15px;
  border-bottom: 1px solid rgba(255,255,255,0.4);
  padding-bottom: 5px;
}


#seven-levels .climber {
  position: absolute;
  width: 50px;
  right: -60px; 
  top: 50%;
  transform: translateY(-50%);
  display: none;
}


#seven-levels .box-1,
#seven-levels .box-2,
#seven-levels .box-3 {
  padding: 30px;
  background: linear-gradient(45deg,#4c4c4c 0%,#131313 100%);
}
#seven-levels .box-4 { bottom:12%; background:linear-gradient(45deg,#8f576f 0%,#5c133c 100%); }
#seven-levels .box-5 { bottom:28%; background:linear-gradient(45deg,#197ca9 0%,#01517c 100%); }
#seven-levels .box-6 { bottom:15%; background:linear-gradient(45deg,#1c5068 0%,#012943 100%); }
#seven-levels .box-7 { bottom:25%; background:linear-gradient(45deg,#919156 0%,#606429 100%); }
#seven-levels .box-8 { top:41%; background:linear-gradient(45deg,#c9ad5d 0%,#947b23 100%); }
#seven-levels .box-9 { top:28%; background:linear-gradient(45deg,#8e411f 0%,#c37953 100%); }
#seven-levels .box-10 { top:11%; background:linear-gradient(45deg,#85172b 0%,#aa4a52 100%); }

/* ==== RIBBON IMAGES ==== */
#seven-levels .box img.ribbon {
  width: 60px;
  position: absolute;
  top: -45px;
  left: 50%;
  margin-left: -30px;
  border-radius: 100px;
  background: #222;
}

/* ==== POSITIONS FOR AWARD BOXES ==== */
#seven-levels .box-1 { top:80%; }
#seven-levels .box-2 { top:50%; }
#seven-levels .box-3 { top:20%; }

/* ==== RESPONSIVE ==== */
@media (max-width:600px) {
  #seven-levels .box {
    width: 80%;
    left: 10%;
    font-size: 14px;
  }
  #seven-levels .climber {
    width: 35px;
    right: -40px;
  }
}
</style>
</head>

<body>
<div id="seven-levels">
  <center>
    <img src="{{ asset('images/seven-levels-learning.png')}}" alt="Seven Levels" class="bg">
  </center>

  <!-- Hover zones -->
  @for($i = 1; $i <= 10; $i++)
    <div class="hover hover-{{ $i }}" data-box="{{ $i }}"></div>
  @endfor

  <!-- Info Boxes (each with climber inside) -->
  <div class="box box-3">
    <img src="{{ asset('images/seven-levels-ribbon-3.png')}}" class="ribbon">
    The Board of Governor's Award will be presented to those students who have demonstrated a knowledge of all seven levels of learning for all seven ministry tracks...
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>

  <div class="box box-2">
    <img src="{{ asset('images/seven-levels-ribbon-2.png')}}" class="ribbon">
    The Board of Governor's Award will be presented to those students who have demonstrated a knowledge of all seven levels of learning...
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>

  <div class="box box-1">
    <img src="{{ asset('images/seven-levels-ribbon-1.png')}}" class="ribbon">
    Once the student has completed all courses for Novice and Apprentice, he/she will receive The Dean's Award...
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>

  <div class="box box-4">
    <h3>Begins</h3><h4>Learning</h4>
    Definition: Minimal knowledge without connecting it to practice. <br><br>
    Direction: The student will learn the basics in all seven GCDS learning tracks.
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>

  <div class="box box-5">
    <h3>Builds</h3><h4>Learning</h4>
    Definition: Working knowledge of key aspects of practice. <br><br>
    Direction: The student begins to make connections...
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>

  <div class="box box-6">
    <h3>Broadens</h3><h4>Learning</h4>
    Definition: Good working and background knowledge... <br><br>
    Direction: The student manipulates multiple concepts...
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>

  <div class="box box-7">
    <h3>Brings</h3><h4>Learning to others</h4>
    Definition: Deep understanding... <br><br>
    Direction: The student is able to evaluate and create.
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>

  <div class="box box-8">
    <h3>Bridges</h3><h4>Learning toward others and the future</h4>
    Definition: Possesses authoritative knowledge... <br><br>
    Direction: The student is knowledgeable in all GCDS ministry tracks.
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>

  <div class="box box-9">
    <h3>Brightens</h3><h4>Learning within himself/herself...</h4>
    Definition: The student knows what needs to be achieved... <br><br>
    Direction: Progression is from a rigid adherence to rules to an intuitive mode of reasoning.
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>

  <div class="box box-10">
    <h3>Births</h3><h4>Leaders to help save the world</h4>
    Definition: The student seeks to add compounding value... <br><br>
    Direction: The leader shares knowledge and expertise globally.
    <img src="{{ asset('images/climber.png')}}" alt="Climber" class="climber">
  </div>
</div>

<br>
</br>


<script>
$(document).ready(function(){
  $('.hover').hover(
    function(){
      var box = $(this).data('box');
      var $box = $('.box-' + box);
      $box.stop(true,true).fadeIn();
      $box.find('.climber').stop(true,true).fadeIn();
    },
    function(){
      var box = $(this).data('box');
      var $box = $('.box-' + box);
      $box.stop(true,true).fadeOut();
      $box.find('.climber').stop(true,true).fadeOut();
    }
  );
});
</script>
</body>
</html>
