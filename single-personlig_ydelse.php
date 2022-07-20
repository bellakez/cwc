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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

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
	<title>Charlotte Wahl</title>
		</main><!-- #main -->
	</div><!-- #primary -->
<!--_____________________________________________________________________________________-->

    <body>
<section id="tilbage_knappen">
		<button class="button_back">← Tilbage</button>
  </section>
        <section id="personligt_afsnit1">

        <div class="entry-title">
          <h1>Om dette forløb</h1>
        </div>
          <!--________IKON________-->
          <div class="ikon_container">
            <div class="ikon_wrapper">
              <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/personlig.svg" alt="personligt forløb">
            </div>
          </div>
        </section>

        <!--________Manuelt kodet________-->
        <section class="forside_afsnit">
          <div class="single_text">
            <h2>Kontakt mig for en afklarende samtale</h2>
            <br>
          <div class="knap_ramme">
          <div id="kasse_knap">
             <a href="mailto:kontakt@charlottewahl.dk" ><button>Kontakt</button></a>
          </div>
          </div>          
          </div>
          </section>

		      <!--_______FILTERERING - template_______-->
      <section id="single_afsnit2">
        <div class="ydelse_ramme">
				  <div class="textbox">
				    <h2 class="overskrift_h2"></h2>
				    <p class="lang_beskrivelse"></p>
            		<h3 class="overskrift_h3"></h3>
				  </div>
        </div>
        <!-- <div class="knap_ramme">
          <div id="kasse_knap">
            <button class="generel_knap">Shop</button>
          </div>
        </div> -->
			<!-- <h3 class="alle"></h3> det er til nulstil søgning -->
			<section class="personlig_container">

			</section>
      </section>


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


  <script>
"use strict";
let link;
document.addEventListener("DOMContentLoaded", getJson);

async function getJson() {
  console.log("id er", <?php echo get_the_ID() ?>);
  let jsonData = await fetch(`http://bellakezia.dk/kea2/eksamen/cwc/personlig-ydelse/<?php echo get_the_ID() ?>`);
  link = await jsonData.json();
  visLink();
}

function visLink() {
  document.querySelector(".overskrift_h2").innerHTML = link.overskrift_h2;
  document.querySelector(".lang_beskrivelse").innerHTML = link.lang_beskrivelse;
  document.querySelector(".overskrift_h3").innerHTML = link.overskrift_h3;
	document.querySelector(".personlig_billede").src = link.personlig_billede.guid;
}

  getJson();

	document.querySelector(".button_back").addEventListener("click", () => {
	history.back();
	});
		</script>
    </body>
		</html>
  
<?php get_footer();
