<?php 
session_start();

// this script stores all relevant post data into session variables for retrieval
$_SESSION['firstName'] = $_POST['firstNameVal'];
$_SESSION['lastName'] = $_POST['lastNameVal'];
$_SESSION['dob'] = $_POST['dobVal'];
$_SESSION['age'] = $_POST['ageVal'];
$_SESSION['phone'] = $_POST['phoneVal'];
$_SESSION['email'] = $_POST['emailVal'];
?>