<?php 

session_start();
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$firstNamePad = "Current user <br> First Name: ";
$lastNamePad = " Last Name:  ";
echo $firstNamePad.$firstName.$lastNamePad.$lastName;

?>