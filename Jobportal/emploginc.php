<?php
session_start();
?>
<?php
extract($_POST);
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("jobportal",$cn)  or die("Could connect to Database");

	$rs=mysql_query("select * from employer where username='$un1' and password='$ps1'");
	/*$a=mysql_num_rows($rs);
	echo $a;*/
	
	
	if(mysql_num_rows($rs)<1)
	{
		//echo" The Username or Password is Incorrect";
		require_once "homee.php";
		
	}
	else
	{
		$_SESSION["un"] = $un1;
		header("location: employerhome.php");
	}
?>