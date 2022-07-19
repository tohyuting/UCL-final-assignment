<?php
session_start();
include("php_connect/DB_connect.php");

if(array_key_exists('firstName',$_SESSION) && !empty($_SESSION['firstName'])) {
        echo 'Set and not empty, and no undefined index error!';
        $name = $_SESSION["firstName"];
        $lname = $_SESSION["lastName"];
        $dob = $_SESSION["dob"];
        $age = $_SESSION["age"];
        $phone = $_SESSION["phone"];
        $email = $_SESSION["email"];
        echo "<script>alert('$name')</script>";
        echo "<script>alert('$lname')</script>";
        echo "<script>alert('$dob')</script>";
        echo "<script>alert('$age')</script>";
        echo "<script>alert('$phone')</script>";
        echo "<script>alert('$email')</script>";
      } else {
        echo "<script>alert('empty')</script>";}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Day Tour</title>
<link rel="shortcut icon" type="image/jpg" href="images/destination.png"/>
<link type="text/css" rel="stylesheet" href="css/cssMain.css"/>
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<script src="js/jquery_lib.js"></script>
<script src="js/index.js"></script>

</head>

<body>

<ul class="navBar">
        <li><a href="retrieveUserId.php"> Payment </a></li>
        <li><a href="registrationPage.php"> Sign Up </a></li>
        <li><a href="about.php"> About Us </a></li>
        <li><a href="index.php"> Home </a></li>
</ul>


<div id="content">
<div class="mainText">

Welcome to <b>Day Tour</b>! We promise to provide you the greatest comfort for you to travel to your destination.
Click on About Us to know more about us! If you would like to contact us, feel free to find out contact details under Contact Us.
If you are a first timer ready to start on your adventure, feel free to click on Sign Up page to register your details before paying for the day tour.
If you are a returning adventurer, go ahead to the Payment page to register for the tour again!
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
                    