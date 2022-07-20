<?php
session_start();
require('../php_connect/DB_connect.php');

//retrieve userId from session variable
$user_Id = $_SESSION["userId"];
// assume a fixed fee of 9.50 and dateDue will be 1 month from date paid
$feesPaid = 9.50;
$datePaid = date('Y-m-d');
$dateDue = date('Y-m-d', strtotime(' + 1 months'));

//insert record into fees
$insertFees = "INSERT INTO `fees` 
(`user_Id`, `feePaid`, `datePaid`, `dateDue`) 
VALUES ('$user_Id', '$feesPaid','$datePaid','$dateDue')";

//redirect to payment success if insertion is successful
if ($conn->query($insertFees) === TRUE) {
    header("Location:../paymentSuccess.php");
} else { echo "Error: ".$sql."<br>".$conn->error; }

$conn->close();

?>