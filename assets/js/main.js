var d = new Date();
            var k =d.getFullYear();
            document.getElementById("datefooter").innerHTML = k;

var container = document.querySelector("#cont");
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
container.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (container.scrollTop > 20 || document.documentElement.scrollTop > 20) {
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
    document.querySelector("#formsubmit").setAttribute("value", "Processing..!");
    document.querySelector("#formsubmit").setAttribute("disabled", "disabled");
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

  var close = document.getElementsByClassName("closebtn");
var i;
  close.onclick = function(){
    var div = document.getElementById("alert");
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
