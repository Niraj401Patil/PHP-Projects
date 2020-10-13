<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Untitled Document</title>
	<style>

	.div11{
	  height:350px;
	  width:400px;
	  align:left;
	  //background-color:#B2ACE4;
	  box-shadow:  1px 1px 5px 2px green;
	}
		.div2{
	  height:800px;
	  width:400px;
	  align:left;
	  //background-color:#B2ACE4;
	  //box-shadow:  1px 1px 5px 2px green;
	}
	
	.logintxt{
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 0px;
    border-radius: 1px;
    box-sizing: border-box;
	background-color: rgba();
	border-bottom:rgba(0,0,120,1.00) solid;
	
     }
	  input[type=text],input[type=password]{
	   
	   height:30px;
	   width:100%;
	   padding:8px 5px;
	   font-size:16px;
	   font-family:arial;
	   color:blue;   
	  }
	  
	.signup{
    width: 90%;
	height: 15px;
	color:rgba(229,229,229,1.00);
    padding: 20px 10px;
    margin: 8px 0;
    //display: inline-block;
   	   
	   height:40px;
	   width:100%;
	   padding:8px 5px;
	   font-size:16px;
	   font-family:arial;
	   color:blue;  
	
     }
		select{

	color: green;
	height: 30px;
   
    margin: 8px 0;
    //display: inline-block;
    border: 2px;
    border-radius: 2px;

		}
   
	input[type=text]:hover,[type=password]:hover {
	box-shadow: 1px 1px 1px 1px blue;
    }
	
    input[type=button]:hover{
    box-shadow: 1px 1px 1px 1px gold;
	background-color: beige;
    }
		.div11 {	  height:350px;
	  width:400px;
	  //align:left;
	  //background-color:#B2ACE4;
	  //box-shadow:  1px 1px 5px 2px green;
}
		.sdiv{
			box-shadow:  1px 1px 5px 2px green;
			height: 700px;
			width: 700px;
		}
    </style>

<script language="javascript">	
function check()
{
 if(document.form1.lid.value==="")
  {
    //alert("Plese Enter Username");
    document.getElementById("unn1").innerHTML="<font color='red'>Enter Username</font>";
	document.form1.lid.focus();
	return false;
  }
  if(document.form1.companyname.value==="")
  {
    //alert("Plese Enter companyname");
	document.getElementById("unn2").innerHTML="<font color='red'>Enter Company Name</font>";
	document.form1.companyname.focus();
	return false;
  }
 if(document.form1.pass.value==="")
  {
    //alert("Plese Enter Your Password");
	document.getElementById("unn3").innerHTML="<font color='red'>Paaword must be at least 8 Char</font>";
	document.form1.pass.focus();
	return false;
  }
   pLen=document.form1.pass.value;

  if(pLen.length < 8)
  {
  	//alert(" Your password must be at least 8 characters");
	document.form1.pass.focus();
	return false;
  }
  if(document.form1.cpass.value==="")
  {
    //alert("Re Enter Password");
 document.getElementById("unn4").innerHTML="<font color='red'>Re-Enter Password</font>";

	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
     document.getElementById("unn4").innerHTML="<font color='red'>Password Not match</font>";
	document.form1.cpass.focus();
	return false;
  }
 if(document.form1.email.value==="")
  {
    //alert("Plese Enter your Email Address");
   document.getElementById("unn5").innerHTML="<font color='red'>Please Enter your Email Address</font>";	
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			//alert("Please Enter valid Email");
		   document.getElementById("unn5").innerHTML="<font color='red'>Please Enter valid Email</font>";		
			document.form1.email.focus();
			return false;
		}
		  if(document.form1.mobn.value==="")
  {
    //alert("Please Enter Mobile No");
   document.getElementById("unn6").innerHTML="<font color='red'>Please Enter Mobile No</font>";	
	document.form1.mobn.focus();
	return false;
  }
  		  
  if(document.form1.address.value==="")
  {
    //alert("Plese Enter Address");
	   document.getElementById("unn7").innerHTML="<font color='red'>Please Enter Address</font>";	
	document.form1.address.focus();
	return false;
  }
 if(document.form1.city.value==="")
  {
    //alert("Plese Enter City Name");
   document.getElementById("unn8").innerHTML="<font color='red'> Enter City</font>";	
	document.form1.city.focus();
	return false;
  }

  if(document.form1.pincode.value==="")
  {
    //alert("Plese Enter pincode");
	   document.getElementById("unn9").innerHTML="<font color='red'>Please Enter PinCode</font>";	
	document.form1.pincode.focus();
	return false;
  }
   piLen=document.form1.pincode.value;

  if(piLen.length !=6)
  {
  	//alert(" Enter 6 digit Pincode");
   document.getElementById("unn9").innerHTML="<font color='red'> Enter 6 digit Pincode</font>";		
	document.form1.pincode.focus();
	return false;
  }
 if(document.form1.state.value==="state")
  {
    //alert("Plese Enter State");
   document.getElementById("unn10").innerHTML="<font color='red'>Please Select State</font>";		
	document.form1.state.focus();
	return false;
  }
if(document.form1.sq.value==="")
  {
    //alert("Plese Enter Security Question");
	   document.getElementById("unn11").innerHTML="<font color='red'>Please Select Security Question</font>";		
	document.form1.sq.focus();
	return false;
  }
 if(document.form1.answer.value==="")
  {
   // alert("Plese Enter Your Answer");
   document.getElementById("unn12").innerHTML="<font color='red'>Enter Your Answer</font>";		
	document.form1.answer.focus();
	return false;
  }
  return true;
}

		      function validlog(){
				 
				var x=document.form2.name11.value;
				var y=document.form2.Apass.value;
				     if (x===""){

	                 document.getElementById("uerror").innerHTML="<font color='red'>Enter Username</font>";
	                document.form2.name11.focus();
					 return false;  			
					 }			
				     if (y===""){

	                 document.getElementById("uerrorp").innerHTML="<font color='red'>Enter Password</font>";
	                 document.form2.Apass.focus();
					 return false;  			
					 }
					 
					return true;
			  }
			  
			  
			  
   
   function textv()
   {
      var name1=document.form2.name11.value;
	  var pass1=document.form2.Apass.value;
	  	//var x=document.form2.name11.value;
				//var y=document.form2.Apass.value;
	  //var status=false;
  if(name1.length<1)
	 {
	document.getElementById("uerror").innerHTML="<img src='wrong.png' height='10px'/><font color='red'>please enter the Name</font>";
      status=false;	 
	 } 
	 else
	 {
	    document.getElementById("uerror").innerHTML="<img src='corr1.png' height='10px'/>";
		status=true;
	 }
	  if(pass1.length<6)
	 {
	document.getElementById("uerrorp").innerHTML="<img src='wrong.png' height='10px'/> <font color='red'>password must be atleast 6 charecter </font>";
      status=false;	 
	 } 
	 else
	 {
	    document.getElementById("uerrorp").innerHTML="<img src='corr1.png' height='10px'/>";
		status=true;
	 }
         return true;
   }

			  
			  
			  
		      function trextv(){
				 
				var x=document.form2.name11.value;
				var y=document.form2.Apass.value;
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
			  }
		 </script>    
		 <style>
			 .sucDiv{
				align-content: center;
				 
			 }
	</style>
</head>

<body>
<?PHP include("header.php") ?>
<br>
  <center><div style= "width:10px; " class="sucDiv">
  <?php
extract($_POST);
require_once("config.php");
if (isset($_POST['sells']))
{
$qur="select * from sellermaster where username='$lid'";
$cc=mysqli_query($con,$qur);
if (mysqli_num_rows($cc)>0)
{
/*echo '<div class="container" style="width: 400px">
  <div class="alert alert-danger" width="200px">
    <strong>UnSuccess!</strong> This username Alrady Exist <br>
	Please Change your Username !
  </div></div>';
	//exit();*/
}
$cmd="insert into sellermaster(username,companyname,
email,password,mono,address,pincode,city,state,
securityquesion,securityanswer)
values('$lid','$companyname','$email','$pass','$mobn',
'$address','$pincode','$city','$state','$sq','$answer')";
$stor=mysqli_query($con,$cmd)or die("query not work");
if($stor){
echo '<div class="container" style="width: 420px">
  <div class="alert alert-success" width="200px">
    <strong>Success!</strong> Account created successfully <a href="SellerLogin.php">login now</a>
  </div></div>';
 }
 else{echo "error ";
}}
?>
	
  	
  </div>
  </center>
   <table width="1238" height="800px" >
   <tr>
     <td width="6" height="361">&nbsp;</td>
     <td width="400"><div class="div11">
       <center>
         <form name="form2" method="post" action="SellerLogin.php" onSubmit="return validlog();">
           <span style="font-size: x-large; color: rgba(30,83,17,1);"> <br>Seller Login</span>
           <input type="text" name="name11" id="name11" 
		   placeholder="Username" class="logintxt" 
		   onkeydown="textv()" onkeyUp="textv()" onblur="textv()"><br>
           <span id="uerror" ></span><br>
           <input type="password" name="Apass" id="pass1" placeholder="Password" 
		   onkeydown="textv()" onkeyup="textv()" onblur="textv()" class="logintxt">
           <br>
		   <span id="uerrorp" ></span><br>
           <br> <br>
           <input type="submit" class=" btn-success" name="btn1" value="Login">
           &nbsp;&nbsp;&nbsp; <br>
           <br>
           <a href="sellerforgotpassword.php">Forgot Password ? </a>
         </form>  

<?php
extract($_POST);
require_once("config.php");
if (isset($_POST['btn1'])){
	$qur="select * from sellermaster where username='$name11' and password='$Apass'";
	$rs=mysqli_query($con,$qur);
	/*$a=mysql_num_rows($rs);
	echo $a;*/
	if(mysqli_num_rows($rs)<1)
	{
		//header("location: errorloginseller.php");
		echo "<font color='red'>Username Or Password Dose Not Match</font>";
	}
	else
	{
		$row=mysqli_fetch_array($rs);
		$row['companyname'];
		$_SESSION["uns"] = $name11;
		$_SESSION["compn"]$compname;
	echo	"<script>
		document.location.href = 'sellerhome.php';
		</script>
		";
}}

?>
		 
		 <p id="demo" class="wronginput"></p>
       </center>
     </div></td>
     <td width="84" rowspan="3">&nbsp;</td>
     <td width="728" rowspan="3">
    <div class="div2"><center>
	
	
      <form name="form1" action="SellerLogin.php" method="POST" onSubmit="return check();">
        
        
        <center>    
       <div class="sdiv" ><br> <table border="0" width="95%" id="">
         <span style="font-size: x-large; color: rgba(30,83,17,1);">  Seller Resistration Form </span></p>
          
  <tr>
  <td width="84" class="style47"><font size="5px" color="red">*</font>Username:</td>
  <td width="250"><input name="lid" type="text" id="lid" maxlength="70" 
  style="width:150px; border:1px solid #hg888" class="signup"/>
   </td>
  <td width="250">&nbsp;<span id="unn1"></span></td>
  </tr>
          
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>Company name:</td>
  <td><input id="Text2" name="companyname"type="text" class="signup" />
   </td>
  <td>&nbsp; <span id="unn2"></span></td>
  </tr>
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>Password:</td>
  <td><input name="pass" type="password" id="pass" maxlength="70" style="width:150px; " class="signup"/></td>
  <td>&nbsp;<span id="unn3"></span></td>
  </tr>
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>Confirm Password:</td>
  <td><input name="cpass" type="password" id="cpass"maxlength="70" 
        style="width:150px; " class="signup" /></td>
  <td>&nbsp;<span id="unn4"></span></td>
  </tr>
  <tr>
  <td class="style47">
    <font size="5px" color="red">*</font>Email Id:</td>
  <td><input name="email" type="text" id="email" maxlength="50" style="width:250px; border:1px solid #hg888" class="signup"/></td>
  <td>&nbsp;<span id="unn5"></span></td>
  </tr>
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>Mobile no:</td>
  <td><input name="mobn" type="text" id="name0" maxlength="70" style="width:208px; " class="signup"/></td>
  <td>&nbsp;<span id="unn6"></span></td>
  </tr>
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>Address:</td>
  <td><textarea name="address" id="address" class="signup"></textarea></td>
  <td>&nbsp;<span id="unn7"></span></td>
  </tr>
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>City:</td>
  <td><input name="city" type="text" id="city" maxlength="70" style="width:200px; border:1px solid #hg888" class="signup"/></td>
  <td>&nbsp;<span id="unn8"></span></td>
  </tr>
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>Pin code:</td>
  <td><input name="pincode" type="text" id="pincode"  maxlength="10" style="width:100px; border:1px solid #hg888" class="signup" /></td>
  <td>&nbsp;<span id="unn9"></span></td>
  </tr>
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>State:</td>
  <td><select id="Select2" name="state" class="">
    <option>state</option>
    <option>Andhra Pradesh</option>
    <option>Arunachal Pradesh</option>
    <option>Assam</option>
    <option>Bihar</option>
    <option>Chattisgach</option>
    <option>Delhi</option>
    <option>Goa</option>
    <option>Gujrat</option>
    <option>Hariyana</option>
    <option>Himachal Pradesh</option>
    <option>Jammu Kashmir</option>
    <option>Jharkhand</option>
    <option>Karnataka</option>
    <option>Kerla</option>
    <option>MadhyaPradesh</option>
    <option>Maharashtra</option>
    <option>Manipur</option>
    <option>Meghalaya</option>
    <option>Mizoram</option>
    <option>Nagaland</option>
    <option>Orissa</option>
    <option>Panjab</option>
    <option>Rajasthan</option>
    <option>Sikkim</option>
    <option>TamilNadu</option>
    <option>Telangana</option>
    <option>Tripura</option>
    <option>Uttarakhand</option>
    <option>Uttarpradesh</option>
    <option>West Bangal</option>
  </select></td>
  <td>&nbsp;<span id="unn10"></span></td>
  </tr>
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>Security Question:</td>
  <td><select name="sq" class="">
    <option value>Security Question
      <option value=Login Id>Login Id
        <option value=Date of Birth>Date of Birth
          <option value=Mobile No>Mobile No
            <option value=Voter Id>Voter Id
              <option value=Email Id>Email Id </option>
  </select></td>
  <td>&nbsp;<span id="unn11"></span></td>
  </tr>
  <tr>
  <td class="style47"><font size="5px" color="red">*</font>Security Answer:</td>
  <td><input name="answer" type="text" id="answer"  maxlength="70" style="width:100px; border:1px solid #hg888" class="signup"/></td>
  <td>&nbsp;<span id="unn12"></span></td>
  </tr>
  <tr>
  <td height="33" class="style1">&nbsp;</td>
  <td><b>&nbsp;
    <input type="submit" name="sells" value="submit" class="btn btn-success"
        style="font-weight: 700; color: #FFFFFF; height: 31px; background-color: #006600">
    &nbsp;
    <input type="reset" value="cancel" 
        style="font-weight: 700; color: #FFFFFF; height: 30px; background-color: #FF0000">
  </b></td>
  <td>&nbsp;</td>
  </tr>
  </table>
  </form>
      
      </center>  
    </div>     </td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     </tr>
   <tr>
     <td height="215">&nbsp;</td>
     <td>&nbsp;</td>
     </tr>
</table >
   </div>
	   <br><div><br><br>
	   <?PHP  include("footer.php")?>
