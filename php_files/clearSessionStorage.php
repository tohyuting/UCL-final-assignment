<?php 

session_start();
// clears all session variables. Used for reset buttons or after a user
// has registered but did not proceed to payment immediately
$check = session_unset();
?>