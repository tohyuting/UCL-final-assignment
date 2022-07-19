<?php 

session_start();

$check = session_unset();
if ($check == true) {
  echo 1;
} else {
  echo 2;
}
?>