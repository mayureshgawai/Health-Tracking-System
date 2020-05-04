<?php
session_start();
if(isset($_SESSION['name'])){

session_unset();
session_destroy();
$session_xpire = true;
header("Location:login.php");

}



?>