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

    <!--faveicon-->
    <!--link til stylesheet-->
	<link rel="stylesheet" href="style.css">
	<title>Charlotte Wahl</title>
		</main><!-- #main -->
	</div><!-- #primary -->
<!--_____________________________________________________________________________________-->

    <body>

		<button class="button_back">← Tilbage</button>
        <section id="personligt_afsnit1">
          <!--________IKON________-->
          <div class="ikon_container">
            <div class="ikon_wrapper">
              <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/personlig.svg" alt="personligt forløb">
            </div>
          </div>
        </section>

		      <!--_______FILTERERING - template_______-->
      <section id="personligt_afsnit2">
      <template>
				<article>
        <div class="ydelse_ramme">
				  <div class="textbox">
				    <h2 class="overskrift_h2"></h2>
				    <p class="lang_beskrivelse"></p>
            		<h3 class="overskrift_h3"></h3>
				  </div>
				  <div class="billedebox">
				    <img class="personlig_billede" src="" alt="coaching billede">
				  </div>
        </div>
        <div class="knap_ramme">
          <div id="kasse_knap">
            <button class="generel_knap">Shop</button>
          </div>
        </div>
			</article>
			<!-- <h3 class="alle"></h3> det er til nulstil søgning -->
			</template>
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
	document.querySelector(".personlig_billede").src = personlig_ydelse.personlig_billede.guid;
}

  getJson();

	document.querySelector(".button_back").addEventListener("click", () => {
	history.back();
	});
		</script>
    </body>
		</html>
  
<?php get_footer();
