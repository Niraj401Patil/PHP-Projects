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
	
	input[type=text],input[type=password],select{
			width: 200px;
			padding: 10px 10px;
			border: 2px;
			background-color: rgb(222,222,222);
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
<?PHP include "Uheader.php";?>
<form name="form1" action="changepassword.php" method="post" onSubmit="return check();">
    <p class="style10">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <p class="style10">         &nbsp;&nbsp;<span class="style11">&nbsp;</span></p>
    <p align="center">
  <div align="center" class="passd" >
    <p><span class="style10"> <span class="style14">Change your Password&nbsp;</span></span>
	</p>
	<?php
extract($_POST);

include "config.php";
if(isset($_POST['submit1'])){
$qur="select * from usermaster where password='$cpass'";
$rs=mysqli_query($con,$qur);
if(mysqli_num_rows($rs)>0)
{
	$cc="update usermaster set password='$npass' where  username='$uname' and password='$cpass'";
	$rs1=mysqli_query($con,$cc)or die("Could Not Perform the Query");
	echo "<font color=green><i>Your Password changed successfully !!!</i></font>";
}
else
   {
    echo "<font color=red><i>Sorry! The Username and Current Password Does not match !!!</i></font>";
   }

}
?>
    <table width="461" border="0" bordercolor="#000000" >
      <tr>
        <td class="style52"><span class="style53">Username</span></td>
        <td class="style52"><span class="style47">
          <input type="text" name="uname"/><br>
        &nbsp;</span></td>
      </tr>
      <tr>
        <td width="243" class="style52"><span class="style53">current password</span></td>
        <td width="206" class="style52"><span class="style1">
          <input name="cpass" type="password" /><br>
        &nbsp;
        </span></td>
      </tr>
      <tr>
        <td class="style52"><span class="style54">new password</span></td>
        <td class="style52"><span class="style2">
          <input  name="npass"type="password" /><br>
        &nbsp;
        </span></td>
      </tr>
      <tr>
        <td class="style52"><span class="style55">confirm new password</span></td>
        <td class="style52"><span class="style20">
          <input  type="password" name="confirm" /><br>
        &nbsp;
        </span></td>
      </tr>
    </table>
    <p><a href="strongpassword.htm" class="style56">How to create a strong password</a></p>
    <p>
      <span class="style27">
      <input type="button" value="Back" onclick="document.location.href = 'userhome.php';" action="userhome.php"/>
      <input name="submit1" class="btn-success" type="submit" id="Submit2" value="change password" /> 
      
      <input name="reset" class="btn-danger" type="reset" id="Reset2" value="cancel" />
    </span> </p>
  </div>
    <p>
     
    </p>
    <p>

    </p>
    <p>&nbsp;
  </p>
    <p>&nbsp;
  </p>
</form>

</body>
</html>
