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

// to get the current largest user ID in the database.
// record to be inserted will have a user ID of +1 from the largest
// user ID.
$getMaxQuery = "SELECT MAX(`user_Id`) FROM `users`";

$user_Id = 0;
$userIdResult = $conn->query($getMaxQuery);
while ($row = $userIdResult->fetch_row()) {
	$user_Id = $row[0];
}
// to generate current Id
$user_Id = $user_Id + 1;

// store user ID in session variable to potentially carry into payment page
$_SESSION['userId'] = $user_Id;

// query to insert into users database
$insertUser = "INSERT INTO `users` 
(`user_Id`, `firstName`, `lastName`, `dob`, `age`) 
VALUES ('$user_Id', '$firstName','$lastName','$mysqldate','$age')";

$conn->query($insertUser);

// query to insert into contactdetails database
$insertContact = "INSERT INTO `contactdetails` 
(`contact_Id`, `user_Id`, `email`, `telephone`) 
VALUES (NULL, '$user_Id','$email','$phone')";

$conn->query($insertContact);

//grab post values for creating address entry
$house_numberName = $_REQUEST['house_numberName'];
$street_name = $_REQUEST['street_name'];
$city = $_REQUEST['city'];
$postCode = $_REQUEST['postCode'];

//insert the address into the database
$sql = "INSERT INTO `address` 
(`address_Id`,`user_Id`,`house_numberName`,`street_name`,`city`,`postCode`) 
VALUES (NULL, '$user_Id','$house_numberName','$street_name','$city','$postCode')";

//bug finder
if ($conn->query($sql) === TRUE) { 

//if all ok load the registration success page
header("Location:../registrationSuccess.php");	
//else throw an error
} else { echo "Error: ".$sql."<br>".$conn->error; }

//close the database link
$conn->close();
?>