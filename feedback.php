<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
input[type=text]:hover,[type=password]:hover,textarea:hover {
	box-shadow: 1px 1px 1px  green;
	background-color:rgba(111,166,38,1.00);
    }
	input[type=text],textarea {
	
		height: 30px;
		width: 100%;
		border-radius: 5px;
		
		background-color: beige;
    }
	.style47{
           color: darkgreen;
		   font-weight: 300;
		font-size: 20px;
	}
	</style>
	
</head>

<body>
<?PHP
	include("header.php");?>
 <h2> Feedback </h2>
  <?php
	
extract($_POST);	
if(isset($fb))
{
require_once("config.php");
$dt=date("Y-m-d H:i:s");
$cmd="insert into feedback(name,email,address,message,D_ate)values('$fname','$femail','$faddress','$fmessage','$dt')";
$stor=mysqli_query($con,$cmd)or die("query not work");
	if($stor)
	{
		echo "<h3>Your feddback send successfully thank you ! </h3>";
	}
	else{
		echo "not";
	}

}
?>
		  
 </p>
   <form name="feddback" method="POST" action="feedback.php">       
 <table id"" border="0" width="50%">

<tr>
  <td width="19%" class="style47">&nbsp;</td>
<td width="19%" class="style47">name:</td>
<td width="81%">
<input name="fname" type="text" id="lid" maxlength="70" required /></td>
</tr>
<tr>
  <td class="style47">&nbsp;</td>
<td class="style47">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
  <td class="style47">&nbsp;</td>
  <td class="style47">Email Id:</td>
  <td><input name="femail" type="text" id="email" maxlength="50" required
         /></td>
</tr>
<tr>
  <td class="style47">&nbsp;</td>
<td class="style47">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
  <td class="style47">&nbsp;</td>
  <td class="style47">Address:</td>
  <td class="style51"><input name="faddress" type="text" id="name0" maxlength="70" required
        /></td>
</tr>
<tr>
  <td class="style47">&nbsp;</td>
<td class="style47">&nbsp;</td>
<td class="style51">&nbsp;</td>
</tr>
<tr>
  <td class="style1">&nbsp;</td>
  <td height="67" class="style1"><span class="style47">Message</span></td>
  <td><span class="style51">
    <textarea name="fmessage" id="address" required></textarea>
  </span></td>
</tr>
<tr>
  <td class="style1">&nbsp;</td>
<td height="67" class="style1">&nbsp;</td>
<td> <b>&nbsp;<input type="submit" value="submit"  name="fb"
        style="font-weight: 700; color: #FFFFFF; height: 31px; background-color: #006600">&nbsp; 
    <input type="reset" value="cancel" 
        style="font-weight: 700; color: #FFFFFF; height: 30px; background-color: #FF0000"></b></td>
</tr>
</table>
  <br><br><br><br><br>	  
</form>
<?PHP include("footer.php") ?>
</body>
</html>