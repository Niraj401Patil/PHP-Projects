<?php
session_start();
extract($_POST);
require_once("config.php");
?>
<html>
<body>
<Center>
</br></br></br></br></br></br></br></br></br><font color="#330066" size="+6" face="Times New Roman, Times, serif" ><?php

if(isset($_POST["b1"])) 
{
	$rs="select * from adminmaster where Ausername='$name' and Apassword='$Apass'";
	$res=mysqli_query($con,$rs);

	if(mysqli_num_rows($res)>0)
	
	{ 
	    $_SESSION["unm"] = $name;
		header("location: adminhome.php");
		//echo "$name";
	}
	else
	{
		//echo "$Apass";
	
		header("location: home.php");
		
	}
	
   // exit();
} 
?></font>
</center>
</body>
</html>