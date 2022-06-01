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
          <p>43081322</p>
            </div>

          </div>
          <!--footer logo-->
          <div class="footer_box">
            <div class="footer_logo">
            <h2>Charlotte Wahl Coaching</h2>
            </div>
          </div>
          <!--medie ikoner-->
          <div class="footer_box">
             <div class="footer_ikoner">
              <h2>Følg med på</h2>
            </div>
          </div>
        </div>
        </section>
				

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
