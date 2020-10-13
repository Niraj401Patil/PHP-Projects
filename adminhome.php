
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
		border-radius: 30px;
		} .inImg{
		height: 100%;
		width: 98%;
		background: green;
		border-radius: 30px;
			
		}
    </style>
   </head>
   <body bgcolor="#8EF9AE">
  <?PHP include("Aheader.php")?>
<br>
    
		     <?php	
			 
			 extract($_POST);
		     require_once("config.php");
			 if ($_SESSION["unm"]==null)
			 {
			     header("location:home.php");
			 }
			 else
			 {
			 	$unm=$_SESSION["un"]; 
			 	//echo $unm;
			 }
                $quiry="select * from adminmaster where Ausername='$unm'";
		       $rs=mysqli_query($con,$quiry);
		
				if(mysqli_num_rows($rs)<1)
				{
					//		echo "No data Found";
				}
				else
				{
					$row = mysqli_fetch_array($rs);
					$username = $unm;
					$email= $row["Aemail"];
					$mob= $row["Amono"];
					$Aaddress= $row["Aaddress"];
				}    
			?>

  
    <br>
         <strong>Profile</strong>  
        <table class="table"style="width:50%;">
                
                
             <tr>
                <td class="style25">                </td>
            </tr>
            <tr>
                <td class="style31">
                    Username                </td>
                <td class="style26"><?php echo $username;  ?></td>
                <td>&nbsp;              </td>
            </tr>
            <tr>
                <td class="style31">
                    Email</td>
                <td class="style26"><?php echo $email; ?>        </td>
                <td>&nbsp;              </td>
            </tr>
            <tr>
                <td class="style31">
                    Address</td>
                <td class="style26"><?PHP echo $Aaddress; ?></td>
                <td>&nbsp;              </td>
            </tr>
            <tr>
                <td class="style31">
                    Mobile</td>
                <td class="style26">  <?PHP echo $mob; ?>          </td>
                <td>&nbsp;              </td>
            </tr>
</table>
    
</body>
</html>
