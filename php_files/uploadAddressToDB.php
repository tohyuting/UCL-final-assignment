<?php
session_start();
require('../php_connect/DB_connect.php');
// retrieve values from session variables
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];
$dob = $_SESSION['dob'];
$phpdate = strtotime( $dob );
$mysqldate = date( 'Y-m-d', $phpdate );
$age = $_SESSION['age'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];

$getMaxQuery = "SELECT MAX(`user_Id`) FROM `users`";

$user_Id = 0;
$userIdResult = $conn->query($getMaxQuery);
while ($row = $userIdResult->fetch_row()) {
	$user_Id = $row[0];
}
// to generate current Id
$user_Id = $user_Id + 1;

$insertUser = "INSERT INTO `users` 
(`user_Id`, `firstName`, `lastName`, `dob`, `age`) 
VALUES ('$user_Id', '$firstName','$lastName','$mysqldate','$age')";

if ($conn->query($insertUser) === TRUE) {
	echo "finally";
}

$insertContact = "INSERT INTO `contactdetails` 
(`contact_Id`, `user_Id`, `email`, `telephone`) 
VALUES (NULL, '$user_Id','$email','$phone')";

if ($conn->query($insertContact) === TRUE) {
	echo "finally";
}

//grab postdat values for creating user row
$house_numberName = $_REQUEST['house_numberName'];
$street_name = $_REQUEST['street_name'];
$city = $_REQUEST['city'];
$postCode = $_REQUEST['postCode'];

echo "<script>alert('$house_numberName')</script>";
echo "<script>alert('$street_name')</script>";
echo "<script>alert('$city')</script>";

//insert the postdata into the database
$sql = "INSERT INTO `address` 
(`address_Id`,`user_Id`,`house_numberName`,`street_name`,`city`,`postCode`) 
VALUES (NULL, '$user_Id','$house_numberName','$street_name','$city','$postCode')";

//bug finder
if ($conn->query($sql) === TRUE) { 
/*
	sleep(0.5);	
echo "jobs a goodun"; 
echo "<script>alert('why')</script>";*/

//if all ok load the address page with the user ID as post data
header("Location:../registrationSuccess.php?user_Id=".$user_Id."&message=ADDRESS AND NAME LOGGED");	
//else throw an error
} else { echo "Error: ".$sql."<br>".$conn->error; }

//close the database link
$conn->close();
?>