<?php

//this code takes the chosen birthdate and the current year to work out the age of the registrant
//get todays date, format the argument day month year seperate with hyphon
$today = date('d-j-Y');

//get the postdata from the form that is the chosen birth date
$ageDate = $_REQUEST['dateIn'];

//split the date into an array using the three part hyphon
$splitAgeDate = explode("-", $ageDate);

//split today's date into an array
$splitDate = explode("-", $today);

//minus the birthyear from the current year and save into $ageNow variable
$ageNow = $splitDate[2] - $splitAgeDate[2];

//notice that the day and the month is recorded but not used
echo $ageNow;
?>

