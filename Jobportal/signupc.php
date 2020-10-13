   
   
     <?php include("header.php"); ?>
      <?php
extract($_POST);
$con=mysql_connect("localhost","root","") or die("not connect to localhost");
mysql_select_db("jobportal",$con)or die("not connect to database");
/*
$cc=mysql_query("select * from jobseeker where username='$lid'");
if (mysql_num_rows($cc)>0)
{
	echo "Same Username Already Exists Please Change your Username</br>Go Back";
	exit;
}*/

$cmd="insert into jobseeker
(username,password,email,mobile,gender,BirthDate,location,experience,State,cv)   values('$lid','$pass','$email','$mobn','$gen','$day/$Month/$Year','$Location',
'$experience1','$state','$CV')";
	
//(username,password,email,mobile,gender,BirthDate,cv,experience,location,State)   //values        ('$lid',)";
	 //('$lid','$pass','$cpass','$email','$mobn','$gen','$day/$Month/$Year','$cv','$//Location','$state')";
$stor=mysql_query($cmd)or die("query not work");
echo "<h2><font color='green' >Your Account is successfully created </font></h2>";
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>
    <style type="text/css">        .style6
        {
            font-size: x-large;
            font-weight: bold;
            color: #000099;
            width: 230px;
            height: 30px;
        }
        .style7
        {
            font-size: x-large;
            font-weight: bold;
            color: #006600;
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
        .style8
        {
            font-size: x-large;
            color: #0000CC;
            width: 230px;
            height: 30px;
        }
        .style9
        {
            font-size: large;
        }
        .style35
        {
            height: 198px;
            width: 380px;
        }
           a{
    text-decoration: none;
            color: #003300;
        }
a :link {color:#ff0000;}
a :visited {color: Green}
a :hover {color: Red}

a.two:link {color:#ff0000;}
a.two:visited {color:#0000ff;}
a.two:hover {font-size:150%;}
</style>

<style> 
    #myDIV {
    width: 412px;
    height: 276px;
    outline: 15px solid red;
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
    .style40
    {
        height: 198px;
        width: 432px;
    }
    .style41
    {
        height: 198px;
    }
    
    .style45
    {
        height: 317px;
        font-size: xx-large;
        color: #FF0000;
    }
    
    .style50
    {
        color: #0033CC;
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
 if(document.login.uname1.value==="")
  {
    alert("Plese Enter Username");
	document.login.uname1.focus();
	return false;
  }
 if(document.login.pass1.value==="")
  {
    alert("Plese Enter Your Password");
	document.login.pass1.focus();
	return false;
  }
  return true;
}
</script>
</head>
<body bgcolor="#D2DFE3">
<form name="login" method="post" action="loginc.php" onSubmit="return check();">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="style45" style="color: #27157F">

<span style="font-weight: bold">Login Now :</span></span>
	</br></br></br>
<div style="text-align: left">
        <table style="width:100%; height: 121px;">
          <tr>
            <td height="317" class="style35">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td class="style40"><div id="myDIV"><br />
              <br />
              <span class="style7">&nbsp;&nbsp;&nbsp;&nbsp; Username </span> &nbsp;
              <input id="Text2" name="uname1" type="text" placeholder="    Enter Username" style="width:250px; />
              <br />
              <br class="style6" />
              
              
              <span class="style7">&nbsp;&nbsp;&nbsp;&nbsp; Password</span><span class="style6">&nbsp;&nbsp; </span>
              <input id="Text" name="pass1" type="password" placeholder="   Enter Password" style="width:250px; /&gt;
              &lt;br /&gt;
              &lt;br class="style6="style6"" />
              <br />
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input id="Submit2" type="submit" value="Login" onclick="return Submit2_onclick()" />
              <br />
              <br />
              <span class="style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span 
                          class="style50"> </span> <a href ="forgotpassword.php" class="style50">Forgot Password...?</a></span><br />
              <br />
            </div></td>
            <td class="style41">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          </tr>
        </table>
    </div>
</form>
</body>
</html>


<?php include("footer.php"); ?>

