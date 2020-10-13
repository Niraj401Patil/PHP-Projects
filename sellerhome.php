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
		background:rgba(168,15,217,1.00);
		box-shadow: 1px 1px green;
		box-sizing: border-box;
		border-radius: ;
		} .inImg{
		height: 100%;
		width: 98%;
		background:rgba(212,237,70,1.00);
		border-radius: 30px;
			
		}
      .imgsel{
		  border-radius: 50%;
	  }
    </style>
</head>
<body>


<body bgcolor="#8EF9AE">
  
        
	<?PHP include "Sheader.php";?>
    
       		     <?php	
			 if ($_SESSION["uns"]==null)
			 {
			     header("location:SellerLogin.php");
			 }
			 else
			 {
			 	///echo $_SESSION["un"]; 
			 }
			 $unm=$_SESSION["uns"];
			 
			?>
			
	   <?PHP include"config.php";
	   extract ($_POST);
	   $qur="select * from sellermaster where username='$unm'";
	   $rs=mysqli_query($con,$qur);
        if(mysqli_num_rows($rs)>0){
			$row=mysqli_fetch_array($rs);
			$usernm=$row['username'];

			$comp=$row['companyname'];
			$_SESSION["compn"]=$comp;
			
			$mail=$row['email'];
			$add=$row['address'];
		}

	   ?>
	   
    <br>
         <strong>Profile</strong>  
     
        <table class="table"style="width:100%; align: right">
            <tr>

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
	
			$qur="select * from sellermaster where username='$unm'";
             $rs=mysqli_query($con,$qur);
			 
	if(mysqli_num_rows($rs)>0)
	{
    $cmd1="update sellermaster set SPimg = '$fp' where username='$unm'";
	$rs1=mysqli_query($con,$cmd1);
	IF($rs1){
	/*echo '<div class="container" style="width: 420px">
  <div class="alert alert-success" width="200px">
    <strong>Upload Success!</strong> 
  </div></div>';*/
	echo "<script>
	
	location.href='sellerhome.php';
	</script>
	";
	}else{echo "error";}
}
}
?>
           <br> <form action="sellerhome.php" method="post" enctype="multipart/form-data" name="imgf" onSubmit ="return Fval()" >
              <input name="img" accept="image/JPEG" type="file" id="Img1"><br>
              <input type="submit" class="btn-success" name="Img" value="Upload" />
              </form>
               <br>
               <a href="sellerchangepassword.php" class="style26"><em>change password</em></a> 
                </td>
                              <td class="style24">
              <div class="outImg">
               
              <center>
           
              <div class="inImg"> 
              <center>
              <br>
               <?PHP 
                $qur1="select * from sellermaster where username='$unm'";
             $rs1=mysqli_query($con,$qur1);
			 
		      if(mysqli_num_rows($rs1)>0)
	            {
					$row=mysqli_fetch_array($rs1);
					$checki=$row['SPimg'];
				}
			       if($checki)
				   {		
                   echo '<img  class="imgsel" style="height: 250px; width: 260px"
				   src="data:image/jpeg;base64,'
	              .base64_encode($row['SPimg']).'"/>';
				   }
                        else{
				echo '<img srcset="userlogo2.png" class="imgsel" style="height:
					   250px; width: 260px">';
							
						}
				  
				  
				 
				  
				  
				  
             ?>   </center>
             <br>
			</div>
               </center>
               
               </div>
            
                </td>
       
                <td class="style25">                </td>
            </tr>
            <tr>
                <td class="style31">
                    Username                </td>
                <td class="style26"><?php echo $_SESSION["uns"];;  ?></td>
                <td>&nbsp;              </td>
            </tr>
            <tr>
                <td class="style31">
                    Email</td>
                <td class="style26"><?php echo $mail; ?>        </td>
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
                    Company</td>
                <td class="style26">  <?PHP echo $comp; ?>          </td>
                <td>&nbsp;              </td>
            </tr>
</table>
   
</body>

