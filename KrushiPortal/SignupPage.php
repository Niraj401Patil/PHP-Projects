
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Untitled Page</title>
    <style type="text/css">
      
       
<style> 
    
    
    #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

input[type=text],input[type=password],select{
			width: 200px;
			padding: 10px 10px;
			border: 2px;
			//background-color: rgb(222,222,222);
			color: blue;
			font-size: 20px;
			border-radius: 5px;
	border-bottom:rgba(0,120,0,1.00) solid;
		}
		.rgi{
			width: 90%;
			box-shadow:  1px 1px 5px 2px green;
		}
</style>


<script language="javascript" type="text/javascript">


</script>
<script language="javascript">
function txtchan(val) {
	var pLen=document.form1.pass.value;
	if(val==1){
	document.getElementById("un1").innerHTML="<FONT color='green'>Ok!</font>";}
     else if(val==2) 
	 {  if (pLen.length > 8){	 
	    document.getElementById("un2").innerHTML="<FONT color='green'>Ok!</font>";
	  }
      }
	  else if(val==4)
	  {
	   if((f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			
            document.getElementById("un4").innerHTML="<FONT color='green'> Ok! </font>";
				
	    }
		
	  }
	  
}
function check()
{
 if(document.form1.lid.value==="")
 { 
    
    //alert("Plese Enter Username");
	 document.getElementById("un1").innerHTML="<FONT color='red'>Please Enter Username</font>";
     document.form1.lid.focus();
	 return false;
	 }
	 
 if(document.form1.pass.value==="")
  {
    //alert("Plese Enter Your Password");
     document.getElementById("un2").innerHTML="<FONT color='red'>Please Enter password</font>";
	document.form1.pass.focus();
	return false;
  }
   pLen=document.form1.pass.value;
  if(pLen.length < 8)
  {
  	//alert(" Your password must be at least 8 characters");
	document.form1.pass.focus();
	 document.getElementById("un2").innerHTML="<FONT color='red'>pass must <8 digit </font>";
     
	return false;
  }
  if(document.form1.cpass.value==="")
  {
    //alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
    document.getElementById("un3").innerHTML="<FONT color='red'>Plese Enter Confirm Password </font>";
     
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    //alert("Confirm Password does not matched");
	document.getElementById("un3").innerHTML="<FONT color='red'>Confirm Password does not matched </font>";
	document.form1.cpass.focus();
	return false;
  }
  
  if(document.form1.pass.value == document.form1.cpass.value)
       {
	   document.getElementById("un3").innerHTML="<FONT color='green'> ok ! </font>";
	   document.form1.cpass.focus();
	   }
 if(document.form1.email.value==="")
  {
	  document.getElementById("un4").innerHTML="<FONT color='red'> Please Enter your Email Address! </font>";
    //alert("Plese Enter your Email id");
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
document.getElementById("un4").innerHTML="<FONT color='red'> Please Enter valid Email! </font>";
			document.form1.email.focus();
			return false;
		}
           document.getElementById("un4").innerHTML="<FONT color='green'> Ok! </font>";
		  if(document.form1.mobn.value==="")
  {
    alert("Plese Enter Mobile No");
	document.form1.mobn.focus();
	return false;
  }
  		  if(document.form1.adharno.value==="")
  {
    alert("Plese Enter Adhar No");
	document.form1.adharno.focus();
	return false;
  }
    aLen=document.form1.adharno.value;

  if(aLen.length != 12)
  {
  	alert("please enter valid Adhar no. must be at 12 nos.");
	document.form1.adharno.focus();
	return false;
  }
  if(document.form1.gen[0].checked===false && document.form1.gen[1].checked===false)
  {
    alert("Plese Select Gender");

	return false;
  }

 if(document.form1.day.value==="Day")
  {
    alert("Plese Enter Date of birth");
	document.form1.day.focus();
	return false;
  }

   if(document.form1.Month.value==="Month")
    {
      alert("Plese Enter Month of birth");
  	document.form1.Month.focus();
  	return false;
  }
   if(document.form1.Year.value==="Year")
      {
        alert("Plese Enter Year of birth");
    	document.form1.Year.focus();
    	return false;
  }
  if(document.form1.address.value==="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
 if(document.form1.city.value==="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }

  if(document.form1.pincode.value==="")
  {
    alert("Plese Enter pincode");
	document.form1.pincode.focus();
	return false;
  }
 if(document.form1.state.value==="state")
  {
    alert("Plese Select State");
	document.form1.state.focus();
	return false;
  }
if(document.form1.sq.value==="")
  {
    alert("Plese Select Security Question");
	document.form1.sq.focus();
	return false;
  }
 if(document.form1.answer.value==="")
  {
    alert("Plese Enter Your Answer");
	document.form1.answer.focus();
	return false;
  }
  return true;
}

</script>
</head>
<body bgcolor="White">
<?PHP include("header.php")?>
<br>
 <center>
	  <?php
extract($_POST);
require_once("config.php");
if (isset($_POST['signu']))
{
$qur="select * from usermaster where username='$lid'";
$cc=mysqli_query($con,$qur);
if (mysqli_num_rows($cc)>0)
{
	//echo "<h1 >Same Username Already Exists Please Change your Username</h1></br><h1>Go Back</h1>";
	//exit;
}

$cmd="insert into usermaster(username,password,email,mono,adharno,gender,
address,city,pincode,state,securityquestion,securityanswer,dateofbirth)
values('$lid','$pass','$email','$mobn','$adharno','$gen',
'$address','$city','$pincode','$state','$sq','$answer',
'$day/$Month/$Year')";
$stor=mysqli_query($con,$cmd)or die("query not work");
echo '<div class="container" style="width: 420px">
  <div class="alert alert-success" width="200px">
    <strong>Success!</strong> Account created successfully <a href="SignupPage.php">login now</a>
  </div></div>';
}
?>
<form name="form1" action="SignupPage.php" method="POST" onSubmit="return check();">
      <p class="style48" style="text-align:left; font-size: x-large">
         &nbsp;&nbsp;&nbsp;&nbsp; Farmer Resistration Form :</p>
     <div class="rgi">     
 <table id="customers2" class="table table-hover">

<tr>
<td class="style47">Username:</td>
<td>
<input name="lid" type="text" id="lid" maxlength="70" onkeypress="txtchan(1)" style="width:300px; border:1px solid #hg888" />
<span id="un1"></span></td>
</tr>
<tr>
<td class="style47">Password:</td>
<td>
<input name="pass" type="password" onkeypress="txtchan(2)" id="pass" maxlength="70" style="width:300px; " />
<span id="un2"></span></td>
</tr>
<tr>
<td class="style47">Confirm Password:</td>
<td>
<input name="cpass" type="password" id="cpass"maxlength="70" 
        style="width:300px; " onkeypress="txtchan(3)"/><span id="un3"></span></td>
</tr>
<tr>
<td class="style47">Email Id:</td>
<td>
    <input name="email" onkeypress="txtchan(4)" type="text" id="email" maxlength="50" style="width:300px; border:1px 
	solid #hg888" /><span id="un4"></span></td>
</tr>
<tr>
<td class="style47">Mobile no:</td>
<td>
<input name="mobn" type="text" id="name0" maxlength="70" style="width:300px; " />
<span id="un5"></span></td>
</tr>
<td class="style47">Adhar no:</td>
<td>
<input name="adharno" type="text" id="name" maxlength="70" style="width:300px; " />
<span id="un6"></span></td>
</tr>
 <tr>
<td class="style47">Gender:</td>
<td>


		  <label>
		  <input name="gen" type="radio" value="Male" />
		  </label>
		Male
		  <label>
		  <input name="gen" type="radio" value="Female" />
		  </label>
		Female &nbsp;<span id="un7"></span>
</td>
</tr>
<tr>
<td class="style47">Date of birth:</td>
<td>
  <select name="day">
         	<option value="Day">Day
               <option value=1>1
         	<option value=2>2
         	<option value=3>3
         	<option value=4>4
         	<option value=5>5
               <option value=6>6
         	<option value=7>7
         	<option value=8>8
         	<option value=9>9
         	<option value=10>10
<option value=11>11
         	<option value=12>12
         	<option value=3>13
         	<option value=14>14
         	<option value=15>15
<option value=16>16
         	<option value=17>17
         	<option value=18>18
         	<option value=19>19
         	<option value=20>20
<option value=21>21
         	<option value=22>22
         	<option value=23>23
         	<option value=24>24
         	<option value=25>25
<option value=21>21
         	<option value=27>22
         	<option value=28>28
         	<option value=29>29
         	<option value=30>30
<option value=31>31
		</select>
 &nbsp;
 <select name="Month">
         	<option value="Month">Month
<option value=January>January
<option value=February>February
<option value=March>March
<option value=April>April
<option value=May>May
<option value=June>June
<option value=July>July
<option value=Augest>Augest
<option value=September>September
<option value=October>October
<option value=November>November
<option value=December>December
</select>  &nbsp;
<select name="Year">
         	<option value="Year">Year
<option value=1996>1996<option value= 1995>1995<option value=1994>1994<option value=1993>1993
<option value=1992>1992<option value= 1991>1991<option value=1990>1990<option value=1989>1989
<option value=1988>1988<option value= 1987>1987<option value=1986>1986<option value=1985>1985
<option value=1984>1984<option value= 1983>1983<option value=1982>1982<option value=1981>1981
<option value=1980>1980<option value= 1979>1979<option value=1978>1978<option value=1977>1977
<option value=1976>1976<option value= 1975>1975<option value=1974>1974<option value=1973>1973
<option value=1972>1972<option value= 1971>1971<option value=1970>1970<option value=1969>1969
<option value=1968>1968<option value= 1967>1967<option value=1966>1966<option value=1965>1965
<option value=1964>1964<option value= 1963>1963<option value=1962>1962<option value=1961>1961
<option value=1960>1960<option value= 1959>1959<option value=1958>1958<option value=1957>1957

<option value=1956>1956<option value= 1955>1955<option value=1954>1954<option value=1953>1953
<option value=1952>1952<option value= 1951>1951<option value=1950>1950<option value=1949>1949
<option value=1948>1948<option value= 1947>1947<option value=1946>1946<option value=1945>1945
<option value=1944>1944<option value= 1943>1943<option value=1942>1942<option value=1941>1941
<option value=1940>1940<option value= 1939>1939<option value=1938>1938<option value=1937>1937
<option value=1936>1936<option value= 1935>1935<option value=1934>1934<option value=1933>1933
<option value=1932>1932<option value= 1931>1931<option value=1930>1930<option value=1929>1929
<option value=1928>1928<option value= 1927>1927<option value=1926>1926<option value=1925>1925
<option value=1924>1924<option value= 1923>1923<option value=1922>1922<option value=1921>1921
<option value=1920>1920<option value= 1919>1919<option value=1918>1918<option value=1917>1917
<option value=1916>1916<option value= 1915>1915<option value=1914>1914<option value=1913>1913
<option value=1912>1912<option value= 1911>1911<option value=1910>1910<option value=1909>1909
<option value=1908>1908<option value= 1907>1907<option value=1906>1906<option value=1905>1905
<option value=1904>1904<option value= 1903>1903<option value=1902>1902<option value=1901>1901



</option></select> &nbsp;
</tr>
<tr>
<td class="style47">Address:</td>
<td>
<textarea name="address" id="address"></textarea></td>
</tr>
<tr>
<td class="style47">City:</td>
<td>
<input name="city" type="text" id="city" maxlength="70" style="width:300px; border:1px solid #hg888" /></td>
</tr>
<tr>
<td class="style47">Pin code:</td>
<td>

<input name="pincode" type="text" id="pincode"  maxlength="70" style="width:300px; border:1px solid #hg888" /></td>
</tr>
<tr>
<td class="style47">State:</td>
<td>
<select id="Select2" name="state">    
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
</tr>
<tr>
<td class="style47">Security Question:</td>
<td>
<select name="sq">
         	<option value>Security Question
               <option value=Login Id>Login Id
                <option value=Date of Birth>Date of Birth
         	<option value=Mobile No>Mobile No
         	<option value=Voter Id>Voter Id
         	<option value=Email Id>Email Id
			</option>
			</select>

</td>
</tr>
<tr>
<td class="style47">Security Answer:</td>
<td>
<input name="answer" type="text" id="answer"  maxlength="70" style="width:300px; border:1px solid #hg888" /></td>
</tr>
<tr>
<td class="style1">&nbsp;</td>
<td> <b>&nbsp;<input type="submit" value="submit" name="signu"
        style="font-weight: 700; color: #FFFFFF; height: 31px; background-color: #006600">&nbsp; 
    <input type="reset" value="cancel" 
        style="font-weight: 700; color: #FFFFFF; height: 30px; background-color: #FF0000"></b></td>
</tr>
</table>
</div>
</form>
    <br>
    <?PHP include("footer.php") ?>
 </body>
</html>
