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
    <meta name="description" content="Ønsker du positiv forandring og/eller selvudvikling i dit liv? Coaching er et redskab der støtter dig med at finde din power og nå dine mål. " />
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
<!--_____________________________________________________________________________________-->

    <body>
      <main>
        <section id="praktisk_afsnit1">
          <div class="entry-title">
          <h1>Praktisk info</h1>
          </div>
          <!--________IKON________-->
          <!-- <div class="ikon_container">
            <div class="ikon_wrapper">
              <img src="PHP_TAG_HER!!!!/ikoner/info.svg" alt="information">
            </div>
          </div> -->
        </section>
        <section id="praktisk_afsnit2">
          <div class="praktisk_billede_container">
            <img src="<?php echo get_stylesheet_directory_uri()?>/logo/praktisk.svg" alt="information">
            <div class="pratisk_text">
              <h2>Købsbetingelser</h2>
              <h3>Afbud</h3>
              <p>Aftalen er bindende. Skulle du blive forhinderet bedes du melde afbud senest 24 timer før aftalte tidspunkt. Afbud bedes meldes skriftligt på mail: kontakt@charlotteWahl.dk</p>
            </div>
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
        let afsnit1;

        //nøgle
        const dbUrl = "https://bellakezia.dk/kea2/tema9/projekter/wp-json/wp/v2/cwc/";


        async function getJson() {
        const data = await fetch(dbUrl);
        console.log(afsnit1);
        visAfsnit1();
        }

        function visAfsnit1() {
	      console.log(afsnit1);
	      let temp = document.querySelector("template");
	      let container = document.querySelector(".afsnit1_container")
	      container.innerHTML = "";
        klon.querySelector(".splashvideo").src = afsnit1.video.guid;
        }


      </script>
    </body>
</html>
<?php

get_footer();
