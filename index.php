<?php
session_start();
include("php_connect/DB_connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Day Tour</title>
<link rel="shortcut icon" type="image/jpg" href="images/destination.png"/>
<link type="text/css" rel="stylesheet" href="css/cssMain.css"/>
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital@1&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<script src="js/jquery_lib.js"></script>
<script src="js/index.js"></script>
<script src="js/indexButtons.js"></script>

</head>

<body>

<ul class="navBar">
        <li><a href="#" id="toPayment"> Payment </a></li>
        <li><a href="registrationPage.php"> Sign Up </a></li>
        <li><a href="about.php"> About Us </a></li>
        <li><a href="index.php"> Home </a></li>
</ul>


<div id="content">
<div class="mainText">

Welcome to <b>Day Tour</b>! We promise to deliver great experiences for your day tours.

<div id="indexButtons">
<button id="startAdventure" class="mainButtons">Start Your Adventure &#9978;</button>
<button id="moreInfo" class="mainButtons">More Information &#128195;</button>
<button id="payAdventure" class="mainButtons">Pay For Your Adventure &#128183;</button>
</div>

</div>
<div id="photos">
<img src="images/stonehenge.jpg" class="indexPhotos"/>
<img src="images/riverouse.jpg" class="indexPhotos"/>
<img src="images/durdledoor.jpg" class="indexPhotos"/>
</div>

</div>
	
<!-- end content div-->

<div id="footer">&#169; Day Tour 2022</div>

</body>             
</html>             
                    