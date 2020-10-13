<?PHP
session_start();
extract ($_POST);
include "header.php";
require_once("config.php");
  $Nheadi=$_SESSION["Nheading"];
  $news_id = $_GET['id1'];
  $query="SELECT * FROM news where id='$news_id'";
  $result=mysqli_query($con,$query);
  if(mysqli_num_rows($result)>0)  
  { 
  $row = mysqli_fetch_array($result);
  $News=$row ["newsDescrition"];
  $_heading=$row ["heading"];
  }
  echo  "&nbsp&nbsp";
  echo "</br>";
?>
<html>
<head>
<style>
.heading{
	color:rgb(120,12,120);
        }
.news{
	color:rgb(120,120,120);
     }
</style>
</head>
<body>
<br>
<h1 class="heading">*<?PHP echo "$_heading";?></h1>
<h3 class="news">&nbsp;&nbsp;&nbsp;&nbsp;<?PHP echo "$News";?></h3>

</body>
</html>