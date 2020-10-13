<html>
<head>
 <style type="text/css">
        .style1
        {
            color: #FFFFFF;
        }
		  .style6
        {
            font-size: large;
            font-weight: bold;
            color: blue;
            width: 230px;
            height: 50px;
			}
			
</style>
</head>
<body>
<?php include"header.php"?>
<?php
extract($_POST);
include "config.php";
$qur="select * from usermaster where  adharno='$adharno1' and mono='$mono1' and username=
'$ram'";
$rst=mysqli_query($con,$qur);
//$rst=mysql_query("select * from usermaster where username='$ram' and adharno='$adharno1' ");

if(mysqli_num_rows($rst)>0)
{
	echo "<body background=img/eight.jpg>";
	
	echo "<center><br/><img  src='img/screen/logo1.jpg' height='200' width='200'></img><h1><font  color=red size=8>Login Id Found </br> Your Password is= ";
	
	
	echo "<u>";
	$row = mysqli_fetch_array($rst);
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<center>
<input type="button" class="style6"
 value="Back" action="forgotpassword.php"  onclick="document.location.href = 'forgotpassword.php';">
 <input type="button" class="style6"
 value="LogIn Now" action="UserLogin.php"  onclick="document.location.href = 'UserLogin.php';">
</center>
<?php include"footer.php"?>
</body>
</html>

