<?php
session_start();
?>
<?php
extract($_POST);
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("jobportal",$cn)  or die("Could connect to Database");

	$rs=mysql_query("select * from jobseeker where username='$uname1' and password='$pass1'");
	/*$a=mysql_num_rows($rs);
	echo $a;*/
	if(mysql_num_rows($rs)<1)
	{
		header("location: logine.php");
	}
	else
	{
		$_SESSION["un"] = $uname1;
		header("location: jobseekerhome.php");
	}

?>