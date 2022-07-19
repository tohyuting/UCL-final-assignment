<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Day Tour</title>

<link rel="shortcut icon" type="image/jpg" href="images/destination.png"/>
<link type="text/css" rel="stylesheet" href="css/cssMain.css">
<link type="text/css" rel="stylesheet" href="css/validate.css">
<link href="css/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">	
<link href="css/validate.css" rel="stylesheet" type="text/css">	
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<script type="text/javascript" scr="js/jquery.ui-1.10.4.datepicker.min.js"></script>
<script type="text/javascript" src="js/jquery_lib.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>	
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slider.js"></script>	
<script type="text/javascript" src="js/validator.js"></script>
<script type="text/javascript" src="js/noUserFound.js"></script>		

</head>

<body>

<ul class="navBar">
        <li><a href="retrieveUserId.php"> Payment </a></li>
        <li><a href="registrationPage.php"> Sign Up </a></li>
        <li><a href="about.php"> About Us </a></li>
        <li><a href="index.php"> Home </a></li>
</ul>

<div class="ui-datepicker-multi" id="content">

<div class="mainText" id="notFoundText">
Sorry, this user does not exist in our system.</br>Please reenter your details or register your details with us.

<div id="retrieveButtons">
<button type="button" id="register"> Register your details </button>
<button type="button" id="reenter"> Re-enter details </button>
</div>

</div>

</div>


<div id="footer"> &#169; Day Tour 2022 </div>
</div>                             
                    
                    
</body>             
</html>             
                    