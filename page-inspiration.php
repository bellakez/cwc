<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
<html lang="da">
	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Selv-defineret meta beskrivelse-->
    <meta name="description" content="Coach" />
    <meta name="keywords" content="coach, stress, ledelse, HTML, CSS, JavaScript" />
    <meta name="author" content="Nina og Isabella" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--fonte-->
  	<!--rollerscript-->
    <link rel="stylesheet" href="https://use.typekit.net/czz8qbt.css">
    <!--beloved sans-->
    <link rel="stylesheet" href="https://use.typekit.net/czz8qbt.css">
    <!--beloved sans-->
    <link rel="stylesheet" href="https://use.typekit.net/czz8qbt.css">
    <!--Nunito light-->
    <link rel="stylesheet" href="https://use.typekit.net/czz8qbt.css">
    <!--Nunito regular-->
    <link rel="stylesheet" href="https://use.typekit.net/czz8qbt.css">
    <!--faveicon-->
    <!--link til stylesheet-->
	<link rel="stylesheet" href="style.css">
	<title>Kontakt</title>
<!--_____________________________________________________________________________________-->

    <body>
      <main>  
        <div class="entry-title">
          <h1> Inspiration</h1>
          </div>
          <div class="ikon">
            <img src="inspiration-ikon" alt="inspiration-ikon">
        </div>
        <section class="inspiration_wrapper">
       <!-- ________________________section 1 - INSTA SLIDE___________________________ -->
        <section id="inspiration_afsnit1">
        <h2>@charlottewahldk</h2>
        	<!-- _____________SLIDER______________-->
		<section id="slider">
			<input type="radio" name="slider" id="s1" checked>
 			<input type="radio" name="slider" id="s2">
  			<input type="radio" name="slider" id="s3">
 			<input type="radio" name="slider" id="s4">
  			<input type="radio" name="slider" id="s5">

			<label for="s1" id="slide1"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/globalt.jpg" alt=""></label>
  			<label for="s2" id="slide2"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/baere.jpg" alt=""></label>
 			<label for="s3" id="slide3"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/verden.jpg" alt=""></label>
  			<label for="s4" id="slide4"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/globalt1.jpg" alt=""></label>
  			<label for="s5" id="slide5"><img src="<?php echo get_stylesheet_directory_uri()?>/illustrationer/baere1.jpg" alt=""></label>
    <!-- ________________________Section2 - Q U O T E S___________________________ -->
		</section>
        </section>
        <h2 class="center_h2">Quotes</h2>
        <section id="inspiration_afsnit2">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        </section>
      </section>
   <!-- ________________________Section3 - T I P S ___________________________ --> 
       <h2 class="center_h2">Tips</h2>
      <section id="inspiration_afsnit3">
    <!-- _____________SLIDER______________-->
 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/img1.png" alt="facebook" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/img2.png" alt="facebook" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/img1.png" alt="facebook" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div> 
</section>
      </main>
      <script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
    </body>
</html>
<?php

get_footer();
