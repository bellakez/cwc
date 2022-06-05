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
         <!--________splashbillede om mig________-->
      <section id="ommig_afsnit1">
        <div class="entry-title">
          <h1>Om mig</h1>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri()?>/billeder/charlotte/om_mig_splash_compress.webp" alt="om coaching">
      </section>
      <!--Personlig-->
      <section id="ommig_afsnit2">
        <div class="ommig_container">
          <div class="ommig_ikon_wrapper">
                <div class="ommig_ikon_box">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/person.svg" alt="person">
              </div>
          </div>
          <h2>Personligt</h2>
          <p>Jeg har selv oplevet livskriser og mødt udfordringer på min vej. Jeg har ingen børn, sådan skulle det ikke være. Vi prøvede i mange år, gik igennem fertilitetsbehandlinger og operationer for at komme tættere på drømmen. Mit arbejde med selvudvikling har gjort, at jeg har sluttet fred med et liv uden børn. Da jeg tillod mig selv at mærke efter og vurdere den vej, jeg havde valgt i livet, faldt det mig naturligt ind, at tage coaching uddannelsen. Det blev starten på min egen selvudvikling. Jeg glæder mig til at støtte dig i din selvudvikling.</p>
        </div>
        <!--Proffesionel-->
        <div class="ommig_container">
          <div class="ommig_ikon_wrapper">
                <div class="ommig_ikon_box">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/briller.svg" alt="person">
              </div>
          </div>
          <h2>Professionelt</h2>
          <p>Jeg er uddannet og certificeret stress coach og ledelses coach hos Sofia Manning, en af de mest anerkendte coaching uddannelser i Danmark. Uddannelsen er godkendt af The International Coach Federation (ICF), som er det største internationale coachingforbund i verden. Derudover, har jeg været leder i Telia i mere end 20 år og har taget supplerende HR ledelsesfag. Grundet min professionelle erfaring, har jeg lært at kommunikere på forskellige niveauer og at det er de menneskelige egenskaber som leder, som gør at du som leder opnår følgeskab og dermed succes i dit lederskab.</p>
        </div>
        <!--Kvaliteter-->
          <div class="ommig_container">
          <div class="ommig_ikon_wrapper">
                <div class="ommig_ikon_box">
                    <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/tjek.svg" alt="person">
              </div>
          </div>
          <h2>Kvaliteter</h2>
          <ul>
            <li>Jeg har en positiv tilgang til alt i livet. Jeg tror at alle valg har konsekvenser og at der ved hvert valg, er et fravalg.</li>
            <li>Jeg tror, at alle gør altid det bedste de kan med de forudsætninger de har - vi gør det vi vurderer er bedst lige nu </li>
            <li>Jeg har meget overskud og er omsorgsfuld. I min tilgang til coaching sætter jeg vægt på en åben og ærlig kommunikation. På den måde, når du og jeg længst.</li>
          </ul>
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

      </script>
    </body>
</html>
<?php

get_footer();
