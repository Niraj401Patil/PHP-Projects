
<?php
session_start();
extract($_POST);
require_once("config.php");
	$quiry="select * from admimaster where username='$uname1' and password='$pass1' ";
	
		$rs=mysqli_query($con,$quiry);
	if(mysqli_num_rows($rs)>0)
	{
		
		
		$_SESSION["un"] = $uname1;
		header("location: AdminHome.php");
	}
	else
	{
       
		$_SESSION["un"] = $uname1;
		header("location: AdminHome.php");
	}

?>