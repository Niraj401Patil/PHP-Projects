
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
$query = "SELECT username,email,mobile,gender,BirthDate,location,experience,State,cv
FROM jobseeker";
$result = mysql_query($query) or trigger_error("SQL",E_USER_ERROR);
echo "<body background=four.jpg>";
echo "<font color=darkblue><u><i><h4>Jobseeker Report</h4></i></u></font>";
//echo "<center>";

//echo "<br/>";

echo "<table  border='1'>";
echo ('<font color=red size="large">');
echo "<tr><th>Username</th><th>email.</th><th>mobile</th> <th>gender</th> <th>BirthDate</th> <th>location</th> <th>experience</th> <th>State</th> <th>cv</th> ";
echo "</tr>";
while($row = mysql_fetch_array($result))
{
	
	echo "<tr><td>";
	echo $row['username'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['mobile'];
	echo "</td>";
	
	echo "<td>";
	echo $row['gender'];
	echo "</td>";
	
		echo "<td>";
	echo $row['BirthDate'];
	echo "</td>";
	
		echo "<td>";
	echo $row['location'];
	echo "</td>";
	
		echo "<td>";
	echo $row['experience'];
	echo "</td>";
	
		echo "<td>";
	echo $row['State'];
	echo "</td>";
	
		echo "<td>";
	echo $row['cv'];
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