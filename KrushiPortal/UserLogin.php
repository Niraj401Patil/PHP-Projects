	<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>

	.div1{
	  height:350px;
	  width:400px;
	  align:left;
	  //background-color:#B2ACE4;
	  box-shadow:  1px 1px 5px 2px green;
	}
	
	input[type=text],[type=password]{
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 0px;
    border-radius: 5px;
    box-sizing: border-box;
	background-color: rgba();
	border-bottom:rgba(0,120,0,1.00) solid;
	
     }
   
	input[type=text]:hover,[type=password]:hover {
	box-shadow: 1px 1px 1px 1px black;
    }
	
    input[type=button]:hover{
    box-shadow: 1px 1px 1px 1px gold;
	background-color: beige;
    }
		
		</style>
		<script>
		 function validlog(){
				 
				var x=document.form2.uname1.value;
				var y=document.form2.pass1.value;
				     if (x===""){

	                 document.getElementById("uerror").innerHTML="<font color='red'>Enter Username</font>";
	                
					 return false;  			
					 }			
				     if (y===""){

	                 document.getElementById("uerrorp").innerHTML="<font color='red'>Enter Password</font>";
	                
					 return false;  			
					 }
					 
					return true;
			  }
			  
		      function textv(){
				 
				var x=document.form2.uname1.value;
				var y=document.form2.pass1.value;
				     if (x.length !=0){

	                 document.getElementById("uerror").innerHTML="<font color='green'>Ok!</font>"; 			
					 }	
 					 else if (x.length ==0){

	                 document.getElementById("uerror").innerHTML="<font color='red'>Enter Username</font>";
	   			
					 }
				     if (y.length !=0){

	                 document.getElementById("uerrorp").innerHTML="<font color='green'>Ok!</font>";
	                
					 return false;  			
					 }
					 
					return true;
			  }</script>
</head>

<body>
<?PHP include("header.php") ?>
<br>
   <center>
    <div class="div1"><br><br><center>

<?php
extract($_POST);
include "config.php";
if(isset($_POST['logu'])){
	$qur="select * from usermaster where username='$uname1' and password='$pass1'";
	$rs=mysqli_query($con,$qur);
	
	if(mysqli_num_rows($rs)<1)
	{
		//header("location: errorlogin.php");
		echo "<font color='red'>Username and Password not match</font>";
	}
	else
	{
		$_SESSION["un"] = $uname1;
		//header("location: userhome.php");	
		echo	"<script>
		document.location.href = 'Userhome.php';
		</script>
		";
	}
}
?>

       <form name="form2" method="post" action="UserLogin.php" onsubmit="return validlog()">  
       <span style="font-size: x-large; color: rgba(30,83,17,1);"> Farmer Login</span>
       <input type="text" name="uname1" id="name" placeholder="Username"
	   onkeypress="textv()" ><br><span id="uerror" ></span><br>
	   <input type="password" name="pass1" id="pass1" placeholder="Password"
	   onkeypress="textv()"><br>
	   <span id="uerrorp" ></span>
	    <br>
	   <input type="submit" name="logu" class="btn-success" value="Login">
		      &nbsp;&nbsp;&nbsp; <a href="SignupPage.php">Create New Account</a>
		      <br><br>
	      <a href="forgotpassword.php">Forgot Password ? </a></form>
	   </center>  
	   </div>
	   <br>
	   <?PHP  include("footer.php")?>
	   </center>
</body>
</html>