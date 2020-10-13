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
