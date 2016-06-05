<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="960.css">
    <script src="slideshow.js"></script>
	<script src="nav.js"></script>
    <title>ACME Home</title>
</head>
<body>
<ul class="navbar">
	<li><a href="index.php">Home</a> </li>
	<li><a href="alleproducten.php">Alle Producten</a></li>
	<li><a href="laptops.php">Laptops</a></li>
	<li><a href="computers.php">Computers</a></li>
	<li><a href="cases.php">Cases</a></li>
	<li><a href="muisen.php">Muisen</a></li>
	<li><a href="InlogSysteem/CheckPassword.php" class="groen">Login</a></li>
	<li><a href="InlogSysteem/CreatePassword.php" class="groen">Registreren </a></li>
	<li class="LoginEnAanmelden"><a href="#">
						<?php
						session_start();
							if (isset($_SESSION['user'])) {
								$sessie = $_SESSION ['user'];
								echo "logged in as $sessie";
							}
							else {
								echo "not logged in";
							}
						?></a></li>
		<li class="icon">
		<a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
		</li>
	</ul>	
<div id="header">
	<img src="logo.jpg" id="logo" alt=""> 
	<h1 id="tagline">De beste hardware die er is</h1>
</div>
	

	<div class="items">
	<img class="plaatje" alt="" src="Producten/Computer/computer1.png"> 
<h3 class="prijs"> € 125,00</h3>
<p class="info">Dit is een hele mooie laptop, met 500gb ruimte op je c schijf en een flexibele
touchpad, het is een aanrader als formeel en informeel gebruik. </p>
	</div>
	<div class="items">
	<img class="plaatje" alt="" src="Producten/Computer/computer2.png"> 
<h3 class="prijs"> € 125,00</h3>
<p class="info">Dit is een hele mooie laptop, met 500gb ruimte op je c schijf en een flexibele
touchpad, het is een aanrader als formeel en informeel gebruik. </p>
	</div>
	<div class="items">
	<img class="plaatje" alt="" src="Producten/Computer/computer3.png"> 
<h3 class="prijs"> € 125,00</h3>
<p class="info">Dit is een hele mooie laptop, met 500gb ruimte op je c schijf en een flexibele
touchpad, het is een aanrader als formeel en informeel gebruik. </p>
	</div>
	<div class="items">
	<img class="plaatje" alt="" src="Producten/Computer/computer4.png"> 
<h3 class="prijs"> € 125,00</h3>
<p class="info">Dit is een hele mooie laptop, met 500gb ruimte op je c schijf en een flexibele
touchpad, het is een aanrader als formeel en informeel gebruik. </p>
	</div>
	<div class="items">
	<img class="plaatje" alt="" src="Producten/Computer/computer5.png"> 
<h3 class="prijs"> € 125,00</h3>
<p class="info">Dit is een hele mooie laptop, met 500gb ruimte op je c schijf en een flexibele
touchpad, het is een aanrader als formeel en informeel gebruik. </p>
	</div>

	
<footer>
	
    <ul id="Producten">
        <li class="FooterH4"><h4> Producten </h4></li>
        <li><a href="#">Home</a> </li>
        <li><a href="#">Alle Producten</a></li>
        <li><a href="#"> Laptops</a></li>
        <li><a href="#"> Computers</a></li>
        <li><a href="#">Onderdelen</a></li>
        <li><a href="#">Accessoires</a></li>
    </ul>
       <ul id="Accounts">
        <li class="FooterH4"><h4> Accounts</h4></li>
        <li><a href="#">Inloggen</a> </li>
        <li><a href="#">Registreren</a></li>
        <li><a href="#">Wachtwoord vergeten</a></li>

    </ul>
         <ul id="Service">
        <li class="FooterH4"><h4> Service en diensten</h4></li>
        <li><a href="#">FAQ</a> </li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Adverteren</a></li>
        <li><a href="#">Cookies</a></li>
        <li><a href="#">Voorwaarden</a></li>
        <li><a href="#">Over ons</a></li>
        <li><a href="#">Retour</a></li>
    </ul>
	
	<ul>
		<li id="Brief">
        <h4> Nieuwsbrief</h4>
        <input id="nieuwsbrief1" type="text" placeholder="uw email">
		<button id="nieuwsbrief2" type="button">Aanmelden</button>
        <h5> Volg ons ook op social media</h5>
        <img id="socialmedia" src="socialmedianieuw2.png" alt=""> 
		<li>

    </ul>

    <p id="footer">© Acme Hardware 2016 </p>
  
</footer>
</body>
</html>
