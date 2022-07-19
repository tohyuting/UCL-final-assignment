<?php
session_start();
require('../php_connect/DB_connect.php');

//retrieve userId from session variable
$user_Id = $_SESSION["userId"];
$feesPaid = 9.50;
$datePaid = date('Y-m-d');
$dateDue = date('Y-m-d', strtotime(' + 1 months'));

$insertFees = "INSERT INTO `fees` 
(`user_Id`, `feePaid`, `datePaid`, `dateDue`) 
VALUES ('$user_Id', '$feesPaid','$datePaid','$dateDue')";

if ($conn->query($insertFees) === TRUE) {
    header("Location:../paymentSuccess.php");
} else { echo "Error: ".$sql."<br>".$conn->error; }

$conn->close();

?>