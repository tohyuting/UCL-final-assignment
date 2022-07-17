<?php


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Summer school web exercise</title>
	
<link type="text/css" rel="stylesheet" href="css/cssMain.css">
<link href="css/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="css/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">	
<link href="css/validate.css" rel="stylesheet" type="text/css">	
  <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>-->
<script type="text/javascript" scr="js/jquery.ui-1.10.4.datepicker.min.js"></script>
<script type="text/javascript" src="js/jquery_lib.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>	
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slider.js"></script>	
<script type="text/javascript" src="js/validator.js"></script>	
	
	
<script>
$(document).ready(function(){	
	 /*-console.log( "ready! I tell you" );
	$("tr:even").click(function() { alert("hi you") });*/
	$("tr:odd").css("background-color", "#EFF1F1");
	$("#navBack").click(function() { location.href = 'index.php' });
	
	
$("#date").hide();	
	
$("#date").datepicker({
showOn: "button",
buttonImage: "images/calendar_link.png",
buttonImageOnly: false,
dateFormat: "dd-mm-yy",
changeDay: true,
changeMonth: true,
changeYear: true,
yearRange: "-80:+00",
altField: "#newdate"
});
	
$("#date").change(function(){
	var getBirth = $(this).val();
	$('#loadAgeCalc').load("php_files/getAge.php?dateIn="+getBirth);
});
	
$('#next_address').click(function(){
	//alert("next address clicked");
});
	
});

</script>

</head>

<body>

<div class="ui-datepicker-multi" id="container">
<div id="header"> HEADER </div>
<div id="content">
	
<form action="php_files/uploadToDB.php" method="post" enctype="multipart/form-data">
<table  border="1" align="center" cellpadding="3" cellspacing="5" id="contactTable">
<thead>
  <tr>
    <th><button type="button" id="navBack">HOME PAGE</button></th>
    <th colspan="3">REGISTER Please add details below</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td width ="28%" align="right">First Name</td>
	<td width="29%"><input name="firstName" type="text" id="firstName" val=""/></td>
	<td width="15%" align="right">Last Name</td>
	<td width="28%"><input name="lastName" type="text" id="lastName" val=""/></td>
  </tr>
  <tr>
    <td align="right">DoB <input type="text" id="date"></td>
    <td><input name="newdate" type="text" id="newdate" val=""/></td>
    <td align="right">Age</td>
    <td><input name="age" type="text" id="age" val=""/></td>

  </tr>
   <tr>
    <td colspan=4>
<input name="next_address" type="submit" id="next_address" value="NEXT ADDRESS" val="register"></td>
  </tr>
</tbody>
</table>
</form>

</div>

<div id="footer"> FOOTER </div>
</div>             
<div id="loadAgeCalc">here it is </div>                 
                    
                    
</body>             
</html>             
                    