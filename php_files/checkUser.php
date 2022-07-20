<?php 
session_start();
if (isset($_SESSION['userId']) && !empty($_SESSION['userId'])
&& isset($_SESSION['firstName']) && !empty($_SESSION['firstName'])
&& isset($_SESSION['lastName']) && !empty($_SESSION['lastName'])) {
    echo true;
} else {
    echo false;
}

?>