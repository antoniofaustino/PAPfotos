@extends('menu.html')
@extends('menu.menu')
@section('content')
    <style>
    * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 300px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 100px) {
  .prev, .next,.text {font-size: 11px}
}



    </style>
</head>

                <br>
                <br>
    <p>A 2'M - Double Moments é uma equipa de dois jovens fotógrafos  apaixonados pelo seu trabalho e empenhados em satisfazer os seus clientes.</p>

     <p>Nasceram com o objectivo de captar os melhores momentos dos seus clientes,para que um dia os possa recordar,<br>
      tornando-os ainda mais únicos e especiais.
    Procura-se destacar pela elegância do seu trabalho e pela sua criatividade.</p>
    <p>Actualmente oferece aos seus clientes trabalhos de fotografia, vídeo e design.</p>
    <p>Possuem ainda um laboratório, que permite a produção de álbuns, impressão de imagens, entre outros serviços.</p>
    <p>"Não coleccione coisas, coleccione Momentos!"</p>
    
    <br>
    <br>
    <br>
    
    
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
                <img src="photos/img1.jpeg" style="width:100%">
                    <div class="text">Foto 1</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
                <img src="photos/img2.jpeg" style="width:100%">
                    <div class="text">Foto 2</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
                <img src="photos/img3.jpeg" style="width:100%">
                    <div class="text">Foto 3</div>
        </div>
       

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br>
<br>
<br>
    
  

@endsection