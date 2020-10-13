
<?php
extract($_POST);
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("jobportal",$cn)  or die("Could connect to Database");

$rst=mysql_query("select * from employer where  email='$email1' and mono='$mono1' and username='$ram'");
//$rst=mysql_query("select * from usermaster where username='$ram' and adharno='$adharno1' ");

if(mysql_num_rows($rst)>0)
{
	echo "<body background=img/eight.jpg>";
	
	echo "<center><br/><img  src='img/screen/logo1.jpg' height='200' width='200'></img><h1><font  color=red size=8>Login Id Found </br> Your Password is= ";
	
	
	echo "<u>";
	$row = mysql_fetch_array($rst);
	echo  $row['password'];
	echo "</u>";
	
	//echo "<input type="text" name=""rr"/>";
	echo "</body></center> </font>";
	

}
else
{
	echo "<body background=img/eight.jpg><center><br/><br/><img src = 'img/screen/logo1.jpg' height='200' width='200'></img><font face=pristina color=blue size=8><br><br>Sorry No data Found !!! </font>";
	echo "</center></body>";

	
}

?>