<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>
    <style type="text/css">
        #Text1
        {
            width: 200px;
            height: 25px;
        }
        #Text2
        {
            width: 200px;
        }
        #Text3
        {
            width: 200px;
        }
        #Text4
        {
            width: 200px;
        }
        #Text5
        {
            width: 200px;
            height: 81px;
        }
        #Text6
        {
            width: 200px;
        }
        #Text7
        {
            width: 200px;
        }
        #Text8
        {
            width: 200px;
        }
        #Text9
        {
            width: 200px;
        }
        .style6
        {
            font-weight: bold  ;
			color:#FF0000;
			
        }
        #Text10
        {
            width: 200px;
            height: 25px;
        }
        #Text11
        {
            width: 200px;
            height: 25px;
        }
        #Text12
        {
            width: 200px;
            height: 25px;
        }
        #Text13
        {
            width: 200px;
            height: 25px;
        }
        #Text14
        {
            width: 200px;
            height: 25px;
        }
        #Text15
        {
            width: 200px;
            height: 25px;
        }
        #Text16
        {
            width: 200px;
            height: 25px;
        }
        #Text17
        {
            width: 200px;
            height: 25px;
        }
        #Text18
        {
            width: 200px;
            height: 25px;
        }
        #Text19
        {
            width: 200px;
            height: 25px;
        }
        #Text20
        {
            width: 200px;
            height: 25px;
        }
        #Text21
        {
            width: 200px;
            height: 25px;
        }
        #Text22
        {
            width: 368px;
            height: 60px;
        }
        #Text23
        {
            width: 200px;
            height: 25px;
        }
        #Text24
        {
            width: 200px;
            height: 25px;
        }
        #Text25
        {
            width: 200px;
            height: 25px;
        }
        #Text26
        {
            width: 200px;
            height: 25px;
        }
        #Text27
        {
            width: 200px;
            height: 25px;
        }
        </style>
    <style>
        #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 79%;
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
        .style11
        {
            height: 12px;
        }
        .style12
        {
            color: #000066;
            font-weight: bold;
            width: 1184px;
            font-size: large;
        }
        .style13
        {
            font-size: large;
        }
        #Button2
        {
            font-weight: 700;
            color: #FFFFFF;
            height: 31px;
            background-color: #FF0000;
        }
        #Submit2
        {
            color: #FFFFFF;
            font-weight: 700;
            height: 31px;
            background-color: #00CC00;
        }
        #Button3
        {
            color: #FFFFFF;
            font-weight: 700;
            height: 31px;
            background-color: #6666FF;
        }
        .style14
        {
            color: #006600;
        }
        .style15
        {
            width: 8px;
        }
              a{
    text-decoration: none;
      }
              .style34
        {
            color: #FFFFFF;
        }
        .style29
        {
            color: #000066;
        }
        .style33
        {
            font-size: x-large;
        }
        #Button4
        {
            color: #FF3300;
            font-weight: 700;
            height: 25px;
            background-color: #FFFFFF;
        }
        .style38
        {
            color: #FFFF00;
        }
         a{
    text-decoration: none;
      }
    .style39 {            font-size: x-large;
            font-weight: normal;
            color: #000066;
}
.style40 {            color: #000066;
            font-size: x-large;
}
.style41 {            color: #006600;
            text-align: left;
}
    </style>
	
	
	</script>
<script language="javascript">
function check()
{
 if(document.form1.username1.value==="")
  {
    alert("Plese Enter Username");
	document.form1.username1.focus();
	return false;
  }

 if(document.form1.email1.value==="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email1.focus();
	return false;
  }
  e=document.form1.email1.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email1.focus();
			return false;
		}

  		  if(document.form1.adharno1.value==="")
  {
    alert("Plese Enter Adhar No");
	document.form1.adharno1.focus();
	return false;
  }
    aLen=document.form1.adharno1.value;

  if(aLen.length != 12)
  {
  	alert("please enter valid Adhar no. must be at 12 nos.");
	document.form1.adharno1.focus();
	return false;
  }
  		  if(document.form1.mono1.value==="")
  {
    alert("Plese Enter Mobile No");
	document.form1.mono1.focus();
	return false;
  }

 
  if(document.form1.address1.value==="")
  {
    alert("Plese Enter Address");
	document.form1.address1.focus();
	return false;
  }


  if(document.form1.pincode1.value==="")
  {
    alert("Plese Enter pincode");
	document.form1.pincode1.focus();
	return false;
  }
 aLen=document.form1.pincode1.value;

  if(aLen.length != 6)
  {
  	alert("please enter valid pincode. must be at 6 nos.");
	document.form1.pincode1.focus();
	return false;
  }
  
    if(document.form1.producttype1.value==="producttype")
  {
    alert("Plese Enter product  type");
	document.form1.producttype1.focus();
	return false;
  } 
  if(document.form1.companyname1.value==="")
  {
    alert("Plese Enter companyname");
	document.form1.companyname1.focus();
	return false;
  } 
  if(document.form1.productname1.value==="")
  {
    alert("Plese Enter productname");
	document.form1.productname1.focus();
	return false;
  }  
  if(document.form1.quantity1.value==="")
  {
    alert("Plese Enter quantity");
	document.form1.quantity1.focus();
	return false;
  }
  
  return true;
}

</script>
</head>
<body>
<form name="form1" action="buyproductcode.php" method="post" onSubmit="return check();">

    
    <h1 style="font-weight: 700; text-align: center" class="style14"><span class="style14" style="font-weight: 700; text-align: center">&nbsp;&nbsp;<img src="img/screen/logo1.jpg" width="180" height="90" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/screen/homehead1.jpg" width="543" height="90" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/screen/logo.jpg" width="180" height="90" /></span></h1>
    <p style="font-weight: 700; " class="style41"> <span class="style29"><span class="style33">
      <input name="button" type="button" class="style6"  id="button" value="Logout" onclick="document.location.href = 'login.php';"  action="login.php"/>
    </span><span class="style29"><span class="style33">
    <?php	
echo $_SESSION["un"]; 
?>
  &nbsp;</span></span><span 
            class="style39"> </span><span class="style40">&nbsp; &nbsp; </span></p>
    <h2 style="font-weight: 700; color: #FFFFFF; height: 36px; background-color: #003300"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="userhome.php"><span class="style34">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="usergallery.php"><span 
            class="style34">Gallery</span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="buyproduct.php"> <span class="style38">Buy Product</span></a>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <a href="myactivities.php"> <span class="style34">My activities</span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
      <input name="text" type="text"  />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="button" type="button" id="Button1" value="Search" />
  </h2>	
			 <?php
extract($_POST);
$con=mysql_connect("localhost","root","") or die("not connect to localhost");
mysql_select_db("myproject",$con)or die("not connect to database");

$cmd="insert into purchaseorder(username,email,adharno,mono,address,pincode,producttype,companyname,productname,quantity)values('$username1','$email1','$adharno1','$mono1','$address1','$pincode1','$producttype1','$companyname1','$productname1','$quantity1')";
$stor=mysql_query($cmd)or die("query not work");

echo "<br/><h1><font  color=red size=6> ";
	
	
	echo "<center><i>Order successfull save";
	
	echo "</i>";
	

	echo "</body></font></center>";

?>
</br>
	
    <table id="customers">
  <tr>
    <th class="style11" colspan="2">
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="style13">&nbsp;&nbsp; Fill the Information for Order&nbsp;</span></th>
    <th class="style11">&nbsp;
        
      </th>
  </tr>
  <tr>
    <td class="style12">Username</td>
    <td class="style15">
                <input id="Text18" name="username1" class="style6" type="text" /></td>
    <td rowspan="9">
                <img alt="" src="img/material/1.jpg" style="height: 383px; width: 325px" /></td>
  </tr>
  <tr>
    <td class="style12">Email</td>
    <td class="style15">
                <input id="Text19" name="email1"class="style6" type="text" /></td>
  </tr>
  <tr>
    <td class="style12">Adhar no</td>
    <td class="style15">
                <input id="Text20" name="adharno1"class="style6" type="text" /></td>
  </tr>
  <tr>
    <td class="style12">Mo No</td>
    <td class="style15">
                <input id="Text21" name="mono1"class="style6" type="text" /><br />
      </td>
  </tr>
  <tr>
    <td class="style12">Address</td>
    <td class="style15">
                <input id="Text22" name="address1"class="style6" type="text" /></td>
  </tr>
  <tr>
    <td class="style12">Pincode</td>
    <td class="style15">
                <input id="Text23" name="pincode1"class="style6" type="text" /></td>
  </tr>
  <tr>
    <td class="style12">Product Type</td>
    <td class="style15">
         <select name="producttype1">
         	<option value="producttype">producttype
            <option value=fertilizer>fertilizer
         	<option value=seeds>seeds   
			<option value=machinery>machinery
			<option value=chemicalssoils>chemicals & soils
			<option value=Agriculturalmaterial>Agricultural materials
        </select>            

			 
  </tr>
  <tr>
    <td class="style12">Company Name</td>
    <td class="style15">
                <input id="Text24" name="companyname1"class="style6" type="text" /></td>
  </tr>
  <tr>
    <td class="style12">Product Name</td>
    <td class="style15">
                <input id="Text25" name="productname1"class="style6" type="text" /></td>
  </tr>
  <tr>
    <td class="style12">Quantity</td>
    <td class="style15">
                <input id="Text26" name="quantity1"class="style6" type="text" /></td>
  </tr>
</table>


    <p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="Button3" type="button" value="back" />&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="Submit2" type="submit" value="order" />&nbsp;&nbsp;&nbsp;&nbsp;

        <input id="Button2" type="reset" value="cancel" /></p>
    <p>&nbsp;
  </p>
    <p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </p>
</form>
</body>
</html>
