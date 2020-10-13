<?php
session_start();
?>
<?php
extract($_POST);
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("jobportal",$cn)  or die("Could connect to Database");

	$rs=mysql_query("select * from adminmaster where username='$uname' and password='$pass'");
	/*$a=mysql_num_rows($rs);
	echo $a;*/
	if(mysql_num_rows($rs)<1)
	{
		header("location: home.php");
	}
	else
	{
		$_SESSION["un"] = $uname;
		header("location: ahome.php");
	}

?>