<?php
session_start();
?>
<?PHP  include("aheader.php"); ?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>



      <input id="Button2" type="button" value="Logout" onclick="document.location.href = 'login.php';"  action="login.php"/>
      <span class="style38">Welcome</span>
<?php	
			 extract($_POST);
				$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
				mysql_select_db("myproject",$cn)  or die("Could connect to Database");

			 if ($_SESSION["un"]==null)
			 {
			    // header("location:home.php");
			 }
			 else
			 {
			 	$unm=$_SESSION["un"]; 
			 	echo $unm;
			 }
			 
			 	$rs=mysql_query("select * from adminmaster where Ausername='$unm'");

				if(mysql_num_rows($rs)<1)
				{
					//		echo "No data Found";
				}
				else
				{
					$row = mysql_fetch_array($rs);
					$username = $unm;
					$email= $row["Aemail"];
					$mob= $row["Amono"];
					$Aaddress= $row["Aaddress"];
				}    
			?>
</body >
</html>
<?PHP  //include("footer.php"); ?>