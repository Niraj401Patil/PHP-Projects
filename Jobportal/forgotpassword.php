<?php include("header.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>
  
   <style type="text/css">
        #Submit1
        {
            width: 74px;
            height: 26px;
            font-weight: 700;
            font-size: large;
            margin-bottom: 10px;
            color: #FFFFFF;
            background-color: #00FF00;
        }
        .style3
        {
            text-align: left;
            color:darkblue;
            font-weight: bold;
        }
        #Button1
        {
            width: 49px;
            font-weight: 700;
            color: #FFFFFF;
            background-color: #FF3300;
            height: 28px;
        }
        #Submit2
        {
            width: 58px;
            font-weight: 700;
            color: #FFFFFF;
            background-color: #009933;
            height: 28px;
        }
    </style>
    <style> 
        #myDIV {
    width: 422px;
    height: 332px;
    outline: 5px solid red;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {outline-color: green;}
}

/* Standard syntax */
@keyframes mymove {
    50% {outline-color: green;}
}
        .style1
        {
            text-align: left;
            height: 28px;
            width: 1155px;
        }
        .style2
        {
            font-size: large;
            font-weight:normal;
            color: #000066;
        }
        .style5 {font-size: x-large; font-weight: bold; color: #800000; }
    </style>
	
<script language="javascript">
function check()
{
 if(document.form1.ram.value==="")
  {
    alert("Plese Enter Username");
	document.form1.ram.focus();
	return false;
  }
  if(document.form1.adharno1.value==="")
  {
    alert("Plese Enter Adhar No");
	document.form1.adharno1.focus();
	return false;
  }
   if(document.form1.mono1.value==="")
  {
    alert("Plese Enter mobail No");
	document.form1.mono1.focus();
	return false;
  }
  return true;
}
</script>

</head>
<body bgcolor="#D2DFE3">

<form name="form1" action="forgotpasswordc.php" method="post" onSubmit="return check();">

<span class="style45" style="color: #27157F">

<span style="font-weight: bold"> </span></span>
	
<div style="text-align: left">
        <table border ="0" >
          <tr>
            <td height="317" class="style35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            
            <h2 class="style3">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
              Forgot your Password<span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        </span></h2>
              <td class="style40"><div id="myDIV">
              <strong></strong>
            
              <h2 class="style3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style2">&nbsp;&nbsp;&nbsp;        </span></h2>
   <table width="359" border="0">
      <tr>
        <td width="46"><span class="style5">&nbsp;</span></td>
        <td width="288">
          <label>
            <input type="text" name="uname1" placeholder="  Please Enter Userename"class="style2"/>
          </label>        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><span class="style1">
          <input  name="email1" placeholder="  Please Enter Email ID" class="style2" type="text" />
        </span></td>
      </tr>
      <tr>
        <td><span class="style5">&nbsp;</span></td>
        <td><span class="style1">
          <input  name="mono1" placeholder="  Please Enter Mobile No"class="style2" type="text" />
        </span></td>
      </tr>
    </table>
		
    <p class="style1">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="Button1" type="button"  value="Back" action="login.php"  onclick="document.location.href = 'login.php';">&nbsp;
        <input id="Submit2" type="submit" value="submit" /></p>        
       </div></td>
            <td class="style41">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          </tr>
        </table>
    </div>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<center>
<input type="button" class="style6"
 value="Back" action="forgotpassword.php"  onclick="document.location.href = 'forgotpassword.php';">
 <input type="button" class="style6"
 value="LogIn Now" action="login.php"  onclick="document.location.href = 'login.php';">
</center>
</form>



</body>
</html>

<?php include("footer.php"); ?>