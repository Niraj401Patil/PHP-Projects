<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>
    <style type="text/css">

    </style>
	
	</script>
<script language="javascript">
function check()
{
 if(document.form1.producttype.value==="producttype")
  {
    alert("Plese Enter Product Type");
	document.form1.producttype.focus();
	return false;
  }
 if(document.form1.companyname.value==="")
  {
    alert("Plese Enter Your Company Name");
	document.form1.companyname.focus();
	return false;
  }
   if(document.form1.productname.value==="")
  {
    alert("Plese Enter Your Product Name");
	document.form1.productname.focus();
	return false;
  }
   if(document.form1.detail.value==="")
  {
    alert("Plese fill Product Detail");
	document.form1.detail.focus();
	return false;
  }
   pLen=document.form1.price.value;

  if(pLen.length != 6)
  {
  	alert(" Enter Price Of Product ");
	document.form1.price.focus();
	return false;
  }
  return true;
}
  </script>
</head>
<body><?PHP include "Sheader.php";?>
<form action="productaddcode.php" method="post" enctype="multipart/form-data" name="form1" onSubmit="return check();">
    
          <?php
		   $unm=$_SESSION["uns"];
		   $compname=$_SESSION["compn"];
		
		   
extract($_POST);
require_once("config.php");
$query = "SELECT * FROM  purchaseorder where companyname='$compname'";
$result = mysqli_query($con,$query) or trigger_error("SQL",E_USER_ERROR);
echo "<body background=four.jpg>";
echo "<center><font color=blue><u><i><h3>Order Request</h3></i></u></font></center>";
echo "<center>";

echo "<table bgcolor=pink  border='1' class='table table-hover'>";

echo "<tr><th>username.</th><th>email.</th><th>adharno.</th><th>mono.</th><th>address.</th><th>pincode.</th><th>producttype.
</th><th>companyname.</th><th>productname.</th><th>quantity</th><th>DateTime</th>";

echo "</tr>";
while($row = mysqli_fetch_array($result))
{
	
echo "<tr><td>";
	echo $row['username'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['adharno'];
	echo "</td><td>";
	echo $row['mono'];
	echo "</td><td>";
		echo $row['address'];

	echo "</td><td>";
	echo $row['pincode'];
	
	echo "</td><td>";
	echo $row['producttype'];

	echo "</td><td>";
	echo $row['companyname'];
	
	echo "</td><td>";
	echo $row['productname'];
	
	echo "</td><td>";
	echo $row['quantity'];	
	
	echo "</td><td>";
	echo $row['D_ate'];	
	
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
echo "</center>";
echo "</body>"

?>
  </p>
      <center>
         <p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span 
            class="style57">&nbsp;&nbsp;
      </span></p>
</center>
</form>
</body>
</html>
