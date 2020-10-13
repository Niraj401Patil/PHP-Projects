<?PHP  include("header.php"); ?>

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
            height: 70px;
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
a :hover {color: Red}

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
        
    .style43
    {
        height: 317px;
        font-size: xx-large;
        color: #FFFFFF;
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
    width: 41%;
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
        color: #FFFFFF;
    }
    
    .style47
    {
        color :rgba(0,0,0,0.84);
        font-size: x-large;
        font-style: italic;
    }
    .style48
    {
        color: #990099;
        font-weight: bold;
        text-align: left;
    }
    .style49
    {
        color: #003300;
    }
    
    .style50
    {
        color: #CC0000;
        height: 65px;
        font-size: x-large;
        font-style: italic;
    }
    .style51
    {
        height: 65px;
    }
    #address
    {
        height: 106px;
        width: 268px;
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
 if(document.form1.fname.value==="")
  {
    alert("Plese Enter your name");
	document.form1.fname.focus();
	return false;
  }
  

   if(document.form1.femail.value==="")
  {
    alert("Plese Enter your Email Address");
	document.form1.femail.focus();
	return false;
  }
  e=document.form1.femail.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.femail.focus();
			return false;
		}
		 if(document.form1.faddress.value==="")
  {
    alert("Plese Enter your address");
	document.form1.faddress.focus();
	return false;
  }
   if(document.form1.fmessage.value==="")
  {
    alert("Plese Enter your message");
	document.form1.fmessage.focus();
	return false;
  }
  
  return true;
}

</script>
</head>
<body bgcolor="#D2DFE3">
<form name="form1" action="feedbackc.php" method="POST" onSubmit="return check();">

    <div style="text-align: left"></div>
    <p class="style48" style="font-size: xx-large">
        Feedback :

		  
		  </p>
          
 <table id="customers" border="2">

<tr>
<td class="style47">Name *</td>
<td>
<input name="fname" placeholder="Enter the Name" type="text" id="lid" maxlength="70" 
        style="width:200px; height: 25px;" /></td>
</tr>
<tr>
<td class="style47">Email Id *</td>
<td>
    <input name="femail" placeholder="Enter Email Id" type="text" id="email" maxlength="50" 
        style="width:250px; height: 25px;" /></td>
</tr>
<tr>
<td class="style47">Address *</td>
<td>
<input name="faddress" placeholder="Enter Address" type="text" id="name0" maxlength="70" 
        style="width:308px; height: 25px;" /></td>
</tr>
<tr>
<td class="style47">Message *</td>
<td class="style51">
<textarea name="fmessage"  placeholder="Give Feedback"id="address"></textarea></td>
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
</body>
</html>


 <?PHP include("footer.php"); ?>

