<?php
require_once("config.php");
extract($_POST);
$query =mysqli_query($con,"SELECT * FROM crop WHERE T_code ='$tal' && Crop_name='$Cropname' " );
while($row=mysqli_fetch_array($query))  
{
 echo ("The Rate of <b>$Cropname</b> in <b>$tal</b> is : Rs.");
 echo $row["Crop_rate"] ;
 echo ("/Kg");
}
?>
