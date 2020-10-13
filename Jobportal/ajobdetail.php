
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
$query = "SELECT title,skill,discription,sallery,location,qualification,company,type,experience
FROM jobdetail";
$result = mysql_query($query) or trigger_error("SQL",E_USER_ERROR);
echo "<body background=four.jpg>";
echo "<font color=darkblue><u><i><h4>Jobdetail Report</h4></i></u></font>";
//echo "<center>";

//echo "<br/>";

echo "<table  border='1'>";
echo ('<font color=red size="large">');
echo "<tr><th>Title</th><th>Skill</th><th>Discription</th> <th>Sallery</th> <th>Location</th> <th>Qualification</th> <th>Company</th> <th>Type</th> <th>Experience</th> ";
echo "</tr>";
while($row = mysql_fetch_array($result))
{
	
	echo "<tr><td>";
	echo $row['title'];
	echo "</td><td>";
	echo $row['skill'];
	echo "</td><td>";
	echo $row['discription'];
	echo "</td>";
	
	echo "<td>";
	echo $row['sallery'];
	echo "</td>";
	
		echo "<td>";
	echo $row['location'];
	echo "</td>";
	
		echo "<td>";
	echo $row['qualification'];
	echo "</td>";
	
		echo "<td>";
	echo $row['company'];
	echo "</td>";
	
		echo "<td>";
	echo $row['type'];
	echo "</td>";
	
		echo "<td>";
	echo $row['experience'];
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