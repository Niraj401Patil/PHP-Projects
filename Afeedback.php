
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<div width="80px">
<?php
 include("Aheader.php");
extract($_POST);
require_once"config.php";
$query = "SELECT name,email,address,message,D_ate FROM feedback";
$result = mysqli_query($con,$query) or trigger_error("SQL",E_USER_ERROR);
echo "<body background=four.jpg>";
echo "<center><font color=green><i><h2>Feedback Report</h2></i></font></center>";
echo "<center>";

echo "<br/>";

echo "<table width='80%' class='table table-hover' bgcolor=pink  border='1'>";
echo "<tr><th scope='col'>name.</th><th scope='col'>
email.</th><th scope='col'>address</th><th scope='col'>message</th>
<th scope='col'>Date</th><th scope='col'>Delete</th>";
echo "</tr>";
echo'<form name="feed" action="Afeedback.php" method="post">';
while($row = mysqli_fetch_array($result))
{
	echo "<tr><td>";
	echo $row['name'];
	echo "</td><td>";
	echo "<a href=\"Afeedback.php?id1=".$row['email']."\" >";
	echo $row['email'];
	echo "</a>";
	echo "</td><td>";
	echo $row['address'];
	echo "</td><td>";
	echo $row['message'];
	echo "</td>";
	echo "<td>";
	echo  $row['D_ate'];
   // echo $date = date('j F, Y');	
	//$dt=date("Y-m-d H:i:s");
	//echo date_format("Y-m-d H:i:s",$row[4]);
	echo "</td>";
	echo "<td>";
	echo "<a href=\"Afeedback.php?nm=".$row['name']."\" >";

	echo "delete";
	echo "</a>";

	echo "</td>";
	
	echo "</tr>";
}
echo "</table>";
echo "</center>";

echo "</form>";
?>

<font color="white">
<?PHP
 $id = $_GET['nm'];
if ($id)
{

 echo $id;
 require_once("config.php");
      extract($_POST);
      $query = "SELECT * FROM feedback where name='$id'" ;
      $result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
     $cc="DELETE FROM `feedback` WHERE name ='$id'";
	 $rs2=mysqli_query($con,$cc)or die("Could Not Perform the Query");
		echo "<font color=blue><i>deleted successfully !!!</i></font>";
		 echo '<script> 
  location.href="Afeedback.php";
  </script>';
}}

?>
</font>
</div>
</body>
</html>

   