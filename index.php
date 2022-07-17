<?php

//$test = "hello world";
//echo $test."<hr>";

include("php_connect/DB_connect.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Summer school web exercise</title>
	
<link type="text/css" rel="stylesheet" href="css/cssMain.css"/>
<script src="js/jquery_lib.js"></script>


<script>
$(document).ready(function(){
	
	 /*-console.log( "ready! I tell you" );
	$("tr:even").click(function() { alert("hi you") });*/
	$("tr:odd").css("background-color", "#EFF1F1");
	$("#navBack").click(function() { location.href = 'registrationPage.php' });
	
}); 
</script>

</head>

<body>

<div id="container">
<div id="header"> this is my HEADER </div>
<div id="content">
	
<table  border="1" align="center" cellspacing="10" id="contactTable" width="40%">
<thead>
  <tr>
    <th colspan=2>HOME PAGE</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td width ="30%"> <button type="button" id="navBack">REGISTER YOUR DETAILS</button></td>
	<td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>

  </tr>
	  <tr>
    <td>something here</td>
    <td></td>

  </tr>

</tbody>
</table>
</div>
	
<!-- end content div-->

<div id="footer"> FOOTER copywrite UCL 2022 </div>
</div>
<!-- end container div-->
 
                    
                    
                    
</body>             
</html>             
                    