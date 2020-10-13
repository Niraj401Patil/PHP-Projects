<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>
    <style type="text/css">
      
        .style1
        {
            color: #FFFFFF;
        }
        .style2
        {
            color: #000066;
        }
        .style3
        {
            height: 27px;
        }
        #Submit2
        {
            font-weight: 700;
            font-size: x-large;
            color: #000066;
            height: 34px;
            width: 90px;
            margin-right: 0px;
        }
        .style29
        {
            height: 317px;
        }
        .style30
        {
            height: 317px;
            width: 582px;
        }
        .style32
        {
            height: 317px;
            width: 582px;
            font-size: large;
            font-weight: bold;
        }
        .style33
        {
            height: 317px;
            font-size: large;
            font-weight: bold;
        }
        .style34
        {
            font-size: large;
            font-weight: bold;
            color: #003300;
        }
           a{
    text-decoration: none;
      }
a :link {color:#ff0000;}
a :visited {color: Green}
a :hover {color: gold}

a.two:link {color:#ff0000;}
a.two:visited {color:#0000ff;}
a.two:hover {font-size:150%;}
        .style33
        {
            color: #FFFFCC;
        }
        </style>

<style> 
    #myDIV {
    width: 412px;
    height: 276px;
    outline: 15px solid gold;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {outline-color: blue;}
}

/* Standard syntax */
@keyframes mymove {
    50% {outline-color: blue;}
}
    #Div1
    {
        color: #FF33CC;
    }
        
    .style44
    {
        font-size: xx-large;
        color: #FFFFFF;
    }
    
    .style45
    {
        height: 317px;
        font-size: xx-large;
        color: #FFFFFF;
    }
    
    #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 52%;
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
    
    .style46
    {
        height: 317px;
        font-size: xx-large;
        color: #0000CC;
    }
    
    .style47
    {
        color: #660033;
        font-weight: bold;
        font-style: italic;
        font-size: large;
    }
    .style48
    {
        color: #000066;
        font-weight: bold;
    }
    .style49
    {
        color: #003300;
    }
    
    .style50
    {
        color: #FFFF00;
    }
    
    #Text2
    {
        height: 22px;
        width: 150px;
    }
    
</style>


<script language="javascript" type="text/javascript">
// <!CDATA[

function Submit2_onclick() {

}

// ]]>
</script>
<script language="javascript">
function check()
{
 if(document.form1.lid.value==="")
  {
    alert("Plese Enter Username");
	document.form1.lid.focus();
	return false;
  }
  if(document.form1.companyname.value==="")
  {
    alert("Plese Enter companyname");
	document.form1.companyname.focus();
	return false;
  }
 if(document.form1.pass.value==="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  }
   pLen=document.form1.pass.value;

  if(pLen.length < 8)
  {
  	alert(" Your password must be at least 8 characters");
	document.form1.pass.focus();
	return false;
  }
  if(document.form1.cpass.value==="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
 if(document.form1.email.value==="")
  {
    alert("Plese Enter your Email Address");
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
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
		  if(document.form1.mobn.value==="")
  {
    alert("Plese Enter Mobile No");
	document.form1.mobn.focus();
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
   piLen=document.form1.pincode.value;

  if(piLen.length !=6)
  {
  	alert(" Enter 6 digit Pincode");
	document.form1.pincode.focus();
	return false;
  }
 if(document.form1.state.value==="state")
  {
    alert("Plese Enter State");
	document.form1.state.focus();
	return false;
  }
if(document.form1.sq.value==="")
  {
    alert("Plese Enter Security Question");
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
<form name="form1" action="sellersignupPagecode.php" method="POST" onSubmit="return check();">

    <div style="text-align: left">
        <h1 style="color: #660066; height: 81px; width: 1184px;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img alt="" src="img/screen/logo1.jpg" style="height: 92px; width: 164px" />&nbsp;&nbsp;&nbsp;&nbsp;
            <img alt="" src="img/screen/homehead1.jpg" 
                style="height: 94px; width: 650px; margin-left: 0px;" />&nbsp;&nbsp;&nbsp;&nbsp;
            <img alt="" src="img/screen/logo.jpg" style="height: 91px; width: 163px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </h1>
    </div>
    <table style="width:100%; height: 2px;">
      <tr>
        <td class="style3">
            <h1 style="background-color: #00CC00; height: 47px;">
                <span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="style2">&nbsp; </span>
                </span>
                <span class="style50">only for seller</span><span class="style1"><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span 
                    class="style44"> &nbsp;</span></span><span class="style44">&nbsp;&nbsp; 
                </span> 
                <span class="style2"> <a href="sellersignupPage.php"><span class="style46">Signup Now</span></a></span><span 
                    class="style44">&nbsp;&nbsp;&nbsp;&nbsp; 
                </span> 
                <span class="style2"> <a href="sellerloginPage.php"><span class="style45">Login</span></a></span><span 
                    class="style44">&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp; &nbsp;<span 
                    class="style2">&nbsp;&nbsp;&nbsp;</span><input id="Text1" type="text" onclick="return Text1_onclick()" class="style2" /><span 
                    class="style2">&nbsp;&nbsp;
                </span>
                <input id="button" type="button" 
                value="search" class="style2" /></span></h1>
        </td>
    </tr>
    </table>

      <p class="style48" style="text-align: center; font-size: xx-large">
          Resistration Form :</p>

      <center>    
 <table id="customers">

<tr>
<td class="style47">Username:</td>
<td>
<input name="lid" type="text" id="lid" maxlength="70" style="width:150px; border:1px solid #hg888" /></td>
</tr>

<tr>
<td class="style47">Company name:</td>
<td>
    <input id="Text2" name="companyname"type="text" /></td>
</tr>
<tr>
<td class="style47">Password:</td>
<td>
<input name="pass" type="password" id="pass" maxlength="70" style="width:150px; " /></td>
</tr>
<tr>
<td class="style47">Confirm Password:</td>
<td>
<input name="cpass" type="password" id="cpass"maxlength="70" 
        style="width:150px; " /></td>
</tr>
<tr>
<td class="style47">Email Id:</td>
<td>
    <input name="email" type="text" id="email" maxlength="50" style="width:250px; border:1px solid #hg888" /></td>
</tr>
<tr>
<td class="style47">Mobile no:</td>
<td>
<input name="mobn" type="text" id="name0" maxlength="70" style="width:208px; " /></td>
</tr>
<tr>
<td class="style47">Address:</td>
<td>
<textarea name="address" id="address"></textarea></td>
</tr>
<tr>
<td class="style47">City:</td>
<td>
<input name="city" type="text" id="city" maxlength="70" style="width:200px; border:1px solid #hg888" /></td>
</tr>
<tr>
<td class="style47">Pin code:</td>
<td>

<input name="pincode" type="text" id="pincode"  maxlength="70" style="width:100px; border:1px solid #hg888" /></td>
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
<input name="answer" type="text" id="answer"  maxlength="70" style="width:100px; border:1px solid #hg888" /></td>
</tr>
<tr>
<td class="style1">&nbsp;</td>
<td> <b>&nbsp;<input type="submit" value="submit" 
        style="font-weight: 700; color: #FFFFFF; height: 31px; background-color: #006600">&nbsp; 
    <input type="reset" value="cancel" 
        style="font-weight: 700; color: #FFFFFF; height: 30px; background-color: #FF0000"></b></td>
</tr>
</table>
</form>
    <p>&nbsp;
        </p>

    <table style="width: 100%; height: 137px;">
        <tr>
            <td style="background-color: #FF00FF">
                <b>
                <br class="style29" />
                </b><span class="style30"><b>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                &nbsp;&nbsp;&nbsp;</b><span class="style34">&nbsp;&nbsp; </span><a href="home.php">
                <span class="style34">Home</span></a><span 
                    class="style34">&nbsp;&nbsp;|&nbsp;</span><a href="AboutUs.php"><span class="style34"> 
                AboutUs</span></a><span class="style34">&nbsp; |&nbsp;</span><a href="contacts.php"><span 
                    class="style34"> Contacts</span></a><span class="style34">&nbsp; |&nbsp; </span>
                <a href="feedback.php"><span class="style34">Feedback</span></a><span 
                    class="style34">&nbsp;&nbsp;&nbsp;| 
                <a href="complaint.php"><span class="style49">Complaints</span></a></span></span><br />
                <br class="style33" />
                <div id="footer0">
                    <div id="owner0">
                        <span class="style32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        This website belongs to Department of Agriculture &amp; Cooperation and Farmers 
                        Welfare,</span><br class="style33" />
                        <span class="style32">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        &nbsp;&nbsp;&nbsp;&nbsp; Ministry of Agriculture and Farmers Welfare .</span><br class="style33" />
                        <span class="style32">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        1&nbsp; March, 2017 </span>
                    </div>
                </div>
                <br />
            </td>
        </tr>
    </table>
    </center>
 <h1 align="center">
        <text color=red>
</h1>
 </body>
</html>
