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
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Arvo&family=Bitter:ital@1&display=swap" rel="stylesheet">
<script type="text/javascript" scr="js/jquery.ui-1.10.4.datepicker.min.js"></script>
<script type="text/javascript" src="js/jquery_lib.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>	
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slider.js"></script>	
<script type="text/javascript" src="js/validator.js"></script>	
<script type="text/javascript" src="js/index.js"></script>	
<script type="text/javascript" src="js/feesPage.js"></script>	

</head>

<body>

<ul class="navBar">
        <li><a href="#" id="toPayment"> Payment </a></li>
        <li><a href="registrationPage.php"> Sign Up </a></li>
        <li><a href="about.php"> About Us </a></li>
        <li><a href="index.php"> Home </a></li>
</ul>

<div class="ui-datepicker-multi" id="content">

<form action="php_files/uploadFeesToDB.php" method="post" enctype="multipart/form-data" id="paymentForm">
<table align="center" cellpadding="3" cellspacing="5" id="contactTable">
<thead>
  <tr>
    <th colspan="8">Pay your fees (£ 9.50)</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td align="right">Card Number</td>
    <td width="27%" colspan="6"><input name="cardNumber" type="text" id="cardNumber" val="" style="width: 350px;"/></td>
  </tr>
  <tr>
    <td width="19%" align="right">Expiry Date</td>
    <td width="27%"><input name="expire" type="month" id="expire" val=""/></td>
    <td align="right">CVV</td>
    <td><input name="cvv" type="text" id="cvv" val=""/></td>
  </tr>
  <tr>
    <td colspan=4><input class="mainButtons" name="next_payment" type="submit" id="payment" value="Continue to payment &#10145;" val="pay"></td>
  </tr>
</tbody>
</table>
</form>

<div id="paymentTextAndReset" class="textAndReset">
<div id="paymentText" class="mainText"></div>
<input class="mainButtons" name="reset_user" type="button" id="resetUser" value="Reset User &#10548;" val="Reset User">
</div>

</div>

<div id="footer"> &#169; Day Tour 2022 </div>                            
                    
                    
</body>             
</html>             
                    