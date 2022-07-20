<?php
session_start();
require('../php_connect/DB_connect.php');

//retrieve userId from session variable
$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];
$dob = $_REQUEST["dob"];
$phpdate = strtotime( $dob );
$mysqldate = date( 'Y-m-d', $phpdate );

$getId = "SELECT `user_Id` FROM `users`
WHERE `firstname`='$firstName'
AND `lastName`='$lastName'
AND `dob`='$mysqldate'";

echo "<script>alert('$firstName')</script>";
echo "<script>alert('$lastName')</script>";
echo "<script>alert('$dob')</script>";

$user_Id = 0;

//output data of each row
//save the query result array in the result variable
$result = $conn->query($getId);

//loop through the array to fetch the user ID 
while ($row = $result->fetch_row()) {
    $user_Id = $row[0];
}

if ($user_Id == 0) {
    header("Location: ../noUserIdFound.php");
} else {
    $_SESSION["userId"] = $user_Id;
    $_SESSION["firstName"] = $firstName;
    $_SESSION["lastName"] = $lastName;
    header("Location:../feesPage.php");
}
$conn->close();

?>