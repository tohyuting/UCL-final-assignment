<?php
session_start();
require('../php_connect/DB_connect.php');

//retrieve all the user details from post request
$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];
$dob = $_REQUEST["dob"];
$phpdate = strtotime( $dob );
$mysqldate = date( 'Y-m-d', $phpdate );

// this query helps to get the user_Id in the database (check if it exists)
// used to retrieve user details before payment page
$getId = "SELECT `user_Id` FROM `users`
WHERE `firstname`='$firstName'
AND `lastName`='$lastName'
AND `dob`='$mysqldate'";

$user_Id = 0;

//output data of each row
//save the query result array in the result variable
$result = $conn->query($getId);

//loop through the array to fetch the user ID 
while ($row = $result->fetch_row()) {
    $user_Id = $row[0];
}

// does a check to see if the user ID is found.
// if it is not found, display no user ID found page. Otherwise,
// lead user to fee payment page, with appropriate user details stored in the
// session variable
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