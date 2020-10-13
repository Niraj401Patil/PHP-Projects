<?php
require_once("config.php");
if(!empty($_POST["state_id"])) 
{
$query =mysqli_query($con,"SELECT * FROM tahashil WHERE DistCode = '" . $_POST["state_id"] . "'");
?>
<option value="">Select Market</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["TalCode"]; ?>"><?php echo $row["TalName"]; ?></option>
<?php
}
}
?>
