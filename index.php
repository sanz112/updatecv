<?php
include 'vendor/autoload.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#0C359D ">
<link rel="apple-touch-icon" sizes="180x180" href="https://www.iconsms.com.ng/static/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.iconsms.com.ng/static/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://www.iconsms.com.ng/static/img/favicon-16x16.png">
    <script src="./assets/js/js.js"></script>
    <link rel="stylesheet" href="./assets/font.css">
    <link rel="stylesheet" href="assets/mainwitt.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@master/devicon.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"  /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>Tobi Samuel OJO Resume</title>
</head>
<body onload="refLoad()" onunload="refStopped()">
<div id="loading" style="width: 100%; height: 100%; position: fixed; top: 0; background: #0f0f0e; margin: 0 auto;">
 <div id="loader">  
 <div id="alert" style="z-index: 100; position: fixed; top: 0; margin-top: -100px;  width: 100%; left: 0; right:0;" class="alert info">
  <span class="closebtn">&times;</span>  
  <strong>Info!</strong> <span> This page will load for few secs. So enjoy the View </span>
</div>


<script>
var close = document.getElementsByClassName("closebtn");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
<div style="z-index: 20; Position: absolute; font-weight: 300; color: #fff; font-size: 18px; bottom: 0; left: 0; right: 0; text-align: center;"><p>Credit: Loader [icon-only] by Jhey on <a style="text-decoration: none; cursor: pointer;" href="https://www.twitter.com/jh3yy"><b style="color: #00acee;">Twitter</b></a></p></div>    

<div class="carousel">
  <div class="carousel__horses" style="--horses: 10">
    <div class="carousel__horse" style="--horse: 0; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 1; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 2; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 3; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 4; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 5; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 6; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 7; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 8; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 9; --delay: 0; --depth: 100">🎠</div>
    <div class="carousel__horse" style="--horse: 0; --delay: -0.5; --depth: 80">🎠</div>
    <div class="carousel__horse" style="--horse: 1; --delay: -0.5; --depth: 80">🎠</div>
    <div class="carousel__horse" style="--horse: 2; --delay: -0.5; --depth: 80">🎠</div>
    <div class="carousel__horse" style="--horse: 3; --delay: -0.5; --depth: 80">🎠</div>
    <div class="carousel__horse" style="--horse: 4; --delay: -0.5; --depth: 80">🎠</div>
    <div class="carousel__horse" style="--horse: 5; --delay: -0.5; --depth: 80">🎠</div>
    <div class="carousel__horse" style="--horse: 6; --delay: -0.5; --depth: 80">🎠</div>
    <div class="carousel__horse" style="--horse: 7; --delay: -0.5; --depth: 80">🎠</div>
    <div class="carousel__horse" style="--horse: 8; --delay: -0.5; --depth: 80">🎠</div>
    <div class="carousel__horse" style="--horse: 9; --delay: -0.5; --depth: 80">🎠</div>
  </div>
  <div class="carousel__base" style="--sides: 20">
    <div style="--side: 0"></div>
    <div style="--side: 1"></div>
    <div style="--side: 2"></div>
    <div style="--side: 3"></div>
    <div style="--side: 4"></div>
    <div style="--side: 5"></div>
    <div style="--side: 6"></div>
    <div style="--side: 7"></div>
    <div style="--side: 8"></div>
    <div style="--side: 9"></div>
    <div style="--side: 10"></div>
    <div style="--side: 11"></div>
    <div style="--side: 12"></div>
    <div style="--side: 13"></div>
    <div style="--side: 14"></div>
    <div style="--side: 15"></div>
    <div style="--side: 16"></div>
    <div style="--side: 17"></div>
    <div style="--side: 18"></div>
    <div style="--side: 19"></div>
  </div>
  <div class="carousel__core" style="--sides: 10">
    <div style="--side: 0"></div>
    <div style="--side: 1"></div>
    <div style="--side: 2"></div>
    <div style="--side: 3"></div>
    <div style="--side: 4"></div>
    <div style="--side: 5"></div>
    <div style="--side: 6"></div>
    <div style="--side: 7"></div>
    <div style="--side: 8"></div>
    <div style="--side: 9"></div>
  </div>
  <div class="carousel__hat" style="--sides: 20">
    <div style="--side: 0"></div>
    <div style="--side: 1"></div>
    <div style="--side: 2"></div>
    <div style="--side: 3"></div>
    <div style="--side: 4"></div>
    <div style="--side: 5"></div>
    <div style="--side: 6"></div>
    <div style="--side: 7"></div>
    <div style="--side: 8"></div>
    <div style="--side: 9"></div>
    <div style="--side: 10"></div>
    <div style="--side: 11"></div>
    <div style="--side: 12"></div>
    <div style="--side: 13"></div>
    <div style="--side: 14"></div>
    <div style="--side: 15"></div>
    <div style="--side: 16"></div>
    <div style="--side: 17"></div>
    <div style="--side: 18"></div>
    <div style="--side: 19"></div>
  </div>
  <div id="load"></div>

</div>
<div id="swiftNew">
    <p style="text-align: center; color: #fff; font-size: 24px; margin-top: 80px;" id="swiftDemo"></p>
    </div> 
    </div>
</div>



    <main id="myDiv">
       <div  id="cont" class="container">
    
       <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>  
  <section id="header">
  <div id="row" class="row"> 
    <div id="head">
        <a style="text-decoration: none; list-style: none; outline: none;" href="#section3"><p id="heading"></p></a>
        <h4> Scroll/Click Me </h4>
  </div>

  <div id="introsmall">
  <h1 class="ml10">
  <span class="text-wrapper">
    <span class="letters"> <span style="color: yellow;">OJO,</span> Tobi Samuel </span>
  </span>
</h1>
<div style="padding-left: 3em;">
<h3> <span id="founded">Founder of Witt<span style="color: plum;">Stack</span></span> </h3>
<h2  class="flow-text">I am a<span style="color: #fff;" class="txt-type" data-wait="2000"
data-word='[" Software Developer!", " UI/UX Designer(Digital Artist)!", " Photographers!"]'></span></h2>
</div>
</div>
</div>
    </section>
   
    <section>
    <img id="mycvpic" src="img/mycvpic.png" />
  </section><br>
<section style="padding: 0 3em; margin-top: 45%;">
  <h2 style="font-size: 3em;" id="section3" style> About Me! </h2>

<p style="line-height: 30px; word-spacing: 18px">My Name is OJO, Oluwatobi Samuel. I am a second class graduate of Obafemi Awolowo University where I majored in Management and Acoounting. I am also a Professional(Chartered) Manager[NIM] who is keen about and has passion for Technology. I have over 3 years experience in Web and Mobile Technologies </p>
</section>
<section style="margin-top: 100px;">
<div class="main-cont">
<div style="text-align: center !important;">
  <h1 style="font-size: 30px; text-align: center;"> What Our Clients Says About Us! </h1>
</div>
  <div class="cont cf">
    <!-- testimonial one -->
    <div class="animation-element slide-left testimonial">
      <div class="header">
        <div class="left">
          <img src="img/mayor.png" />
        </div>
        <div class="right">
          <h3>Ajide Oluwamayowa</h3>
          <h4>Founder of Wisdom Hub Initiative Network </h4>
        </div>
      </div>
      <div style="line-height: 30px;" class="content"><i class="fa fa-quote-left"></i> I remember when I contacted Wittstack for the design of a program I had: Things I wished to know before I enter school. The design of te flier was top notch. The design was done within few days in which normal designer will do for a week or plus. The combination of the colors and the design showed that the job was a high class job.
      This made to partner with Witt<span style="color: plum">Stack</span> for my consquent jobs. The video and motion pictures draw more people to register for my next program.
      Anytime I contact Witt<span style="color: plum">Stack</span> for any job, I kow I will have a quality job done. <i class="fa fa-quote-right"></i>
      </div>
      <div class="rating">
        <i style="color: gold;" class="fa fa-star"></i>
        <i style="color: gold;" class="fa fa-star"></i>
        <i style="color: gold;" class="fa fa-star"></i>
        <i style="color: gold;" class="fa fa-star"></i>
        <i class="fa fa-star-half"></i>
      </div>
    </div>
    <!--testimonial two -->
    <!-- <div class="animation-element slide-left testimonial">
      <div class="header">
        <div class="left">
          <img src="img/swiftlogo.png" />
        </div>
        <div class="right">
          <h4>Owner & Founder of Swift Geek Links</h4>
        </div>
      </div>
      <div style="line-height: 30px;"  class="content"><i class="fa fa-quote-left"></i> Witt<span style="color: plum">Stack's</span> work is impressive <a style="z-index: 100; cursor: pointer;" href="https://www.swiftgeek.com.ng">SwiftGeek</a> 
        <i class="fa fa-quote-right"></i>
      </div>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
    </div> -->
    <div class="animation-element slide-left testimonial">
      <div class="header">
        <div class="left">
          <img src="img/swiftlogo.png" />
        </div>
        <div class="right">
          <h4>Owner & Founder of Swift Geek Links</h4>
        </div>
      </div>
      <div style="line-height: 30px;"  class="content"><i class="fa fa-quote-left"></i> Witt<span style="color: plum">Stack's</span> work is impressive <a style="z-index: 100; cursor: pointer;" href="https://www.swiftgeek.com.ng">SwiftGeek</a> 
        <i class="fa fa-quote-right"></i>
      </div>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
    </div>
    <!--testimonial three -->
    <div class="animation-element slide-left testimonial">
      <div class="header">
        <div class="left">
          <img src="img/profile.png" />
        </div>
        <div class="right">
          <h3>Adesewa</h3>
          <h4>Writer</h4>
        </div>
      </div>
      <div style="line-height: 30px;"  class="content"><i class="fa fa-quote-left"></i>  Witt<span style="color: plum">Stack</span> did a great Job in making a simple and organized video design that encapsulates all the necessary information.
      The color combibation was lovely as well as the structure of editing.
        <i class="fa fa-quote-right"></i>
      </div>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
    </div>
    
    <!--testimonial four -->
    <div class="animation-element slide-left testimonial">
      <div class="header">
        <div class="left">
          <img src="img/kenny.jpg" />
        </div>
        <div class="right">
          <h3>Cole Kenny</h3>
          <h4>A Graduate</h4>
        </div>
      </div>
      <div style="line-height: 30px;"  class="content"><i class="fa fa-quote-left"></i>Good Day Sir. My Video won the best video award, thanks to you for helping me edit it.
        <i class="fa fa-quote-right"></i>
      </div>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
    </div>
    <div class="animation-element slide-left testimonial">
      <div class="header">
        <div class="left">
          <img src="img/lekan.png" />
        </div>
        <div class="right">
          <h3>Lekan</h3>
          <h4>Obafemi Awolowo University Final Year Engineering Student</h4>
        </div>
      </div>
      <div style="line-height: 30px;"  class="content"><i class="fa fa-quote-left"></i> Mr. Tobi is an Amazing developer always giving back to the community, and he is the Lead coordinator and Founder of Witt<span style="color: plum">Stack</span>
        <i class="fa fa-quote-right"></i>
      </div>
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
      </div>
    </div>
  </div>
  </div>
</section>
  <img style="float: right; margin-top: 0;" height="250px" width="250px" src="img/manworking.png" />
<section style="margin-top:30px;" class="resume" id="skills">
        <div>
          <h2 style="font-size: 3em; margin-bottom: 20px;">Skills</h2>
          <div style="font-size: 26px; font-weight: 400; margin-bottom: 20px;" class="subheading">Programming Languages &amp; Tools</div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
            <i class="devicon-django-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-github-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-gitlab-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-illustrator-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-javascript-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-laravel-plain"></i>
            </li>
           <li class="list-inline-item">
           <i class="devicon-mysql-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-php-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-python-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-vim-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-ssh-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-ionic-original"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-bootstrap-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-wordpress-plain"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-heroku-original"></i>
            </li>
            <li class="list-inline-item">
            <i class="devicon-html5-plain"></i>
            </li>
          </ul>

          <div  style="padding: 10px 0; font-size: 30px;"  class="subheading"><u><em><b>Workflow</b></em></u></div>
          <ul style="padding: 10px 10px;" class="fa-ul mb-0">
            <li style="margin: 20px 0;">
              <span class="fa-li fa fa-check"></span>
             Mobile-First, Responsive Design</li>
            <li style="margin: 20px 0;">
              <span class="fa-li fa fa-check"></span>
             Cross Browser Testing &amp; Debugging</li>
            <li style="margin: 20px 0;">
              <span  class="fa-li fa fa-check"></span>
              Cross Functional Teams</li>
            <li style="margin: 20px 0;">
              <span class="fa-li fa fa-check"></span>
               Agile Development &amp; Scrum</li>
              <li style="margin: 20px 0;">
              <span class="fa-li fa fa-check"></span>
              Server side project</li>
          </ul>
        </div>
      
      </section>
      <section style="margin: 0 0 30px 0; padding-bottom:30px;">
        <style>
      .flip-card {
  background-color: transparent;
  width: 200px;
  height: 200px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 1s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
</style>
<div style="padding: 5px;" id="container">
<div style="display: inline;  place-items: center;">
  <h2 style="text-align: center; font-size: 2em;"> Our Partners </h2>
  <div style="display: flex; justify-content: center;" class="row">
  <div style="padding: 10px;">
<div  class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/swiftlogo.png" alt="Avatar" style="padding:5px;width:200px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h1>SwiftGeek</h1> <br>
      <p>A VTU Web Application</p> 
    </div>
  </div>
</div>
</div>
<div style="padding: 10px;">
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img  src="img/iconsms180.png" alt="Avatar" style="padding:5px;width:200px;height:200px;">
    </div>
    <div  class="flip-card-back">
      <h1>ICONSMS</h1> <br>
      <p>A VTU Web Application</p> 
    </div>
  </div>
  </div>
</div>
</div>
</div>
</div>

      </section>
      <!-- <div>
<img style=" margin-top: 200px;" src="img/vector.png" />
<img style="float: right; margin-top: 500px;" src="img/vector2.png" />
</div> -->
<section style="margin-top: 20px; background-image: url('img/vector.png'); background-repeat: no-repeat; background-position: top right; background-origin: content-box;" id="services">
               <h2 class="py3" style="margin-top: 20px; text-align: center; font-size: 2em; font-weight: 800;"> What Will Do? </h2>
                <div class="timelinenew">
                    <div class="containernew leftnew">
                      <div class="contentnew">
                        <h2>Website Development</h2>
                        <p>We offer tutorials/training and consultation in building Website Application using various Modern Technologies. We also help in building Website.</p>
                  
                      </div>
                    </div>
                    <div class="containernew rightnew">
                      <div class="contentnew">
                        <h2>UI/UX Design</h2>
                        <p>We are a group of passionate Developers and Designers who are keen to bring out amazement out of design. We Design for Web and Mobile Apllication</p>
               
                      </div>
                    </div>
                    <div class="containernew leftnew">
                      <div class="contentnew">
                        <h2>Graphic Design</h2>
                        <p>There are Graphic Designers at our trail</p>      
                      </div>
                    </div>
                    <div class="containernew rightnew">
                      <div class="contentnew">
                        <h2>App Development</h2>
                        <p>We offer tutorials/training and consultation in Creating Mobile Application using various Modern Technologies. We also help in building Application.</p>
                      </div>
                    </div>
                  </div>
                </section>
                <img style="margin-top: -50px;" src="img/vector2.png" />

            
                <section style="padding: 0 2em;" class="py-3">
<div id="testimonial">
  <h2 style="font-size: 2em; text-align: center; font-weight: 800;"> Testimonials</h2>
 <div id="slideshow-container" class="slideshow-container">
<div id="testimonial_container">
<div id="testimonial_box"  class="py-2 fadenew" style="width: 600px;"> 
  <div id="testimonial_boxnew">
  <div style="text-align:center;" class="mt-2 mySlides fadenew">
    <div class="chip">
        <img src="img/mayor.png" alt="Person" width="96" height="96">
       Ajide Oluwamayowa
      </div>
     <p class="pt-3 text_1"><q>I remember when I contacted Wittstack for the design of a program I had: Things I wished to know before I enter school. The design of te flier was top notch. The design was done within few days in which normal designer will do for a week or plus. The combination of the colors and the design showed that the job was a high class job.
      This made to partner with Witt<span style="color: plum">Stack</span> for my consquent jobs. The video and motion pictures draw more people to register for my next program.
      Anytime I contact Witt<span style="color: plum">Stack</span> for any job, I kow I will have a quality job done. </q></p>
    </div>
    <div style="text-align:center;" class="mt-2 mySlides fadenew">
        <div class="chip">
            <img src="img/profile.png" alt="Person" width="96" height="96">
           Adesewa
               </div>
              <p class="pt-3 text_1"><q> Witt<span style="color: plum">Stack</span> did a great Job in making a simple and organized video design that encapsulates all the necessary information.
      The color combibation was lovely as well as the structure of editing. </q></p>
        </div>
        <div style="text-align:center;" class="mt-2 mySlides fadenew">
            <div class="chip">
                <img src="img/lekan.png" alt="Person" width="96" height="96">
            Lekan
      </div>
            <p class="pt-3 text_1"><q> Mr. Tobi is an Amazing developer always giving back to the community, and he is the Lead coordinator and Founder of Witt<span style="color: plum">Stack</span> </q></p>
            </div>
          </div>
        </div>
      </div>

  <div style="margin-top: 20px; text-align:center">
    <span class="dotnew"></span> 
    <span class="dotnew"></span> 
    <span class="dotnew"></span> 
  </div>
</div>
</div>
</section>

<!-- <div  id="testimonial_container">
<img id="testimonyy" style="margin-top: -300px; z-index: -1;" width="70%" height="400px" src="img/vector7.png" />
</div> -->
<style>
@media screen and (max-width: 768px) {
  #rowmission {
    width: 100% !important;
    display: block;
  }
  #mission {
    width: 100% !important;
    display: block;
  }
  #missionn {
    margin-top: 20px;
    margin-bottom: 10px;
    width: 100% !important;
    display: block;
    margin-left: 0 !important;
  }
}
</style>
<section>
  <div id="rowmission">
    <div style="border-radius: 10px; width: 50%; padding: 20px; background: #d1d1d1; box-shadow: 1px 2px 2px 2px rgba(0,0,0,.25);" id="mission">
    <span><img height="100px" width="80px" src="img/idea.png"/>
      <h2 style="color: #3f3f3f;"> Our Mission Statement </h2></span>
      <p style="padding: 20px; color: #202020; line-height: 30px;"> To ensure those who are keen about Tech. is impacted and updated with the knowledge of Technology, and also to ensure businesses get their products/services online to secure more sales by delivering quality designs on Digital, Website, and Mobile Applications</p> 
    </div>
    <div style="border-radius: 10px; width: 50%; margin-left: 10px;  padding: 20px; background: gold; box-shadow: 1px 2px 2px 3px rgba(0,0,0,.25);" id="missionn">
    <div><img height="100px" width="80px" src="img/idea.png"/>
      <h1 style="color: #3f3f3f;"> Our Vision Statement </h1></div>
      <p style="padding:0 20px; color: #202020;"> To be a World-Class IT/Digital Agency Company</p> 
    </div>
  </div>
</section>
<section>

<div class="contain">
  <h2 style="text-align: center; font-size: 2em; margin: 1em 0;">Contact Us!</h2>
  <div class="rowcont">
    <div class="column">
    <iframe src="https://maps.google.com/maps?q=Ibadan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0; height: 100%; width: 100%;" allowfullscreen></iframe>
    </div>
    <div class="column">
      <form action="#!">
        <label for="fname">First Name</label>
        <input style="border-radius: 10px;"  type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input style="border-radius: 10px;"  type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select style="border-radius: 10px;"  id="country" name="country">
        <option value="nigeria"><b>Nigeria</b></option>
          <option value="ghana">Ghana</option>
          <option value="australia">Kenya</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject"  name="subject" placeholder="Write something.." style="resize:none; border-radius: 10px; height:170px"></textarea>
        <input type="submit" id="formsubmit" value="Submit">
      </form>
      <div stle="display: flex;" class="rowcount text-center">
      <div style="margin: 20px 0;" class="">
            <span class="fa fa-map-marker-alt"></span>
              <span>Ibadan, Nigeria</span>
        </div>
        <div style="margin: 20px 0;" class="">
            <span class="fa fa-phone"></span>
          <span>+234- 81 327 824 05</span><br>
          Or
          <span>+234- 81 198 650 57</span>
              </div>
          <div style="margin: 20px 0;" class="">
            <span class="fa fa-envelope"></span>
          <span>wittstack@gmail.com</span>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<div style="padding-left: 30px; margin-top: 30px;">
<a  href="wittstack/tobisamCV.pdf"><button style="padding: 10px; border: none; outline: none; border-radius: 3px; background-color: green; color: #fff;"> Download my CV </button></a>
    </div>
<div style="font-weight: 700; margin-top: 20px;">
<p class="mt-2 mb-3 text-muted" style="padding-left: 30px;">
  <span id="datefooter">&copy; Year</span>
          . Designed and Powered by <a style="cursor: pointer; text-decoration: none;" href="https://wa.me/message/LCCPGHQCMQKYK1"><span style="color: #000;">Witt</span><span style="color:plum;">Stack</span></a>
          . All Rights Reserved
        </p>
</div>

<style>
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:20px;
	right:30px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 1px 2px 2px #999;
}

.my-float{
  margin-top:16px;
}
</style>
<a href="https://api.whatsapp.com/send?phone=2348119865057&text=Good%20Day." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
</div>
</main>

<script src="assets/js/main.js" type="text/javascript"></script>
<script src="assets/js/js.js" type="text/javascript"></script>
</body>
</html>