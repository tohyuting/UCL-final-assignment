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
<script type="text/javascript" src="js/feesPage.js"></script>	

</head>

<body>

<div class="ui-datepicker-multi" id="container">
<div id="header"> HEADER </div>
<div id="content">

<form action="php_files/uploadFeesToDB.php" method="post" enctype="multipart/form-data" id="addressForm">
<table  border="1" align="center" cellpadding="3" cellspacing="5" id="contactTable">
<thead>
  <tr>
    <th width="27%"><button type="button" class="navBack">HOME PAGE</button></th>
    <th colspan="3">Pay your fees (£ 50)</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td align="right">Card Number</td>
    <td width="27%"><input name="cardNumber" type="text" id="cardNumber" val=""/></td>
  </tr>
  <tr>
    <td width="19%" align="right">Expiry Date</td>
    <td width="27%"><input name="expire" type="text" id="expire" val=""/></td>
    <td align="right">CVV</td>
    <td><input name="cvv" type="text" id="cvv" val=""/></td>
  </tr>
  <tr>
    <td colspan=4><input name="next_payment" type="submit" id="payment" value="Continue to payment" val="pay">
  </tr>
</tbody>
</table>
</form>
</div>

</div>

<div id="footer"> FOOTER </div>
</div>                             
                    
                    
</body>             
</html>             
                    