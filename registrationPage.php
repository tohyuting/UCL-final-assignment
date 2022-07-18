<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Summer school web exercise</title>
	
<link type="text/css" rel="stylesheet" href="css/cssMain.css">
<link type="text/css" rel="stylesheet" href="css/validate.css">
<link href="css/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">	
<link href="css/validate.css" rel="stylesheet" type="text/css">	
<script type="text/javascript" scr="js/jquery.ui-1.10.4.datepicker.min.js"></script>
<script type="text/javascript" src="js/jquery_lib.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>	
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slider.js"></script>	
<script type="text/javascript" src="js/validator.js"></script>	
<script type="text/javascript" src="js/registrationPage.js"></script>

</head>

<body>

<div class="ui-datepicker-multi" id="container">
<div id="header"> HEADER </div>
<div id="content">
	
<form name="userForm" id="userForm">
<table  border="1" align="center" cellpadding="3" cellspacing="5" id="contactTable">

<thead>
  <tr>
    <th><button type="button" class="navBack">HOME PAGE</button></th>
    <th colspan="3">REGISTER Please add details below</th>
  </tr>
</thead>

<tbody>
  <tr>
    <td width ="28%" align="right">First Name</td>
	  <td width="29%"><input name="firstName" type="text" id="firstName" val="" required="required"/></td>
	  <td width="15%" align="right">Last Name</td>
	  <td width="28%"><input name="lastName" type="text" id="lastName" val="" required="required"/></td>
  </tr>
  <tr>
    <td align="right">DoB <input type="text" id="date"></td>
    <td><input name="newdate" type="text" id="newdate" val=""/></td>
    <td align="right">Age</td>
    <td><input name="age" type="text" id="age" val=""/></td>
  </tr>
  <tr>
    <td width ="28%" align="right">Phone Number</td>
	  <td width="29%"><input name="phone" type="text" id="phone" val="" required="required"/></td>
	  <td width="15%" align="right">Email</td>
	  <td width="28%"><input name="email" type="text" id="email" val="" required="required"/></td>
  </tr>
  
  <tr>
    <td colspan=4> <input name="next_address" type="submit" id="next_address" value="next addr" val="register"></td>
  </tr>
</tbody>
</table>
</form>

<form action="php_files/uploadAddressToDB.php" method="post" enctype="multipart/form-data" id="addressForm">
<table  border="1" align="center" cellpadding="3" cellspacing="5" id="contactTable">
<thead>
  <tr>
    <th width="27%"><button type="button" class="navBack">HOME PAGE</button></th>
    <th colspan="3">REGISTERED</th>
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
    <td align="right">city</td>
    <td><input name="city" type="text" id="city" val=""/></td>
    <td align="right">post code</td>
    <td><input name="postCode" type="text" id="postCode" val=""/></td>
  </tr>
  <tr>
    <td colspan=4><input name="next_address" type="submit" id="confirmation" value="Submission" val="register">
  </tr>
</tbody>
</table>
</form>
</div>

</div>

<div id="footer"> FOOTER </div>
</div>             
<div id="loadAgeCalc">here it is </div>                 
                    
                    
</body>             
</html>             
                    