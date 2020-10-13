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
            color: rgba(130,115,116,1.00);
            //font-weight: bold;
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
    width: 150px;
    height: 332px;
    outline: 15px solid red;
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
           // text-align: left;
            height: 28px;
            width: 1155px;
        }
        .style2
        {
            font-size: x-large;
            font-weight: bold;
            color: #000066;
        }
        .style5 {
	 //font-weight: bold;
	color: rgba(130,115,116,1.00);
	font-size: 18px;
}
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
<body>
<?php include"header.php"?>
<form name="form1" action="forgotpasswordcode.php" method="post" onSubmit="return check();">

 <center><div id="myDIV1">
 
    <h2 class="style3">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <center> Farmer Forgot  Password</center><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        </span></h2>
   <table class="table " border="0" style="width: 100px">
      <tr>
        <td width="92"><span class="style5">Username&nbsp;</span></td>
        <td width="236">
          <label>
            <input type="text" name="ram" class="style2"/>
          </label>        </td>
      </tr>
      <tr>
        <td><span class="style5">Adhar no&nbsp;</span></td>
        <td><span class="style1">
          <input  name="adharno1" class="style2" type="text" />
        </span></td>
      </tr>
      <tr>
        <td><span class="style5"> mob.no&nbsp;</span></td>
        <td><span class="style1">
          <input  name="mono1"class="style2" type="text" />
        </span></td>
      </tr>
    </table>
		<center>
    <p class="style1">

        <input id="Button1" type="button"  value="Back" action="login.php"  onclick="document.location.href = 'UserLogin.php';">&nbsp;
        <input id="Submit2" type="submit" value="submit" /></p>    </center>    
       </div>
	</center>
		</form1>
		<?php include"footer.php"?>
</body>
</html>
