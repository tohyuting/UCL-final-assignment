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
<link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital@1&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Bitter:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet"> 
<script type="text/javascript" scr="js/jquery.ui-1.10.4.datepicker.min.js"></script>
<script type="text/javascript" src="js/jquery_lib.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>	
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slider.js"></script>	
<script type="text/javascript" src="js/validator.js"></script>
<script type="text/javascript" src="js/index.js"></script>		
<script type="text/javascript" src="js/registrationPage.js"></script>

</head>

<body>

<ul class="navBar">
        <li><a href="#" id="toPayment"> Payment </a></li>
        <li><a href="registrationPage.php"> Sign Up </a></li>
        <li><a href="about.php"> About Us </a></li>
        <li><a href="index.php"> Home </a></li>
</ul>

<div class="ui-datepicker-multi" id="content">
	
  <!-- start of form for user -->
  <form name="userForm" id="userForm">
  <table align="center" cellpadding="3" cellspacing="5" id="contactTable">

  <thead>
    <tr>
      <th colspan="8">Please enter your personal details below</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td width ="28%" align="right">First Name</td>
      <td width="28%"><input name="firstName" type="text" id="firstName" val="" required="required"/></td>
      <td width="28%" align="right">Last Name</td>
      <td width="28%"><input name="lastName" type="text" id="lastName" val="" required="required"/></td>
    </tr>
    <tr>
      <td align="right">Date of Birth</td>
      <td><input type="text" id="date"><input name="newdate" type="text" id="newdate" val=""/></td>
      <td align="right">Age</td>
      <td><input name="age" type="text" id="age" val="" readonly="readonly"/></td>
    </tr>
    <tr>
      <td width ="28%" align="right">Phone Number</td>
      <td width="29%"><input name="phone" type="text" id="phone" val="" required="required"/></td>
      <td width="28%" align="right">Email</td>
      <td width="28%"><input name="email" type="text" id="email" val="" required="required"/></td>
    </tr>
    
    <tr>
      <td colspan="4"> <input class="mainButtons" name="next_address" type="submit" id="next_address" value="Next Page &#10145;" val="register"></td>
    </tr>
  </tbody>
  </table>
  </form>

  <!-- start of form for address -->
  <form action="php_files/uploadAddressToDB.php" method="post" enctype="multipart/form-data" id="addressForm">
  <table align="center" cellpadding="3" cellspacing="5" id="contactTable">
  <thead>
    <tr>
      <th colspan="8">Please enter your address details below</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td align="right">House name/no</td>
      <td width="27%"><input name="house_numberName" type="text" id="house_numberName" val=""/></td>
      <td width="19%" align="right">Street name</td>
      <td width="27%"><input name="street_name" type="text" id="street_name" val=""/></td>
    </tr>
    <tr>
      <td align="right">City</td>
      <td><input name="city" type="text" id="city" val=""/></td>
      <td align="right">Post code</td>
      <td><input name="postCode" type="text" id="postCode" val=""/></td>
    </tr>
    <tr>
      <td colspan=2><input class="mainButtons" name="next_address" type="submit" id="confirmation" value="Submit &#10145;" val="register"></td>
      <td colspan=2><input class="mainButtons" name="reset" type="button" id="reset" value="Reset &#10548;" val="reset"></td>
    </tr>
  </tbody>
  </table>
  </form>

  <!-- end of address form -->
    <div id="addressText" class="mainText"></div>

</div>


<div id="footer"> &#169; Day Tour 2022 </div>            

</body>             
</html>             
                    