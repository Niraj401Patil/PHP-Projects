 <?php
session_start();
?>
<!DOCTYPE html >
<html >
<head>
    <title>Untitled Page</title>
<style type="text/css">

				.outImg{		
		height: 280px;
		width: 300px;
		background: gold;
		box-shadow: 1px 1px green;
		box-sizing: border-box;
		border-radius: ;
		} .inImg{
		height: 100%;
		width: 98%;
		background: green;
		border-radius: 30px;
			
		}
		.imgcl{
			border-radius: 50%;
		}
    </style>
</head>
<body bgcolor="#FFFF93">
<?PHP include "Uheader.php";?>
<br>
<?php	

$unm=$_SESSION["un"]; 
$email1 = $_SESSION["emailll"];
$mobile1=$_SESSION["mobl"] ; 
$addr=$_SESSION["address"];
$adharno1=$_SESSION["addha"];
$pincode1=$_SESSION["pin"];
 //echo $email1;
// echo $mobile1;
//echo $adharno1;
//echo $pincode1;

?>

 <?php
 error_reporting(E_ALL & ~E_NOTICE);
extract($_POST);
//$idp = $_GET['id1'];

	?>
<?php
      include "config.php";
	$sql="select * from productmaster";
	$res=mysqli_query($con,$sql);
	if(mysqli_query($con,$sql))
	{
	  while($row=mysqli_fetch_array($res))
		{
			$ptype=$row['producttype'];
			$cname=$row['companyname'];
		    $pname=$row['productname'];
			$pdetail=$row['detail'];
			$pprice=$row['price'];
			//$proid=$row['id'];
		
?>

<marqueee behavior="slide" direction=""><center>
  <table width="782">
    <tr>
      <td width="228" rowspan="11"><a href='buyproduct.php'>
	  <?php   echo '<img height="400" width="400" src="data:image/jpeg;base64,'
	  .base64_encode($row['productimage']).'"/>';?></a></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="39">&nbsp;</td>
      <td width="291" height="33" class="style33">Product Type </td>
      <td width="204" class="style32">: <?php  echo $ptype; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="32" class="style33">&nbsp;</td>
      <td class="style32">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="32" class="style33">Company</td>
      <td class="style32">: <?php  echo $cname; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="32" class="style33">&nbsp;</td>
      <td class="style32">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="32" class="style33">Product Name </td>
      <td class="style32">: <?php  echo $pname; ?> 
	  </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="30" class="style33">&nbsp;</td>
      <td class="style32">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="30" class="style33">Detail</td>
      <td class="style32">: <?php  echo $pdetail; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="23" class="style33">&nbsp;</td>
      <td class="style32">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="23" class="style33">Price</td>
      <td class="style32">: <?php  echo $pprice; ?> Rs. </td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td height="23" class="style33">Quantity</td>
      <td class="style32">: <input type="text" name="Quantity"/> </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td class="style38"><span class="style39">
	 <?php echo "<a href=\"usergallery.php?proid=".$row['id']."\" >";
	echo "OrderNow";
	echo "</a>";?>
		
	 </td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </br></br>
</center>
</marquee>


<?php		
		
		}
	}
?>
    
</body>
</html>

<?php
if(isset($_GET['proid'])){

include "config.php";
$proid=$_GET['proid'];
	$sql="select * from productmaster where id = '$proid'";// and productname='$pname' and companyname='$cname'";
	$res=mysqli_query($con,$sql);
	if(mysqli_query($con,$sql))
	{
	  if($row1=mysqli_fetch_array($res))
		{
			echo "<script>alert('hello');</script>";
			$ptypee=$row1['producttype'];
			$cnamee=$row1['companyname'];
		    $pnamee=$row1['productname'];
			$pdetaile=$row1['detail'];
			$ppricee=$row1['price'];
			date_default_timezone_set('Asia/Kolkata');
                  $currentTime = date( ' h:i A d-m-Y', time () );
				  
$cmd="insert into purchaseorder(username,email,adharno,mono,address,pincode,producttype,
companyname,productname,D_ate,quantity)values
('$unm','$email1','$adharno1','$mobile1','$addr','$pincode1',
'$ptypee','$cnamee','$pnamee','$currentTime','$Quantity')";
$stor=mysqli_query($con,$cmd)or die("query not work");
exit;
echo "<script>
alert('Order successfull added');
</script>
";
		}
	}
}
			/*
			//$unm11=$row['username'];
			$ptypee=$row['producttype'];
			$cnamee=$row['companyname'];
		    $pnamee=$row['productname'];
			$pdetaile=$row['detail'];
			$ppricee=$row['price'];
			
                  date_default_timezone_set('Asia/Kolkata');
                  $currentTime = date( ' h:i A d-m-Y', time () );
				  
$cmd="insert into purchaseorder(username,email,adharno,mono,address,pincode,producttype,
companyname,productname,D_ate,quantity)values
('$unm','$email1','$adharno1','$mobile1','$addr','$pincode1',
'$ptypee','$cnamee','$pnamee','$currentTime','$Quantity')";
$stor=mysqli_query($con,$cmd)or die("query not work");
echo "<script>
alert('Order successfull added');
</script>
";
echo "<br/><font  color=green size=6> ";
echo "<center><i>Order successfull added";
echo "</i>";
echo "</body></font></centunmer>";
	}
}
else{
	echo "<script>
alert('problem');
</script>
";
}
}
*/
?>
