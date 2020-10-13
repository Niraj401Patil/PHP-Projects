<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
 <body>
  <form name="search" action="search.php" method="post">
  <input type="text" name="search2">
  <input type="text" name="search1">
	  <button>search1</button>
</form>
</body>

<?php
extract($_POST);
$conn=mysqli_connect("localhost","root","","jobportal") or die("Could not Connect My Sql");
//mysqli_select_db("jobportal",$cn)  or die("Could connect to //Database");
$get=$_POST['search2'];
$set=$_POST['search1'];
if($get || $set)
{
	$show= "select * from jobdetail where skill='$get' or
	type ='$set' " ;
    $result=mysqli_query($conn,$show);
   while($rows=mysqli_fetch_array($result))
   {
	   echo $rows['skill'];
	   echo("<br>");
	      echo $rows['company'];
	      echo("<br>");
	      echo $rows['type'];
	   		echo("<br>");
	      echo $rows['experience'];
   }
}
else{
	echo("not found");
	
}
?>
</html>