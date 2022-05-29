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
        <section id="afsnit1">
          <template id="afnit1_template">
            <img class="splashvideo"src="splashvideo" alt="splashvideo">
          </template>
          <div class="entry-title">
          <h1> Charlotte Wahl Coach</h1>
          </div>
        </section>
        <section class="afsnit1_container">
        <h2>hello Isabella </h2>

        </section>
        <div class="entry-title">
          <h2>Hej hej</h2>
        </div>
        <p>ja goddag</p>
      </main>
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
