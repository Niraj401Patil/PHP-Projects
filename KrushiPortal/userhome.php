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
  
    <br>
         <strong>Profile</strong>  
        <a href="changepassword.php" class="style26"></a>
        <table class="table"style="width:50%;">
            <tr>
              <td class="style24">
              <div class="outImg">
              <center>
        
              <div class="inImg"> 
              <center>
              <br>
               <?PHP 
                $qur1="select * from usermaster where username='$unm'";
             $rs1=mysqli_query($con,$qur1);
			 
	           if(mysqli_num_rows($rs1)>0)
	            {
					$row=mysqli_fetch_array($rs1);
					$checki=$row['UPimg'];
				}
			       if($checki){		
                   echo '<img  class="imgcl" style="height: 250px; width: 260px"
				   src="data:image/jpeg;base64,'
	              .base64_encode($row['UPimg']).'"/>';
				 //echo '<img src="userlogo2.png" width="250px" height="260px">';
				// echo '<img src="userlogo2.png;base64,'
	              //.base64_encode($row['UPimg']).'"/>';srcset="userlogo2.png"
				   }
				   else{
					   echo '<img srcset="userlogo2.png" class="imgcl" style="height: 250px; width: 260px">';
				   
					   
				   }
             ?>   </center>
             
			</div>
               </center>
               </div>
               <br> <form action="userhome.php" method="post" enctype="multipart/form-data" name="imgf" onSubmit ="return Fval()" >
              <input name="img" accept="image/JPEG" type="file" id="Img1"><br>
              <input type="submit" class="btn-success" name="Img" value="Upload" />
              </form>
               <br>
               <a href="changepassword.php" class="style26"><em>change password</em></a> 
                </td>
                <td class="style23">
                <script>
					//alert("Select image");
					function Fval(){
					var x=document.imgf.Img1.value;
					if (x==""){
						alert("Select image");
						return false;
					}
				      return true;
					}
					</script>
                <br>

                <?php
extract($_POST);
if (isset($_POST['Img']))
{
require_once "config.php";
		
	$fp=addslashes(file_get_contents($_FILES['img']['tmp_name']));
	
			$qur="select * from usermaster where username='$unm'";
             $rs=mysqli_query($con,$qur);
			 
	if(mysqli_num_rows($rs)>0)
	{
    $cmd1="update usermaster set UPimg = '$fp' where username='$unm'";
	$rs1=mysqli_query($con,$cmd1);
	IF($rs1){
	echo '<div class="container" style="width: 420px">
  <div class="alert alert-success" width="200px">
    <strong>Upload Success!</strong> 
  </div></div>';
	echo "<script>
	
	location.href='userhome.php';
	</script>
	";
	}else{echo "error";}
}
}
?>
                
                
                </td>
       
                <td class="style25">                </td>
            </tr>
            <tr>
                <td class="style31">
                    Username                </td>
                <td class="style26"><?php echo $_SESSION["un"];;  ?></td>
                <td>&nbsp;              </td>
            </tr>
            <tr>
                <td class="style31">
                    Email</td>
                <td class="style26"><?php echo $email1; ?>        </td>
                <td>&nbsp;              </td>
            </tr>
            <tr>
                <td class="style31">
                    Address</td>
                <td class="style26"><?PHP echo $add; ?></td>
                <td>&nbsp;              </td>
            </tr>
            <tr>
                <td class="style31">
                    Mobile</td>
                <td class="style26">  <?PHP echo $mob; ?>          </td>
                <td>&nbsp;              </td>
            </tr>
</table>
    </p>
    <p class="style27">
   <a href="changepassword.php" class="style26"></a></p>

</body>
</html>
