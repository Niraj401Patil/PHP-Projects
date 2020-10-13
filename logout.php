<?php 
session_start();
$_SESSION["unm"]=""; 
unset($_SESSION['unm']);
header("location:home.php");

?>