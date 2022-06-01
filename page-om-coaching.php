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

    <!--faveicon-->
    <!--link til stylesheet-->
	<link rel="stylesheet" href="style.css">
	<title>Charlotte Wahl</title>
<!--_____________________________________________________________________________________-->

    <body>
      <main>
        <section id="omcoaching_afsnit1">
          <div class="entry-title">
          <h1>Om coaching</h1>
          </div>
          <!--________IKON________-->
          <div class="ikon_container">
            <div class="ikon_wrapper">
              <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/coaching.svg" alt="coaching">
            </div>
          </div>
        </section>
        <article id="omcoaching_artikel1">
          <h2>Generelt om coaching</h2>
          <section id="omcoaching_afsnit2">
          <div class="omcoaching_textbox">
            <p>Coaching er et redskab som kan hjælpe dig på vej til den forandring, du ønsker i dit liv. Coaching fokuserer på din nutid med henblik på at skabe en forandring i din fremtid. En coach hjælper dig med at perspektivere og støtte dig i at sætte konkrete mål som en del af din selvudvikling og empowerment for at skabe det liv, du ønsker dig.</p>
          </div>
          <div class="omcoaching_billede">
            <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/bog.webp" alt="om coaching">
          </div>

        </section>
      </article>
        <div class="pil_container">
          <div class="pil">
            <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/pil_ned.svg" alt="pil">
          </div>
        </div>
        <article id="omcoaching_artikel2">
        <h2>Jeg tilbyder</h2>
        <section id="omcoaching_afsnit3">
          <div class="omcoaching_billede">
            <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/bog.webp" alt="om coaching">
          </div>
          <div class="omcoaching_textbox">
            <p>Mit mål er at støtte dig i din rejse mod dit bedste liv. Jeg lytter aktivt til dine ord og giver dig nye perspektiver på muligheder, fra dit ståsted. Jeg ønsker at inspirere og støtte dig i rejsen mod at finde din balance.</p>
            <br>
            <p>Jeg tilbyder støtte indenfor ledelse og stress forbyggelse. Det understøtter jeg ved hjælp af min praksis som leder og min personlig erfaring. Jeg har udarbejdet forskellige skræddersyet produkter  som egner sig til dig, din hverdag og din tid.</p>
          </div>
        </section>
        </article>

        <div id="omcoaching_skema">
          <div class="skema_billede">
            <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/skema_billede.svg" alt="skema">
          </div>
        </div>

<section id="omcoaching_slider">
  <h1>Klienter siger</h1>
         <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/wave_background.svg" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">"Jeg har haft fornøjelsen af et mini-forløb hos dig, hvor vi på trods af få sessioner alligevel har været vidt omkring. Du er nærværende og kompetent og lykkes i at få mig til at føle mig tryg på kort tid. " 
        <br>
    <p>- Sanne</p>
  </div>
  </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/wave_background.svg" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">"Jeg har de sidste 3 år prøvet div. Former for alternativ terapi og terapeutisk behandling, men coaching var noget som passede mig bedst og som ramte plet og indenfor kort tid har hjulpet mig mere end noget andet før." 
    <br>
    <p>- Nathalia</p> 
  </div>
  </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/wave_background.svg" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">"Jeg kunne allerede mærke fra starten at jeg kunne være tryg ved charlotte . Charlotte udstråler en der har styr på sit arbejde, man kan mærke det noget der virkelig interessere hende."
    <br>
    <p>- Patricia</p>   
  </div>
  </div>
</div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/wave_background.svg" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">"Tak Charlotte for at være en vigtig brik med vores samtaler særligt arbejdet med værdier. Din måde at formidle, fik mig til at lytte. Du er skarp, troværdig og tillidsfuld."
    <br>
    <p>- Ditte</p>   
    </div>
  </div>
</div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/wave_background.svg" alt="vand" style="width:100%">
    <div class="text_container">
    <div class="text">"Mine værdier var for mig lidt uklare. Jeg ved godt, hvad jeg står for og hvad der gør mig glad, men helt præcist at sætte ord på mine værdier, gjorde virkelig en stor forskel." 
   <br>
    <p>- Mette</p> 
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
