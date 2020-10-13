
<?PHP
include("aheader.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<font   size="+2">
<?php
extract($_POST);
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("jobportal",$cn)  or die("Could connect to Database");
$query = "SELECT name,email,address,message FROM feedback";
$result = mysql_query($query) or trigger_error("SQL",E_USER_ERROR);
echo "<body background=four.jpg>";
echo "<font color=darkblue><u><i><h4>Feedback Report</h4></i></u></font>";
//echo "<center>";

//echo "<br/>";

echo "<table  border='1'>";
echo ('<font color=red size="large">');
echo "<tr><th>name.</th><th>email.</th><th>address</th><th>message</th>";
echo "</tr>";
while($row = mysql_fetch_array($result))
{
	
	echo "<tr><td>";
	echo $row['name'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['address'];
	echo "</td><td>";
	echo $row['message'];
	echo "</td>";
	echo "</tr>";
}
echo "</font>";
echo "</table>";
//echo "</center>";
echo "</body>"

?>
</font>";
  </body>
</html>
   