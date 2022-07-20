<?php 

session_start();
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$firstNamePad = "Current user <br> <b>First Name:</b> ";
$lastNamePad = " <b>Last Name:</b>  ";
echo $firstNamePad.$firstName.$lastNamePad.$lastName;

?>