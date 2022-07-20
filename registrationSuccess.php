<?php
session_start();
//$user_Id = $_REQUEST['user_Id'];

if(isset($_REQUEST['message'])){
$message = $_REQUEST['message'];
} else { $message = "Address added"; }


include("php_connect/DB_connect.php");

//constrain the result to the user details just uploaded 
$sql = "SELECT `firstName`, `lastName`, `dob`, `age`, `house_numberName`, `street_name`, `city`, `postCode` FROM `users` left join `address` ON `users`.`user_Id` = `address`.`user_id` ORDER BY `address_Id` DESC";
	
$result = mysqli_query($conn, $sql);

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
<script src="js/registrationSuccess.js"></script>

</head>

<body>

<ul class="navBar">
        <li><a href="#" id="toPayment"> Payment </a></li>
        <li><a href="registrationPage.php"> Sign Up </a></li>
        <li><a href="about.php"> About Us </a></li>
        <li><a href="index.php"> Home </a></li>
</ul>

<div id="content">

<div id="successText" class="mainText">
Registration success! </br> Would you like to proceed with payment?

<div id="successButtons">
<button type="button" class="mainButtons" id="payment"> Yes &#10004;</button>
<button type="button" class="mainButtons" id="return"> No &#10006;</button>
</div>
</div>
</div>

<div id="footer"> &#169; Day Tour 2022 </div>
                    
                    
                    
                    
</body>             
</html>             
                    