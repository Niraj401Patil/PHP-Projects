<?php
session_start();
?>

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
   <body bgcolor="#8EF9AE">
   <?PHP include "Uheader.php";?>
        
		<?php 	
		include "config.php";
            $unm = $_SESSION["un"];
			$qur="select * from usermaster where username='$unm'";
             $rs=mysqli_query($con,$qur);
			 
	if(mysqli_num_rows($rs)>0)
	{
	  $row=mysqli_fetch_array($rs);
			
					$username = $unm;
					$email1=$row["email"];
					$_SESSION["emailll"] = $email1;
					
					$mob= $row['mono'];
					$_SESSION["mobl"] = $mob;
					
					$add= $row['address'];
					$_SESSION["address"] = $add;
					
					$adharno1=$row["adharno"];
					$_SESSION["addha"]=$adharno1;
					
                    $pincode1=$row["pincode"];
					$_SESSION["pin"]=$pincode1;
				    
	       }
		?> 

   <?PHP
	  $qurrr1="select * from purchaseorder where username='$unm'";
             $rsr1=mysqli_query($con,$qurrr1);			 
	           if(mysqli_num_rows($rsr1))
	            {
					
					
echo "<center><font color=green><u><i><h3>Order products</h3></i></u></font></center>";
echo "<center>";
echo "<table bgcolor=pink  border='1' class='table table-hover'>";
echo "<tr><th>producttype</th><th>companyname</th><th>productname</th><th>DateTime</th><th>quantity</th>";
echo "</tr>";
					
	           while($rowr=mysqli_fetch_array($rsr1))
	          	{
	
					$prt1=$rowr['producttype'];
					$comp1=$rowr['companyname'];
					$prn1=$rowr['productname'];
					$snm1=$rowr['D_ate'];
					$qnt1=$rowr['quantity'];
					
	        echo "<tr><td>";
	        echo   $prt1   ;
	        echo "</td>";
		    echo "<td>";
	        echo   $prn1   ;
	        echo "</td>";
	        echo "<td>";
	        echo   $comp1;
			echo "</td>";
			echo "<td>";
	        echo   $snm1;
			echo "</td>";
			echo "<td>";
	        echo   $qnt1;
	        echo "</td></tr>";
				 	

				}
				}

 ?>

</body>
</html>
