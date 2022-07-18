<?php 

session_start();
$_SESSION['firstName'] = $_POST['firstNameVal'];
$_SESSION['lastName'] = $_POST['lastNameVal'];
$_SESSION['dob'] = $_POST['dobVal'];
$_SESSION['age'] = $_POST['ageVal'];
$_SESSION['phone'] = $_POST['phoneVal'];
$_SESSION['email'] = $_POST['emailVal'];
//include("../php_connect/DB_connect.php");
if(array_key_exists('firstName',$_SESSION) && !empty($_SESSION['firstName'])) {
  echo 'Set and not empty, and no undefined index error!';
  $name = $_SESSION["firstName"];
  $lname = $_SESSION["lastName"];
  $dob = $_SESSION["dob"];
  $age = $_SESSION["age"];
  $phone = $_SESSION["phone"];
  $email = $_SESSION["email"];
  echo "<script>alert('$name')</script>";
  echo "<script>alert('$lname')</script>";
  echo "<script>alert('$dob')</script>";
  echo "<script>alert('$age')</script>";
  echo "<script>alert('$phone')</script>";
  echo "<script>alert('$email')</script>";
} else {
  $message ='empty';
  echo "<script>console.log('$message')</script>";
}

?>