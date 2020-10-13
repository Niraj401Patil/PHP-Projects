
<?php
//session_start();
?>
<html>
<body bgcolor="#D2DFE3">
</body>
</html>
  <?php	
  ERROR_REPORTING(E_ALL^E_NOTICE);
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
					//$email= $row["Aemail"];
					//$mob= $row["Amono"];
					//$Aaddress= $row["Aaddress"];
				}    
			
			
			echo "$unm";ERROR_REPORTING(E_ALL^E_NOTICE);
include("empheader.php");


?>