<?php 
session_start();
$_SESSION["un"]=""; 
$_SESSION=array();
header("location:UserLogin.php");
?>