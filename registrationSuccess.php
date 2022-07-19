<?php
session_start();
$user_Id = $_REQUEST['user_Id'];

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
<title>Summer school web exercise</title>
	
<link type="text/css" rel="stylesheet" href="css/cssMain.css"/>
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
<script src="js/jquery_lib.js"></script>
<script src="js/registrationSuccess.js"></script>

</head>

<body>

<ul class="navBar">
        <li><a href="retrieveUserId.php"> Payment </a></li>
        <li><a href="registrationPage.php"> Sign Up </a></li>
        <li><a href="pages/about.html"> About Us </a></li>
        <li><a href="index.php"> Home </a></li>
</ul>

<div id="content">
	
<table border="1" align="center" cellpadding="4" cellspacing="4">
  <tbody>
    <tr>
      <td><span id="homeLink">HOME</span></td>
		<td><span id="truncate">empty database</span></td>
    </tr>
  </tbody>
</table>

Registration success, would you like to proceed with payment?

<button type="button" id="payment"> Yes </button>
<button type="button" id="return"> No </button>
	

</div>

<div id="footer"> &#169; Day Tour 2022 </div>
                    
                    
                    
                    
</body>             
</html>             
                    