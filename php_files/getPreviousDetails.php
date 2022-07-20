<?php 

session_start();

// Get the first name and last name that are currently stored as session variables
// Display the first and last name properly formatted as shown
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$firstNamePad = "Current user <br> <b>First Name:</b> ";
$lastNamePad = " <b>Last Name:</b>  ";
echo $firstNamePad.$firstName.$lastNamePad.$lastName;

?>