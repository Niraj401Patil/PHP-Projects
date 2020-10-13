
<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>
    <style type="text/css">


        a{
    text-decoration: none;
            color: #FFFFFF;
        }
a :link {color:#ff0000;}
a :visited {color: Green}
a :hover {color: Red}

a.two:link {color:#ff0000;}
a.two:visited {color:#0000ff;}
a.two:hover {font-size:150%;}
        #Button2
        {
            color: #FFFFFF;
            font-weight: 700;
            background-color: #FF0000;
        }
        .style2
        {
            color: #FF0000;
            font-size: x-large;
        }
        .style3
        {
            color: #000066;
            font-size: x-large;
            font-weight: bold;
        }
        .style4
        {
            color: #FF9933;
        }
        .style13
        {
            width: 98px;
            color: #000066;
            height: 25px;
        }
        .style14
        {
            width: 162px;
            color: #000066;
            height: 25px;
        }
        .style15
        {
            width: 112px;
            color: #000066;
            height: 25px;
        }
        .style16
        {
            color: #000066;
            height: 25px;
        }
        .style7
        {
            width: 98px;
            color: #000066;
        }
        .style12
        {
            width: 162px;
            color: #000066;
        }
        .style11
        {
            color: #000066;
        }
        .style17
        {
            color: #000066;
            height: 25px;
            width: 109px;
        }
        .style18
        {
            color: #000066;
            width: 109px;
        }
        .style19
        {
            color: #000066;
            font-size: x-large;
            font-weight: bold;
            width: 112px;
        }
        .style20
        {
            width: 142px;
            color: #000066;
            height: 25px;
        }
        .style21
        {
            width: 142px;
            color: #000066;
        }
        .style23
        {
            color: #000066;
            width: 127px;
        }
        .style24
        {
            width: 127px;
            color: #000066;
            height: 25px;
        }
        .style25
        {
            color: #000066;
            height: 25px;
            width: 84px;
        }
        .style26
        {
            color: #000066;
            width: 84px;
        }
        .style27
        {
            color: #000000;
            height: 25px;
            font-weight: bold;
            font-size: medium;
        }
        .style28
        {
            width: 142px;
            color: #000000;
            height: 25px;
            font-weight: bold;
            font-size: medium;
        }
        .style29
        {
            width: 127px;
            color: #000000;
            height: 25px;
            font-weight: bold;
            font-size: medium;
        }
        .style30
        {
            color: #000000;
            height: 25px;
            width: 84px;
            font-weight: bold;
            font-size: medium;
        }
        .style31
        {
            color: #000000;
            height: 25px;
            width: 109px;
            font-weight: bold;
            font-size: medium;
        }
        .style32
        {
            width: 112px;
            color: #000000;
            height: 25px;
            font-weight: bold;
            font-size: medium;
        }
        .style33
        {
            width: 162px;
            color: #000000;
            height: 25px;
            font-weight: bold;
            font-size: medium;
        }
        .style34
        {
            width: 98px;
            color: #000000;
            height: 25px;
            font-weight: bold;
            font-size: medium;
        }
        </style>
</head>
<body style="color: #FFFFFF">

    <p style="height: 105px; width: 1179px">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                        <img alt="" 
                src="img/screen/logo1.jpg" style="height: 92px; width: 164px" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img alt="" src="img/screen/homehead1.jpg" 
                style="height: 94px; width: 650px; margin-left: 0px;" />&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
                        <img alt="" 
                src="img/screen/logo.jpg" style="height: 91px; width: 163px" />&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
    <p style="height: 27px; width: 1179px; text-align: center;">
        <span class="style2">&nbsp;</span><span class="style3">
     <?php	
		 if ($_SESSION["un"]==null)
			 {
			     header("location:home.php");
			 }
			 else
			 {
			 	echo $_SESSION["un"]; 
			 }
			?>
			</span>&nbsp;
        <input id="Button2" type="button" value="logout" onclick="document.location.href = 'logout.php';"/></p> <h2 style="height: 35px; width: 1184px; color: #FFFFFF; background-color: #000000">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <a href="userlist.php">Userlist</a>&nbsp; &nbsp;&nbsp;&nbsp;<a 
            href="sellerlist.php" class="style4">Sellerlist</a>&nbsp; &nbsp;&nbsp; <a href="Acomplaint.php">Complaints</a>&nbsp;&nbsp;&nbsp;&nbsp; 
        <a href="Afeedback.php">Feedback</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="productlist.php"> Productlist</a>&nbsp;&nbsp;&nbsp; 
        <a href="orderlist.php">Orderlist</a>&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="Text1" type="text" />&nbsp;&nbsp;
        <input id="Button1" type="button" value="Search" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </h2>
  
<?php
extract($_POST);
$cn=mysql_connect("localhost","root","") or die("Could not Connect My Sql");
mysql_select_db("myproject",$cn)  or die("Could connect to Database");
$query = "SELECT username,companyname,email,password,mono,address,pincode,city,state,securityquesion,securityanswer FROM sellermaster";
$result = mysql_query($query) or trigger_error("SQL",E_USER_ERROR);
echo "<body background=four.jpg>";

echo "<center><font color=blue><u><i><h1>Sellerlist</h1></i></u></font></center>";
echo "<center>";


echo "<table bgcolor=darkblue  border='1'>";

echo "<tr><th>username.</th><th>companyname.</th><th>email.</th><th>password.</th><th>mono.</th><th>address.</th><th>pincode.</th><th>city.</th><th>state.</th><th>securityquesion.</th><th>securityanswer</th>";

echo "</tr>";
while($row = mysql_fetch_array($result))
{
	
echo "<tr><td>";
	echo $row['username'];
	echo "</td><td>";
	echo $row['companyname'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['password'];
	echo "</td><td>";
		echo $row['mono'];

	echo "</td><td>";
	echo $row['address'];
	
	echo "</td><td>";
	echo $row['pincode'];

	echo "</td><td>";
	echo $row['city'];
	
	echo "</td><td>";
	echo $row['state'];
	
	echo "</td><td>";
	echo $row['securityquesion'];	
	
	echo "</td><td>";
	echo $row['securityanswer'];		
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
echo "</center>";
echo "</body>"

?>
    
</body>
</html>
