<?php 
session_start();

/* Does a validation to check if there are any valid user stored in the session
   storage currently. Valid user refers to user records that has been inserted
   into database. Checks if the various session variables are set and whether
   they are empty
*/ 
if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])
&& isset($_SESSION['firstName']) && !empty($_SESSION['firstName'])
&& isset($_SESSION['lastName']) && !empty($_SESSION['lastName'])) {
    echo true;
} else {
    echo false;
}

?>