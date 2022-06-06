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
    <meta name="keywords" content="power, sundhed, coach, coaching, stresscoach, stress, ledelse, Greve, forandring, selvudvikling" />
    <meta name="author" content="Nina og Isabella" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--fonte-->

    <!--faveicon-->
    <!--link til stylesheet-->
	<link rel="stylesheet" href="style.css">
	<title>Personlig forløb</title>
<!--_____________________________________________________________________________________-->

    <body>
      <main>
        <section id="personligt_afsnit1">
          <div class="entry-title">
          <h1>Personlig Forløb</h1>
          </div>
          <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;">Til top</button>
          <!--________IKON________-->
          <div class="ikon_container">
            <div class="ikon_wrapper">
              <img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/personlig.svg" alt="personligt forløb">
            </div>
          </div>
          <!--________Lille forklarende tekst________-->
          <div class="forloeb_text">
          <div class="forloeb_box">
            <h2>1 til 1 eller workshop?</h2>
            <p>Indenfor personlige forløb, er der mulighed for at blive coachet i hold af flere i form af en workshop eller et 1 til 1 forløb, hvor vi individuelt arbejder på din proces mod dine mål. Her handler forløbene om stress håndtering og ledelse.</p>
          </div>
          </div>
        </section>


    <div>
      <div id="filtrering">
      <nav id="banner">
        <!--vi definere alle med klassen valgt, da den ikke er del af io-->
        <!-- <button data-personlig_cat="alle" class="valgt">Alle personlige forløb</button> -->
        <button class="filter" data-personlig_cat="8">Se 1 til 1</button>
        <button class="filter" data-personlig_cat="7">Se workshop</button>
        
      </nav>
      </div>
    </div>
      <!--_______FILTERERING - template_______-->
      <section id="personligt_afsnit2">
      <template>
				<article>
        <div class="ydelse_ramme">
				  <div class="textbox">
				    <h2 class="overskrift_h2"></h2>
				    <p class="kort_beskrivelse"></p>
            <h3 class="overskrift_h3"></h3>
				  </div>
				  <div class="billedebox">
				    <img class="personlig_billede"src="" alt="coaching billede">
				  </div>
        </div>
        <div class="knap_ramme">
          <div id="kasse_knap">
            <button class="generel_knap">Se mere</button>
          </div>
        </div>
			</article>
			<!-- <h3 class="alle"></h3> det er til nulstil søgning -->
			</template>
			<section class="personlig_container">

			</section>
      </section>
      <!-- MAIL-->
      <section class="mail">
          <div class="mail_wrapper">
            <div class="mail_container">
               <a href="mailto:kontakt@charlottewahl.dk" ><img src="<?php echo get_stylesheet_directory_uri()?>/ikoner/mail_kontakt.svg"  alt="mail"></a>
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
let personlig_ydelser;
let categories ;
let filterYdelse = "alle";

//______________________________ PERSONLIG FILTRERING_________________________________________________________

// let categories;
// //nøgle
// const dbUrl = "http://bellakezia.dk/kea2/eksamen/cwc/wp-json/wp/v2/personlig_ydelse";
// //url for at få fat i kategorier
// const catUrl = "http://bellakezia.dk/kea2/eksamen/cwc/wp-json/wp/v2/categories";
// let ydelser;
// let filter = "alle";
// const filtrerKnap = document.querySelectorAll("#banner button");
// //const modal = document.querySelector("#modal");

// //loader dommen før funktionen start kommer
// document.addEventListener("DOMContentLoaded", start);

// //definere funktionen start, som definere at man klikker på knap
// function start() {
//   filtrerKnap.forEach((knap) =>
//     knap.addEventListener("click", filtrerKategori)
//   );
//   hentdata();
// }

// hentdata();

// //definere funktionen filtrerkategori, som betyder at for hver knap tildeles h1 en kategori
// function filtrerKategori() {
//   filter = this.dataset.ydelser;
//   console.log("filter", filter);
//   document.querySelector("h1").textContent = this.textContent;

//   vis();
// }
// //henter data fra json io
// async function hentdata() {
//   console.log("her er json");
//   const respons = await fetch(dbUrl);
//   const catdata = await fetch(catUrl);
//   categories = await catdata.json(); 
//   ydelser = await respons.json();
//   console.log(categories);
//   vis();
// }

// //definere at container er section og at temp er template
// const container = document.querySelector("#personligt_afsnit2");
// const temp = document.querySelector("template");

// function vis() {
//   console.log(ydelser);
//   container.innerHTML = "";
//   ydelser.forEach((personlig_ydelse) => {
//     if (filter == personlig_ydelse.kategori || filter == "alle") {
//       /*____klon er altså alt inde i template 'temp'_____*/
//       const klon = temp.cloneNode(true).content;
//       klon.querySelector(".overskrift_h2").innerHTML = personlig_ydelse.overskrift_h2;
//       klon.querySelector(".overskrift_h3").innerHTML = personlig_ydelse.overskrift_h3;
//       klon.querySelector(".kort_beskrivelse").innerHTML = personlig_ydelse.kort_beskrivelse;
//       klon.querySelector(".personlig_billede").src = personlig_ydelse.personlig_billede.guid;
//       /*___kald til at åbne i ny side_____*/
//       klon.querySelector("article").addEventListener("click", () => {
//       location.href = personlig_ydelse.link;
//       });

//       /*klon.querySelector("img").src = "medium/" + kategori.md;*/
//       container.appendChild(klon);
//     }
//   });
// }

//nøgle
const dbUrl = "http://bellakezia.dk/kea2/eksamen/cwc/wp-json/wp/v2/personlig_ydelse";
// //url for at få fat i kategorier
const catUrl = "http://bellakezia.dk/kea2/eksamen/cwc/wp-json/wp/v2/categories";


async function getJson() {
const data = await fetch(dbUrl);
const catdata = await fetch(catUrl);
personlig_ydelser = await data.json();
categories = await catdata.json();
console.log(visPersonlig_ydelser);
visPersonlig_ydelser();
addEventListenersToButtons();
}


function addEventListenersToButtons() {
document.querySelectorAll("#filtrering button").forEach(elm =>{
elm.addEventListener("click", filtrering);
})

};

function filtrering (){
filterYdelse = this.dataset.personlig_cat;
console.log(filterYdelse);

visPersonlig_ydelser();
}

function visPersonlig_ydelser() {
	console.log(personlig_ydelser);
	let temp = document.querySelector("template");
	let container = document.querySelector(".personlig_container")
	container.innerHTML = "";
	personlig_ydelser.forEach(personlig_ydelse => {
		//Vha. if sætningen tager vi fat i kategorien område og vha. && siger vi område OG uddannelsestrin
		//Med denne kode skal man kun have én funktion til alle kategorier, hvor man siger en kategori og en ny kategori
		if (filterYdelse == "alle" || personlig_ydelse.categories.includes(parseInt(filterYdelse))){
		const klon = temp.cloneNode(true).content;
		klon.querySelector(".overskrift_h2").innerHTML = personlig_ydelse.overskrift_h2;
		klon.querySelector(".overskrift_h3").innerHTML = personlig_ydelse.overskrift_h3;
		klon.querySelector(".kort_beskrivelse").innerHTML = personlig_ydelse.kort_beskrivelse;
		klon.querySelector(".personlig_billede").src = personlig_ydelse.personlig_billede.guid;
		klon.querySelector("article").addEventListener("click", () => {
		location.href = personlig_ydelse.link;})
		container.appendChild(klon);
		}
  
	})

}
getJson();


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
