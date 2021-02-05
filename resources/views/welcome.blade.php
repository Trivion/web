<!DOCTYPE html>
<html>
<title>Tims Portofolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="" style="width:45%;" class="w3-round"><br><br>
    <h4><b>PORTFOLIO</b></h4>
    <p class="w3-text-grey"></p>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>OVER MIJ</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACTGEGEVENS</a>
  </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Tim's Portfolio</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
     
   
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <!-- <img src="/resources/img/forrest.jpg" alt="Hoterl site" style="width:100%" class="w3-hover-opacity"> -->
      <div class="w3-container w3-white">
        <p><b>Hotel Website</b></p>
        <p>In mijn eerste jaar webdeveloper heb ik een hotelsite moeten maken. <a href="http://u534237.gluweb.nl/hotelsite/" target="_blank">Klik hier</a> om de site te bekijken en misschien boek je wel een geweldige vakantie. </p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <!-- <img src="/resources/img/forrest.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"> -->
      <div class="w3-container w3-white">
        <p><b>Js Game 1</b></p>
        <p>In periode 1 van leerjaar 2 heb ik met behulp van JavaScript de game: Super Hang On moeten maken. <a href="http://u534237.gluweb.nl/sho-js/" target="_blank">Klik hier</a> om de game te bekijken, en zoveel mogelijk rondes te rijden. </p></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <!-- <img src="/w3images/nature.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"> -->
      <div class="w3-container w3-white">
        <p><b>JS game 2</b></p>
        <p>Dit is de laatste JavaScript opdracht die ik heb gemaakt. Ik heb boter, kaas en eieren gemaakt met behulp van React, helaas kon ik de game niet online zetten.</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <!-- <img src="/w3images/p1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"> -->
      <div class="w3-container w3-white">
        <p><b>JavaScript rekenmachine</b></p>
        <p>Dit rekenmachine project was een simpel maar erg leuk project. <a href="http://u534237.gluweb.nl/rekenmachine" target="_blank">Klik hier</a> om de rekenmachine te bekijken en om wat leuke sommen uit te rekenen. </p></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <!-- <img src="" alt=" style="width:100%" class="w3-hover-opacity"> -->
      <div class="w3-container w3-white">
        <p><b>Github</b></p>
        <p>Dit is mijn Github, hierin vind je nog meer van mijn projecten terug.<a href="https://github.com/Trivion" target="_blank">Klik hier</a> om mijn projecten te bekijken.</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <!-- <img src="/w3images/p3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity"> -->
      <div class="w3-container w3-white">
        <p><b></b></p>
        <p></p>
      </div>
    </div>
  </div>


<!-- 
  Images of Me 
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="/w3images/avatar_g.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="/img/forrest.jpg" alt="Me" style="width:100%">
    </div>
  </div> -->

  <div class="w3-container w3-padding-large" style="margin-bottom:32px">
    <h4 id="about"><b>Welkom op mijn site! </b></h4>
    <p>
   <h1> Mijn naam is Tim van Rossem. </h1>

    <p> <b>17 jaar </b></p>
   <p> <b> Woonachtig in Maarssen </b></p>
    <p> <b>Student </b></p>
    <p> <b>Game fanaat </b></p>
    <p> <b>Vakkenvuller AH </b></p>
    <p> <b>Netflix kijker </b></p>
     <p> <b>Spotify luisteraar</b></p>

<p>Ik zit op het Grafisch Lyceum in Utrecht en volg daar de opleiding Webdeveloper, niveau 4, ik zit nu in mijn 2e jaar. 
De opleiding is 3 jaar, dus ik hoop volgend jaar af te kunnen studeren.</p>
Ik volg graag mijn hart en maak graag wilde plannen. Op z’n tijd probeer ik ook nog grappig te zijn, wat niet altijd goed gaat.
Ik vind het leuk om dingen te creëren en te bedenken. En om een mooi eindresultaat neer te zetten. 
En om mensen met het eindresultaat blij te maken.

<p>Aan de hand van mijn portfolio wil ik je laten zien welke opdrachten ik tot nu toe heb gemaakt. Ikzelf ben bijzonder trots op het eindresultaat.</p>
</p>
    <hr>
    
    <h4>Technische vaardigheden</h4>
    <!-- Progress bars / Skills -->
    <p>Wedeveloper</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:40%">40%</div>
    </div>
    <p>Photoshop</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:45%">45%</div>
    </div>
    <p>

  
  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contactgegevens</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>timvrossem@gmail.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Utrecht, NL</p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>+31 6 19916428</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Naam</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Bericht</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>    
      <p><a href="https://www.linkedin.com/in/tim-van-rossem-6b9b22192/" target="_blank">LinkdIn</a></p><a href="https://www.instagram.com/ttiimiii/" target="_blank">Instagram</a>
      <p>Copyright © Tim van Rossem 2021</p>
  
    </div>
 


  </div>
  </footer>
  
  
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
