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
    <meta name="keywords" content="power, sundhed, coach, coaching, stresscoach, stress, ledelse, Greve, forandring, selvudvikling" />
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
          <!--________IKON________-->
          <div class="ikon_container">
            <div class="ikon_wrapper">
              <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/inspiration.svg" alt="inspiration">
            </div>
          </div>
          <!--________Call to action - talebobbel________-->
          <div class="talebobbel">
            <div class="talebobbel_wrapper">
              <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/talebobbel.svg" alt="talebobbel">
            </div>
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

			<label for="s1" id="slide1"><img src="<?php echo get_stylesheet_directory_uri()?>/billeder/post/coach2.webp" alt="coach"></label>
  			<label for="s2" id="slide2"><img src="<?php echo get_stylesheet_directory_uri()?>/billeder/post/fordi1.webp" alt="forandring"></label>
 			<label for="s3" id="slide3"><img src="<?php echo get_stylesheet_directory_uri()?>/billeder/post/coach3.webp" alt="tid"></label>
  			<label for="s4" id="slide4"><img src="<?php echo get_stylesheet_directory_uri()?>/billeder/post/skema1.webp" alt="coach"></label>
  			<label for="s5" id="slide5"><img src="<?php echo get_stylesheet_directory_uri()?>/billeder/post/coach1.webp" alt="quote"></label>
    <!-- ________________________Section2 - Q U O T E S___________________________ -->
		</section>
        </section>
        <h2 class="center_h2">Quotes</h2>
        <section id="inspiration_afsnit2">
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote1.webp" alt="quotes">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote2.webp" alt="quotes">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote3.webp" alt="quotes">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote4.webp" alt="quotes">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote5.webp" alt="quotes">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote6.webp" alt="quotes"> 
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote12.webp" alt="quotes">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote8.webp" alt="quotes">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote9.webp" alt="quotes">
        </div>
        <div>
         <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote10.webp" alt="quotes">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote11.webp" alt="quotes">
        </div>
        <div>
         <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/quotes/quote7.webp" alt="quotes">
        </div>

        </section>
      </section>
   <!-- ________________________Section3 - T I P S ___________________________ --> 
       <h2 class="center_h2">Tips</h2>
      <section id="inspiration_afsnit3">
    <!-- _____________SLIDER______________-->
    <!-- __________Section for WEB_______!!! -->
 <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/inspo_vand.webp" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">Prioriter at have en morgen praksis. Stå gerne lidt tidligere op, tidligere end resten af familien, så du starter dagen stille og roligt med egen tid 
    </div>
  </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/inspo_vand.webp" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">Det første du indtager er vigtigt. Bryg en dejlig kop the eller lav et glas frisk vand med citron. Det er godt for kroppen og kan virke udrensende
    </div>
  </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/inspo_vand.webp" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">Kickstart kroppen. Lav en let krop øvelse, yogaøvelser nakke og skuldre øvelser eller en morgenmeditation 
    </div>
  </div>
</div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/inspo_vand.webp" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">Planlæg din dag. Afsæt minimum 15 min. til at planlægge din dag. Planlægningen skal udover dine gøremål, arbejdsopgaver også gerne indeholde tid til dig selv 
    </div>
  </div>
</div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/inspo_vand.webp" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">Afslut dagen godt. Luk ned for online medier, TV og andet i god tid. Hav en aften rutine, yoga øvelse, hudpleje, stille musik og meditation
    </div>
  </div>
</div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/inspo_vand.webp" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">Selvomsorg og refleksion. Sørg for at der i din planlægning er afsat tid til dig: motion, frisk luft, meditation, det er også vigtigt at der afsættes refleksionstid
    </div>
</div>
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
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div> 
</section>

      </main>

      <!--F O O T E R _____ S T A R T-->
           <footer id="colophon" class="site-footer">
        <div class="site-info">

				<section id="footer_afsnit">
          <!--kontaktoplysninger-->
          <div class="footer_box">
            <div class="footer_kontakt">
          <h2>Oplysninger</h2>
          <h3>Adresse</h3>
          <p>2950 Greve, Danmark</p>
          <h3>Telefon</h3>
          <p>28270048</p>
          <h3>CVR</h3>
          <p>43081322</p>
          <h3>E-mail</h3>
          <p>kontakt@charlottewahl.dk</p>
            </div>

          </div>
          <!--footer logo-->
          <div class="footer_box">
            <div class="footer_logo">
            <div class="logo_container">
              <div class="footer_logo">
                <img src="<?php echo get_stylesheet_directory_uri()?>/logo/logo_sort_hvid.svg" alt="logo">
              </div>
            </div>
            </div>
          </div>
          <!--medie ikoner-->
          <div class="footer_box">
             <div class="footer_ikoner">
              <h2>Følg med på</h2>
                    <div class="ikon_container">
                      <div class="footer_ikon">
                     <a href="https://www.instagram.com/charlottewahl.dk/"><div><img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/instagram.svg" alt="instagram"></div></a>
                      </div>
                      <div class="footer_ikon">
                     <a href="https://dk.linkedin.com/in/charlotte-wahl-7a82086?trk=people-guest_people_search-card"><div><img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/linkedin.svg" alt="linkedin"></div></a>
                      </div>
                      <div class="footer_ikon">
                     <a href="https://www.facebook.com/charlotte.bock"><div><img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/facebook.svg" alt="facebook"></div></a>
                    </div>
                 </div>
          </div>
        </div>

        </section>
	</div>			

      </footer>

      <!--F O O T E R _____ S L U T-->
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
