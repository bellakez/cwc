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
    <meta name="description" content="Ønsker du positiv forandring og/eller selvudvikling i dit liv? Coaching er et redskab der støtter dig med at finde din power og nå dine mål." />
    <meta name="keywords" content="power, sundhed, coach, coaching, stresscoach, stress, ledelse, Greve, forandring, selvudviklingt" />
    <meta name="author" content="Nina og Isabella" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--fonte-->

    <!--faveicon-->
    <!--link til stylesheet-->
	<link rel="stylesheet" href="style.css">
	<title>Charlotte Wahl coaching</title>
<!--_____________________________________________________________________________________-->

    <body>
      <main>
        <section id="forside_afsnit1">
          <div class="splashbillede">
            <div class="cwc_h1">
                      <div class="entry-title">
                      <h1> Charlotte Wahl Coaching</h1>
                      </div>
            </div>
            <img src="" alt="">
          </div>
        </section>
        <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;">Til top</button>
        <h1>Tid til Forandring?</h1>
        <!-- andet afsnit -->
        <section class="forside_afsnit">
          <div class="forside_text">
            <h2>Positiv forandring</h2>
            <br>
            <p>Drømmer du om forandring i dit liv? Vi kommer alle igennem kriser i større eller mindre omfang. Hvordan vi kommer igennem dem handler om hvilke briller vi vælger at se igennem. Det kan være svært at mærke efter og vide, hvordan man skal bære sig ad med at skabe en positiv forandring. Det handler først og fremmest om at tage skridtet, ligemeget om det er småt eller stort. Rejsen begynder ved dig og sammen, kan vi nå langt!</p>
          <div class="knap_ramme">
          <div id="kasse_knap">
            <a href="http://bellakezia.dk/kea2/eksamen/cwc/om-coaching/"><button>Læs mere</button></a>
          </div>
          </div>          
          </div>
            <div class="forside_billede">
            <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/forsidecompress.jpg" alt="forside billede med bog">
          </div>
          </section>
          <!-- tredje afsnit -->
          <section class="forside_afsnit">
          <div class="forside_billede">
            <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/charlotte/match_compress.jpg" alt="Charlotte Wahl billede">
          </div>
          <div class="forside_text">
            <h2>Er vi et match?</h2>
            <br>
            <p>Mit navn er Charlotte Wahl og jeg er ledelsementor og stresscoach. Jeg bestræber mig på, at lytte aktivt på dig og hjælpe dig med at udforske de muligheder og potentieller, der præsenteres for dig i dit liv. Som coach, støtter jeg dig og hjælper med at motivere dig på din rejse om at empower dig selv i din selvudvikling.</p> 
            <br>
            <p>I min tilgang til dig ser jeg på det hele menneske. Det handler om at skabe balance imellem arbejde og privatlivet. Jeg ønsker at inspirere, og støtte dig fra dit ståsted i livet videre mod dine mål.</p>
        <div class="knap_ramme">
          <div id="kasse_knap">
            <a href="http://bellakezia.dk/kea2/eksamen/cwc/om-mig/"><button>Læs mere</button></a>
          </div>
        </div>
          </div>
          </section>
        <!-- ikoner forside -->
        <section id="forside_ikoner">
          <div class="alle_ikon_wrapper">
            <!-- ikon 1 -->
            <div class="ikon_container">
            <div class="forside_ikon_wrapper">
              <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/ledelse.svg" alt="ledelse ikon">
            </div>
          </div>
          <!-- ikon 2 -->
            <div class="ikon_container">
            <div class="forside_ikon_wrapper">
              <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/pil.svg" alt="pil ikon">
            </div>
          </div>
          <!-- ikon 3 -->
            <div class="ikon_container">
            <div class="forside_ikon_wrapper">
              <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/hjerte.svg" alt="hjerte ikon">
            </div>
          </div>
          <!-- ikon slut -->
          </div>
        </section>
        <!-- Kontakt mig afsnit -->
        <section class="forside_afsnit">
          <div class="forside_text">
            <h2>Har du nogle spørgsmål?</h2>
            <br>
            <p>Er du i tvivl om noget kan du kontakte mig, og jeg svarer så hurtigt som muligt. Det er helt uforpligtende!</p>
          <div class="knap_ramme">
          <div id="kasse_knap">
            <a href="http://bellakezia.dk/kea2/eksamen/cwc/kontakt/"><button>Kontakt</button></a>
          </div>
          </div>
          </div>
            <div class="forside_billede">
             <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/objekt_billeder/kontakt_mig_compress.jpg" alt="kontakt billede">
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
        "use strict";
        // BACK TO TOP

//Get the button:
mybutton = document.getElementById("myBtn");

//Når brugeren scroller 20px ned fra top af dokumentet, viser knappen (button) sig
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

//Når brugeren klikker på knappen (button), scroller den til toppen af dokumentet
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


      </script>
    </body>
</html>
<?php

get_footer();
