<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>
    <style type="text/css">
        
	input[type=text],input[type=password],select{
			width: 200px;
			padding: 10px 10px;
			border: 2px;
			background-color: rgb(122,222,122);
			color: blue;
			font-size: 20px;
			border-radius: 5px;
		}
	
     }
   
	input[type=text]:hover,[type=password]:hover {
	box-shadow: 1px 1px 1px 1px black;
    }
	
    input[type=button]:hover{
    box-shadow: 1px 1px 1px 1px gold;
	background-color: beige;
    }
    </style>
	<script language="javascript">
function check()
{
if(document.form1.uname.value==="")
  {
    alert("Plese Enter your Username");
	document.form1.uname.focus();
	return false;
  }
 if(document.form1.cpass.value==="")
  {
    alert("Plese Enter your current Password");
	document.form1.cpass.focus();
	return false;
  }
 if(document.form1.npass.value==="")
  {
    alert("Plese Enter Your new Password");
	document.form1.npass.focus();
	return false;
  }
   pLen=document.form1.npass.value;

  if(pLen.length < 8)
  {
  	alert(" Your password must be at least 8 characters");
	document.form1.npass.focus();
	return false;
  }
  if(document.form1.cpass.value==="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.confirm.value!=document.form1.npass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.confirm.focus();
	return false;
  }
  return true;
}
</script>
</head>
<body bgcolor="green">
<?PHP include "Sheader.php";?>

<form name="form1" action="sellerchangepassword.php" method="post" onSubmit="return check();">
<div >

    <p class="style10">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p class="style10">         &nbsp;&nbsp;<span class="style11">&nbsp;</span></p>
    <p align="center">
    
  
  
  <div align="center">
    <p><span class="style10"> <span class="style14">Change your Password&nbsp;</span></span></p>
    <p> <?php
extract($_POST);
include "config.php";
if(isset($_POST['submit1'])){
$qur="select * from sellermaster where password='$cpass'";
$rs=mysqli_query($con,$qur);
if(mysqli_num_rows($rs)>0)
{
	$cc="update sellermaster set password='$npass' where  username='$uname' and password='$cpass'";
	$rs1=mysqli_query($con,$cc)or die("Could Not Perform the Query");
	echo "<font color=green><i>Your Password changed successfully !!!</i></font>";
}
else
{
	echo "<font color=red><i>Sorry! The Username and Current Password Does not match !!!</i></font>";
}
}

?>
&nbsp;</p>
    <table width="461" border="0" bordercolor="#000000" >
      <tr>
        <td class="style52"><span class="style53">Username</span></td>
        <td class="style52"><span class="style47">
          <input type="text" name="uname"/><br>&nbsp;</span></td>
      </tr>
      <tr>
        <td width="243" class="style52"><span class="style53">current password</span></td>
        <td width="206" class="style52"><span class="style1">
          <input  name="cpass" type="password" /><br>&nbsp;
        </span></td>
      </tr>
      <tr>
        <td class="style52"><span class="style54">new password</span></td>
        <td class="style52"><span class="style2">
          <input  name="npass"type="password" /><br>&nbsp;
        </span></td>
      </tr>
      <tr>
        <td class="style52"><span class="style55">confirm new password</span></td>
        <td class="style52"><span class="style20">
          <input  type="password" name="confirm" /><br>&nbsp;
        </span></td>
      </tr>
    </table>
    <p><a href="strongpassword.htm" class="style56">How to create a strong password</a></p>
    <p>
      <span class="style27">
      <input type="button" value="Back" onclick="document.location.href = 'sellerhome.php';" action="sellerhome.php"/>
      <input name="submit1" type="submit" id="Submit2" value="change password" /> 
      
      <input name="reset" type="reset" id="Reset2" value="cancel" />
    </span>                                             </p>
  </div>
    <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    <p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
    <p>&nbsp;
  </p>
    <p>&nbsp;
  </p>
</form>


</body>
</html>


