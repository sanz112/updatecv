<?php

include 'vendor/autoload.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/js/js.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@master/devicon.min.css">
    <link rel="stylesheet" href="./assets/font.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" /> -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <title>Tobi Samuel OJO Resume</title>
</head>
<body onload="refLoad()" onunload="refStopped()">

<style>
    .alert.info {
        animation: move 5s;
        animation-fill-mode: forwards;
    }
    @keyframes move {
        from {
            top: 0px;
        }
        to {
            top: 100px
        }
    }
    </style>
    <script>

var myVar;

function refLoad() {
    myVar = setTimeout(showPage, 100);
}

function showPage() {
  document.getElementById("loading").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
var i = 0;
var txt = 'Loading. Please wait...';
var speed = 200;
var myApp =  setInterval( myMove, speed);
function myMove() {
  if(i < txt.length  ) {
    document.getElementById("swiftDemo").innerHTML += txt.charAt(i);
    i++;
 
  }
}
function refStopped(){
clearInterval(myApp);
}
 </script>      
      <style>
      #myDiv {
        display:none;
      }    
 
       /* #loader {
            box-shadow: 10px 20px 20px 10px rgb(255, 255, 255);
        } */
        #load {
            height: 20px;
            width: 200px;
            border-radius: 50%;
            filter: blur(20px);
            -webkit-filter: blur(20px);
            background-color: #fff;
            opacity: 0.7;
            margin-top: 100px;
          }


.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}


.alert.info {background-color: #2196F3;}


.closebtn {
  margin-left: 15px;
  color: white ;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black !important;
}
</style>




<script>
var close = document.getElementsByClassName("closebtn");
var i;
  close.onclick = function(){
    var div = document.getElementById("alert");
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }

</script>

<div id="loading" style="width: 100%; height: 100%; position: fixed; top: 0; background: #0f0f0e; margin: 0 auto;">
 <div id="loader">  
 <div id="alert" style="z-index: 100; position: fixed; top: 0; margin-top: -100px;  width: 100%; left: 0; right:0;" class="alert info">
  <span class="closebtn">&times;</span>  
  <strong>Info!</strong> <span> This page will load for few secs. So enjoy the View </span>
</div>
<div style="z-index: 20; Position: absolute; font-weight: 300; color: #fff; font-size: 18px; bottom: 0; left: 0; right: 0; text-align: center;"><p>Credit: Loader [icon-only] by @j on <a style="text-decoration: none; cursor: pointer;" href="https://www.twitter.com/"><b style="color: #00acee;">Twitter</b></a></p></div>    

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


<style>
* {
  box-sizing: border-box;
}
body {
  color: #333;
  margin: 0;
  margin-top: 0;
  overflow-x: hidden;
  padding-top: 0;
  /* overflow: hidden; */
 font-family: Roboto, Arial, Helvetica, sans-serif;
}
:root {
  --carouselDur: 4;
  --horseDur: 2;
  --baseInnerEven: #ff8565;
  --baseInnerOdd: #dcdad4;
  --baseEven: #ff7653;
  --baseOdd: #e7e5e2;
  --core: #abb7b7;
  --coreWindow: #fff;
  --coreWindowSill: #7b8e8e;
  --baseLight: #fff;
  --baseSkirt: #ff9478;
  --hatOdd: #ff9478;
  --hatEven: #f2f1ef;
}
.carousel {
  height: 100px;
  width: 100px;
  -webkit-transform: translate(-50%, -50%) rotateX(-15deg) rotateY(40deg);
          transform: translate(-50%, -50%) rotateX(-15deg) rotateY(40deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  position: absolute;
  top: 50%;
  left: 50%;
}
.carousel__core {
  bottom: -10%;
  height: 150%;
  left: 50%;
  position: absolute;
  -webkit-transform: translate(-50%, 0);
          transform: translate(-50%, 0);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  width: 20%;
}
.carousel__core div {
  background: var(--core);
  height: 100%;
  left: 50%;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) rotateY(calc(((-360 / var(--sides)) * var(--side)) * 1deg)) translate3d(0, 0, 30px) rotateY(180deg);
          transform: translate(-50%, -50%) rotateY(calc(((-360 / var(--sides)) * var(--side)) * 1deg)) translate3d(0, 0, 30px) rotateY(180deg);
  width: 100%;
}
.carousel__core div:nth-of-type(even):after {
  background: var(--coreWindow);
  border: 2px solid var(--coreWindowSill);
  border-radius: 35% 35% 0 0;
  content: '';
  height: 15%;
  left: 50%;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, 0%);
          transform: translate(-50%, 0%);
  width: 50%;
}
.carousel__horses {
  -webkit-animation: carousel calc(var(--carouselDur) * 1s) infinite linear;
          animation: carousel calc(var(--carouselDur) * 1s) infinite linear;
  height: 50px;
  left: 50%;
  position: absolute;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  width: 50px;
  z-index: 5;
}
.carousel__horse {
  -webkit-animation: horse calc(var(--horseDur) * 1s) calc((var(--horseDur) * var(--delay)) * 1s) infinite linear;
          animation: horse calc(var(--horseDur) * 1s) calc((var(--horseDur) * var(--delay)) * 1s) infinite linear;
  font-size: 2rem;
  left: 50%;
  position: absolute;
  top: 50%;
}
.carousel__base {
  -webkit-animation: carousel calc(var(--carouselDur) * 1s) infinite linear;
          animation: carousel calc(var(--carouselDur) * 1s) infinite linear;
  left: 50%;
  position: absolute;
  top: 100%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}
.carousel__base div {
  background: var(--baseOdd);
  height: 20px;
  left: 50%;
  position: absolute;
  top: 0;
  -webkit-transform: translate(-50%, 0) rotateY(calc(((-360 / var(--sides)) * var(--side)) * 1deg)) translate3d(0, 0, 50px);
          transform: translate(-50%, 0) rotateY(calc(((-360 / var(--sides)) * var(--side)) * 1deg)) translate3d(0, 0, 50px);
  -webkit-transform-origin: top center;
          transform-origin: top center;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  width: 20px;
}
.carousel__base div:before {
  -webkit-clip-path: inset(40% 0 0 0);
  content: '';
  position: absolute;
  border-bottom: 120px solid var(--baseInnerOdd);
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  clip-path: inset(40% 0 0 0);
  left: 50%;
  -webkit-transform: translate(-50%, 0) rotateX(90deg) translate(0, -50px);
          transform: translate(-50%, 0) rotateX(90deg) translate(0, -50px);
  -webkit-transform-origin: top center;
          transform-origin: top center;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}
.carousel__base div:nth-of-type(even) {
  background: var(--baseEven);
}
.carousel__base div:nth-of-type(even):before {
  border-bottom: 120px solid var(--baseInnerEven);
}
.carousel__base div:after {
  content: '';
  background: radial-gradient(circle at 50% 50%, var(--baseLight) 20%, var(--baseSkirt) 20%), var(--baseSkirt);
  height: 20px;
  left: 50%;
  position: absolute;
  top: 0;
  -webkit-transform: translate3d(-50%, 0, 70px);
          transform: translate3d(-50%, 0, 70px);
  -webkit-transform-origin: top center;
          transform-origin: top center;
  width: 40px;
}
.carousel__hat {
  -webkit-animation: carousel calc(var(--carouselDur) * 1s) infinite linear;
          animation: carousel calc(var(--carouselDur) * 1s) infinite linear;
  bottom: 100%;
  height: 50px;
  left: 50%;
  position: absolute;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  width: 50px;
}
.carousel__hat div {
  border-bottom: 140px solid var(--hatOdd);
  border-top: 0;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  left: 50%;
  position: absolute;
  top: 0;
  -webkit-transform: translate(-50%, 0) rotateY(calc(((-360 / var(--sides)) * var(--side)) * 1deg)) rotateX(65deg);
          transform: translate(-50%, 0) rotateY(calc(((-360 / var(--sides)) * var(--side)) * 1deg)) rotateX(65deg);
  -webkit-transform-origin: top center;
          transform-origin: top center;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}
.carousel__hat div:nth-of-type(even) {
  border-bottom: 140px solid var(--hatEven);
}
.carousel__hat div:nth-of-type(even):after {
  background: var(--hatEven);
}
.carousel__hat div:after {
  background: var(--hatOdd);
  border-radius: 0 0 40px 40px;
  content: '';
  height: 20px;
  position: absolute;
  top: 140px;
  -webkit-transform: translate(-50%, 0) rotateX(-65deg);
          transform: translate(-50%, 0) rotateX(-65deg);
  -webkit-transform-origin: top center;
          transform-origin: top center;
  width: 40px;
}
@-webkit-keyframes carousel {
  from {
    -webkit-transform: translate(-50%, -50%) rotateY(0deg);
            transform: translate(-50%, -50%) rotateY(0deg);
  }
  to {
    -webkit-transform: translate(-50%, -50%) rotateY(360deg);
            transform: translate(-50%, -50%) rotateY(360deg);
  }
}
@keyframes carousel {
  from {
    -webkit-transform: translate(-50%, -50%) rotateY(0deg);
            transform: translate(-50%, -50%) rotateY(0deg);
  }
  to {
    -webkit-transform: translate(-50%, -50%) rotateY(360deg);
            transform: translate(-50%, -50%) rotateY(360deg);
  }
}
@-webkit-keyframes horse {
  0%, 100% {
    -webkit-transform: translate(-50%, -50%) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg);
            transform: translate(-50%, -50%) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg);
  }
  50% {
    -webkit-transform: translate(-50%, 0) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg);
            transform: translate(-50%, 0) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg);
  }
}
@keyframes horse {
  0%, 100% {
    -webkit-transform: translate(-50%, -50%) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg);
            transform: translate(-50%, -50%) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg);
  }
  50% {
    -webkit-transform: translate(-50%, 0) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg);
            transform: translate(-50%, 0) rotateY(calc(((-360 / var(--horses)) * var(--horse)) * 1deg)) translate3d(0, 0, calc(var(--depth) * 1px)) rotateY(180deg);
  }
}


      
       #head {
            text-align: center;
                width: auto;
            height:auto;
        }
        #heading {
            text-align: center;
          
        }
    #heading::after {
        content: ' \21D3';
        font-size: 70px;
        color: #fff;
        display: block;
        cursor: pointer;
        
        animation: bounce 0.5s linear alternate-reverse infinite;
        /* animation: mymov 5s ease-in-out 1s infinite; */
    }
    /* @keyframes mymov {
  50% {transform-origin: 100% 100% 1000px;}
} */
    #header {
        background: #000;
        color: #fff;
        top:0;
        position: relative;
        margin-top: -20px;
        height: 160px;
       }
       #headernew {
        width: 100%;
        height: 200px;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        color: #fff;
        content: " \21ED";
        margin-top: -220px;
        z-index: -2;
        opacity: 0.3;
        background: plum;
        transform-origin: 165% 104%;
        transform: skewY(-45deg);
        animation: mymove 5s ease-in-out 2s infinite;
       }
    #header::after {
        width: 100%;
        height: 400%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
         bottom: 0;
        content: " \21ED";
        margin-top: -220px;
        z-index: -1;
        background: inherit;
        transform-origin:  60% 143%;
        transform: skewY(-18deg);

    }

    @keyframes bounce{
  from {transform: translateY(0px);}
  to {transform: translateY(20px);}
}

.container {
  height: 100%;
  overflow-y: scroll;
  overflow-x: hidden;
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
  overflow-y: scroll;
  margin-right: -50px; /* Maximum width of scrollbar */
  padding-right: 50px; /* Maximum width of scrollbar */

}

.container::-webkit-scrollbar { /* WebKit */
    width: 0;
    height: 0;
   
}
    @keyframes mymove {
  50% {transform-origin: 10% 10%;}
}
/* html {
  scroll-behavior: smooth;
} */
    
    .text-left > h4:hover, .text-left >hr:hover {
    color: #f1a947;
    }
    .text-left > #lines:hover {
        width: 200px;
        color: #f1a947;
    }
    
    .text-left > #links, .text-left > #links a, .text-left > #social-media a {
        color: #fff;
        list-style: none;
        text-decoration: none;
    }
    .text-left > #links a:hover, .text-left > #social-media a:hover {
        color: #f1a947;
    }
    .progress-container {
  width: 100%;
  height: 8px;
  position: fixed;
  float: left;
  background: #ccc;
}

.progress-bar {
  height: 5px;
  background: gold;
  width: 0%;
}
        </style>
 <script>       

const TypeWriter = function(txtElement, words, wait = 3000) {
  this.txtElement = txtElement;
  this.words = words;
  this.txt = '';
  this.wordIndex = 0;
  this.wait = parseInt(wait, 10);
  this.type();
  this.isDeleleting = false;
}

TypeWriter.prototype.type = function() {
  const current = this.wordIndex % this.words.length;
//get the current text
  const fullTxt = this.words[current];
//console.log(fullTxt);


  if(this.isDeleleting) {
  //Remove char
  this.txt = fullTxt.substring(0, this.txt.length - 1);
}else {
//Add char
this.txt = fullTxt.substring(0, this.txt.length + 1);
}

this.txtElement.innerHTML = ` <span style="border-right: 0.2rem solid yellow;" class="txt"> ${this.txt}</span>`;
let typeSpeed = 300;
if(this.isDeleleting) {
  typeSpeed /= 2;

}

if(!this.isDeleleting && this.txt === fullTxt) {
      typeSpeed = this.wait;

      this.isDeleleting = true;
} else if(this.isDeleleting && this.txt === '') {
      this.isDeleleting = false;
      //move to next word
      this.wordIndex++;
      //pause before typing
      typeSpeed = 250;
}
  setTimeout(() => this.type(), typeSpeed);
}


//init
document.addEventListener('DOMContentLoaded', init);
function init() {
  const txtElement = document.querySelector('.txt-type');
  const words = JSON.parse(txtElement.getAttribute('data-word'));
  const wait = txtElement.getAttribute('data-wait');

  new TypeWriter(txtElement, words, wait);
}
</script>
<style>
#introsmall .ml10 {
  position: relative;
  font-weight: 900;
  font-size: 3em;
}

#introsmall .ml10 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-left: 1em;

}

#introsmall .ml10 .letter {
  display: inline-block;
  
  transform-origin: 0 0;
}

</style>



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
  <style>
    @media screen and (max-width: 800px) {
      #introsmall  {
      text-align: right;
      margin-top: 0;
      padding-right: 10px;
  
    }
    #introsmall span.letters {
      font-size: 40px;
    }
    #introsmall h2.flow-text {
      font-size: 16px;
    }
    #introsmall span#founded {
      font-size: 18px;
      margin: 0;
    }
    }
    @media screen and (min-width: 801px) {
      #introsmall {
      font-size: 20px;
      text-align: left;
    }
    }
    </style>
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
    
    <section style="float: right;">
    <img   src="img/mycvpic.png" />
  </section>
<section style="padding: 0 3em; margin-top: 45%;">
  <h2 style="font-size: 3em;" id="section3" style> About Me! </h2>

<p style="line-height: 30px; word-spacing: 18px">My Name is OJO, Oluwatobi Samuel. I am a second class graduate of Obafemi Awolowo University where I majored in Management and Acoounting. I am also a Professional(Chartered) Manager[NIM] who is keen about and has passion for Technology. I have over 3years experience in Web and Mobile Technologies </p>
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
          <img src="img/mayor.jpg" />
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
    <div class="animation-element slide-left testimonial">
      <div class="header">
        <div class="left">
          <img src="img/swiftlogo.png" />
        </div>
        <div class="right">
          <h3></h3>
          <h4>Owner & Founder of Swift Geek Links</h4>
        </div>
      </div>
      <div style="line-height: 30px;"  class="content"><i class="fa fa-quote-left"></i> Witt<span style="color: plum">Stack's</span> work is impressive <a style="cursor: pointer;" href="www.swiftgeek.com.ng">SwiftGeek</a> 
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
<style>
                  
                    /* The actual timeline (the vertical ruler) */
.timelinenew {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
  
}

                    /* The actual timeline (the vertical ruler) */
.timelinenew::after {
  content: '';
  position: absolute;
  width: 5px;
  background-color: rgb(49, 49, 49);
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.containernew {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.containernew::after {
  content: '';
  position: absolute;
  width: 35px;
  height: 35px;
  right: -17px;
  background-color: white;
  border: 3px solid gold;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.leftnew {
  left: 0;
}

/* Place the container to the right */
.rightnew {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.leftnew::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid rgb(49, 49, 49);
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent rgb(49, 49, 49);
}

/* Add arrows to the right container (pointing left) */
.rightnew::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid rgb(49, 49, 49);
  border-width: 10px 10px 10px 0;
  border-color: transparent rgb(49, 49, 49) transparent transparent;
}

/* Fix the circle for containers on the right side */
.rightnew::after {
  left: -16px;
}

/* The actual content */
.contentnew {
  padding: 20px 30px;
  background-color: rgb(49, 49, 49);
  color: #fff;
  z-index: 3;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timelinenew::after {
  left: 33px;
  }
  
  /* Full-width containers */
  .containernew {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .containernew::before {
  left: 60px;
  border: medium solid rgb(49, 49, 49);
  border-width: 10px 10px 10px 0;
  border-color: transparent rgb(49, 49, 49) transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .leftnew::after, .rightnew::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .rightnew {
  left: 0%;
  }
}
                </style>
<style>
  .resume {
    padding: 4em;
  }
  ul {
    list-style: none;
    text-decoration: none;
    display: inline;
  }
  ul .list-inline-item {
    list-style: none;
    text-decoration: none;
    display: inline-block;
    padding: 20px 0;
  }

  ul li i {
    font-size: 50px;
    padding: 20px 30px;
    color: #333;
  }
 .fa-ul li i {
    display: inline;
  }
  </style>
  <img style="float: right; margin-top: 50px;" height="250px" width="250px" src="img/manworking.png" />
<section class="resume" id="skills">
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
      <div>
<img style=" margin-top: 200px;" src="img/vector.png" />
<img style="float: right; margin-top: 500px;" src="img/vector2.png" />
</div>
<section style=" margin-top: -300px;" id="services">
               <h2 class="py-3" style="text-align: center; font-size: 2em; font-weight: 800;"> What Will Do </h2>
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
                        <p>We are a group of passionate Developers and Designers who is keen to bring out amazement out of design. We Deign for Web and Mobile Apllication</p>
               
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
                <section style="padding: 0 2em;" class="py-3">
<div id="testimonial">
  <h2 style="font-size: 2em; text-align: center; font-weight: 800;"> Testimonials</h2>
 <div id="slideshow-container" class="slideshow-container">
<div id="testimonial_container">
<div id="testimonial_box"  class="py-2 fadenew" style="width: 600px;"> 
  <div id="testimonial_boxnew">
  <div style="text-align:center;" class="mt-2 mySlides fadenew">
    <div class="chip">
        <img src="img/mayor.jpg" alt="Person" width="96" height="96">
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
<style>
@media screen and (max-width: 768px) {
#testimonyy {
  height: 250px;
}
#rowmission {
  flex-direction: column;
  display: flex;
  justify-content: center;
}
}

#rowmission {
  flex-direction: row;
  margin-top: 50px;
  display: flex;
  justify-content: center;
  padding: 1em 2em;
}
</style>
<!-- <div  id="testimonial_container">
<img id="testimonyy" style="margin-top: -300px; z-index: -1;" width="70%" height="400px" src="img/vector7.png" />
</div> -->
<section>
  <div id="rowmission">
    <div style="border-radius: 10px; width: 45%; padding: 20px; background: #d1d1d1; box-shadow: 1px 2px 2px 2px rgba(0,0,0,.25);" id="mission">
    <span><img height="100px" width="80px" src="img/idea.png"/>
      <h2 style="color: #3f3f3f;"> Our Mission Statement </h2></span>
      <p style="padding: 20px; color: #202020; line-height: 30px;"> To ensure those who are keen about Tech. is impacted and updated with the knowledge of Technology, and also to ensure businesses get their products/services online to secure more sales by delivering quality designs on Digital, Website, and Mobile Applications</p> 
    </div>
    <div style="border-radius: 10px; margin-left: 10px; width: 45%; padding: 20px; background: gold; box-shadow: 1px 2px 2px 3px rgba(0,0,0,.25);" id="mission">
    <div><img height="100px" width="80px" src="img/idea.png"/>
      <h1 style="color: #3f3f3f;"> Our Vision Statement </h1></div>
      <p style="padding:0 20px; color: #202020;"> To be a Well-known Remote Company</p> 
    </div>
  </div>
</section>
<section>
  <style>
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.contain {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.rowcont:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

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
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
        <option value="nigeria"><b>Nigeria</b></option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" style="resize:none;" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
      <div stle="display: flex;" class="rowcount text-center">
      <div class="">
            <span class="fas fa-3x fa-map-marker-alt"></span>
              <span>Ibadan, Nigeria</span>
        </div>
        <div class="">
            <span class="fas fa-3x fa-phone"></span>
          <span>+234- 81 327 824 05</span>
              </div>
          <div class="col-4 mb-3">
            <span class="fas fa-3x fa-envelope"></span>
          <span>wittstack@gmal.com</span>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<hr style="margin: 20px 0; width: 100%;"/>

<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #f1a947;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:20px;
	left:20px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 1px 2px 2px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>

<a href="https://api.whatsapp.com/send?phone=2348132782405&text=Good%20Day%20." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<div style="font-weight: 700; padding: 20px 5em">
<p class="mt-2 mb-3 text-muted">
  <span id="datefooter"> Year</span>
          . Designed and Powered by <a style="cursor: pointer; text-decoration: none;" href="https://wa.me/message/LCCPGHQCMQKYK1"><span style="color: #000;">Witt</span><span style="color:plum;">Stack</span></a>
          . All Rights Reserved
        </p>
</div>
</div>
</main>
<script>
//Get the button
var d = new Date();
            var k =d.getFullYear();
            document.getElementById("datefooter").innerHTML = k;

var container = document.querySelector("#cont");
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
container.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (container.scrollTop > 20 || document.body.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  container.scrollTop = 0;
  conatainer.scrollTop = 0;
}
  var form = document.querySelector('form');
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    alert("Thanks for submitting this request we are not accepting mail from this input fields. This is just a dummy form");
  });
 //// alert("helllodlfdv");
  var slideIndex = 0;
  showSlides();
  
  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dotnew");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activenew", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " activenew";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
                    
 var container = document.getElementById("cont");
container.onscroll = function() {myFunction()};
function myFunction() {
  //alert("hiii");
  var winScroll = container.scrollTop || container.scrollTop;
  var height = container.scrollHeight - container.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

  var x = 0;
  //alert("hi");
  $(".container").scroll(function(){
    $("span#roll").text( x+= 1);
  });
var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll', check_if_in_view);
$window.trigger('scroll');
</script>

<style>
  .dotnew {
  height: 10px;
  width: 10px;
  margin: 0 4px;
  background-color: gold;
  border-radius: 50%;
  display: inline-flex;
  align-self: center;
  align-items: center;
  transition: background-color 1s ease;
}

#testimonial_box {
  background: #323232;
  padding: 10px 20px;
  border-radius: 20px;
  font-size: 20px;
  border: 2px solid gold;
}
.activenew {
  background-color: rgb(48, 235, 41);
  height: 20px;
  width: 20px;
  border: 2px solid gold;
}

/* Fading animation */
.fadenew {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}
.text_1 {
  color: #fff;
  font-size: 14px;
  font-style: italic;
  quotes: '\00AB' '\00BB' '\201E' '\201C';
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .textnew {font-size: 11px}
}

.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 18px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #f1f1f1;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}
  .mySlides {
  display: none;
}

  .slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
#testimonial_container {
  display: -webkit-flex; /* Safari */
  -webkit-justify-content: center; /* Safari 6.1+ */
  display: flex;
  justify-content: center;
  align-self: center;
  align-items: center;
}
#testimonial_box {
  display: -webkit-flex; /* Safari */
  -webkit-justify-content: center; /* Safari 6.1+ */
  display: flex;
  align-self: center;
  align-items: center;
  justify-content: center;
}
div#code1 {
    display: -webkit-flex; /* Safari */
    -webkit-justify-content: center; /* Safari 6.1+ */
    display: flex;
    justify-content: center;
    display: block;
}
.rating i.fa {
  color: gold !important;
}

.cf:before,
.cf:after {
  content: " ";
  display: table;
}

.cf:after {
  clear: both;
}
.centi {
  text-align: center;
}
.main-cont {
  background: #fff;
  max-width: 1000px;
  margin: 25px auto;
  z-index: -1;
  position: relative;
}

.cont {
  position: relative;
  padding: 25px;
}
/*animation element*/

.animation-element {
  opacity: 0;
  position: relative;
}
/*animation element sliding left*/

.animation-element.slide-left {
  opacity: 0;
  -moz-transition: all 500ms linear;
  -webkit-transition: all 500ms linear;
  -o-transition: all 500ms linear;
  transition: all 500ms linear;
  -moz-transform: translate3d(-100px, 0px, 0px);
  -webkit-transform: translate3d(-100px, 0px, 0px);
  -o-transform: translate(-100px, 0px);
  -ms-transform: translate(-100px, 0px);
  transform: translate3d(-100px, 0px, 0px);
}

.animation-element.slide-left.in-view {
  opacity: 1;
  -moz-transform: translate3d(0px, 0px, 0px);
  -webkit-transform: translate3d(0px, 0px, 0px);
  -o-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate3d(0px, 0px, 0px);
}
/*animation slide left styled for testimonials*/

.animation-element.slide-left.testimonial {
  float: left;
  width: 47%;
  margin: 0% 1.5% 3% 1.5%;
  background: #F5F5F5;
  padding: 15px;
box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.2);
  border: solid 1px #EAEAEA;
}
.animation-element.slide-left.testimonial:hover,
.animation-element.slide-left.testimonial:active{
  box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.25);
}

.animation-element.slide-left.testimonial:nth-of-type(odd) {
  width: 48.5%;
  margin: 0% 1.5% 3.0% 0%;
}

.animation-element.slide-left.testimonial:nth-of-type(even) {
  width: 48.5%;
  margin: 0% 0% 3.0% 1.5%;
}

.animation-element.slide-left.testimonial .header{
  float: left;
  width: 100%;
  margin-bottom: 10px;
}
.animation-element.slide-left.testimonial .left{
  float: left;
  margin-right: 15px;
}
.animation-element.slide-left.testimonial .right{
  float: left;
}

.animation-element.slide-left.testimonial img {
  width: 65px;
  height: 65px;
  border-radius: 50%;
  box-shadow: 0px 1px 3px rgba(51, 51, 51, 0.5);
}

.animation-element.slide-left.testimonial h3 {
  margin: 0px 0px 5px 0px;
}

.animation-element.slide-left.testimonial h4 {
  margin: 0px 0px 5px 0px;
}

.animation-element.slide-left.testimonial .content {
  float: left;
  width:100%;
  margin-bottom: 10px;
}

.animation-element.slide-left.testimonial .rating{}

.animation-element.slide-left.testimonial i {
  color: #aaa;
  margin-right: 5px;
}


/*media queries for small devices*/
@media screen and (max-width: 678px){
  /*testimonials*/
  .animation-element.slide-left.testimonial,
  .animation-element.slide-left.testimonial:nth-of-type(odd),
  .animation-element.slide-left.testimonial:nth-of-type(even){
    width: 100%;
    margin: 0px 0px 20px 0px;
  }
  .animation-element.slide-left.testimonial .right,
  .animation-element.slide-left.testimonial .left,
  .animation-element.slide-left.testimonial .content,
  .animation-element.slide-left.testimonial .rating{
    text-align: center;
    float: none;
  }
  .animation-element.slide-left.testimonial img{
    width: 85px;
    height: 85px;
    margin-bottom: 5px;
  }
  
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</body>
</html>