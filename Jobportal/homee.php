
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: cornflowerblue;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
	font-size : 20px;
	font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, "serif";
	font:bold;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: green;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>

<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 30%;
    border-radius: 40%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>


</head>

<body bgcolor="#D2DFE3">
<p>&nbsp;&nbsp;<img src="images/imgjob/inner3.jpg" width="500" height="121" alt=""/><img src="images/imgjob/jobsearch.jpg" width="318" height="121" alt=""/><img src="images/imgjob/01-normal.jpg" width="500" height="121" alt=""/></p>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="signup.php">Signup</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li><a href="contactus.php">Contact Us</a></li>

  <li class="dropdown"> 
    <a href="javascript:void(0)" class="dropbtn">Employer Zone</a>
    <div class="dropdown-content">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;</button> </a><br>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Create Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> </a>
     
    </div>
  </li>
  <li><font color="red">The Username or Password is Incorrect<br>
       &nbsp;&nbsp;&nbsp; Please Login Again...</font></li>
</ul>
<p style="font-size: 10px; color: #E70F12;">&nbsp;</p>




<div id="id01" class="modal">
  
  <form class="modal-content animate" method="POST" action="emploginc.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/icons/loginlock.jpg" alt="logo" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="un1" required></input>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="ps1" required></input>
        <button type="submit">Submit</button>
      
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
     
  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      
      <span class="psw"> <a href="empforgotpassword.php">Forgot password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




<div id="id02" class="modal">
  
  <form class="modal-content animate" action="empsignup.php" method="Post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src= "images/icons/signup2.jpg" alt="logo" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
       

      <label><b>Re-EnterPassword</b></label>
      <input type="password" placeholder="Re-Enter Password" name="psw1" required>
       
        <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email-ID" name="email" required>
       
          <label><b>Company</b></label>
      <input type="text" placeholder="Enter company Name " name="cname" required>
        
      <button type="submit">Submit</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
     
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<?php //include("header.php"); ?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css">
	      .style6
        {
            font-size: x-large;
            font-weight: bold;
        }
   
	   #myDIV {
    width: 300px;
    height: 5;
  
}
	</style>


</head>
          
<body bgcolor="#D2DFE3">



<table width="1293" border="0">
  <tbody>
    <tr>
        <td><form name="admin" method="post" action="alogin.php">
          <span style="font-size: large; font-weight: bold; color: #02013B;">Admin</span> <span class="style6" style="color: #27157F">
            <input  type="text" name="uname" placeholder="Username" size="20" maxlength="20">
            <input  type="password" name="pass" placeholder="Password" size="20" maxlength="20">
            <input type="submit" name="submit2" value="Login">
            </span>
        </form>
          <p style="color: #A6181B; font-weight: bolder;">Top Companies</p>
          <p><a href="https://www.tcs.com" target="_blank">tcs</a></p>
          <p><a href="https://www.adobe.com" target="_blank">adobe</a></p>
          <p><a href="https://www.intel.com" target="_blank">intel</a></p>
        <p><a href="https://www.facebook.com" target="_blank">facebook</a></p></td>
      <td width="38" rowspan="5"><p style="color: #A6181B; font-weight: bolder;">&nbsp;      
          </p>
      <p>&nbsp;</p>      <p style="color: #A6181B; font-weight: bolder;">&nbsp;</p>      <p style="color: #A6181B; font-weight: bolder;">&nbsp;</p></td>
        <td><form name="search" action="home.php" method="post">
          <p>
            <input type="text" placeholder="skill,keyword,title" name="skill1">
            <input type="text" placeholder="type of job " name="title1">
            <input type="text" placeholder="experience" name="experience1" id="textfield">
            <input type="text" placeholder="Location"  name="location1" id="textfield2">
          </p>
          <button>search</button>
          </form>
      &nbsp; </p></td>
      <td width="51" rowspan="5">&nbsp;</td>
        <td width="303"><img src="images/companies.gif" width="260" height="307" alt=""/></td>
    </tr>
    <tr>
      <td width="300" rowspan="2"><p style="color: #A6181B; font-weight: bolder;">&nbsp;</p>
        <p>&nbsp;</p>      
        <p style="color: #A6181B; font-weight: bolder;">&nbsp;</p>      
      <p style="color: #A6181B; font-weight: bolder;">&nbsp;</p>      <p style="color: #A6181B; font-weight: bolder;">&nbsp;</p></td>
      <td>&nbsp;</td>
      <td width="303">&nbsp;</td>
    </tr>
    <tr>
      <td height="31" bgcolor="#D2DFE3"><p>
        
        <marquee behavior="scroll" direction="up" loop="-1" scrollamount="4" 
                scrolldelay="100" onmouseover="this.stop();" onmouseout="this.start();" 
                height="268px" 
                style="height: 350px; color: #000066; background-color:#D2DFE3; font-size: x-large; font-style: italic; font-weight: 700;">
          
          
          <?php
extract($_POST);
$conn=mysqli_connect("localhost","root","","jobportal") or die("Could not Connect My Sql");
		
	/*
	$show= "select * from jobdetail";
	$result=mysqli_query($conn,$show);
	while($rows=mysqli_fetch_array($result))
	{
		 echo "<font size ='4px' color='Blue'> Job Title :</font> "; 
	   echo("<font color='Black'>");
	   echo "<font color='red'>";
		echo  $rows['title'];
	   echo "</font>";
	   echo("<br>");
	}*/
		
//mysqli_select_db("jobportal",$cn)  or die("Could connect to //Database");
$skill1=$_POST['skill1'];
$title1=$_POST['title1'];
$exp=$_POST['experience1'];
$loc=$_POST['location1'];
			
if(!$skill1)
{
			
}
if($skill1 && $title1 || $exp ||$loc )
{
	$show= "select * from jobdetail where title='$title1' or
	skill ='$skill1' and experience='$exp' or location='$loc' " ;
    $result=mysqli_query($conn,$show);
	
   while($rows=mysqli_fetch_array($result))
   {
	    echo "<font size ='4px' color='Blue'> Job Title :</font> "; 
	   echo("<font color='Black'>");
	   echo "<font color='red'>";
		echo  $rows['title'];
	   echo "</font>";
	   echo("<br>");
	   
	   echo "<font size ='4px' color='Blue'>  Key skill :</font> ";
	   echo $rows['skill'];
	   echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> discription :</font> ";
	      echo $rows['discription'];
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> Sallery :</font> ";
	      echo $rows['sallery'];
	    
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> qualification :</font> ";
	   echo $rows['qualification'];
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> company :</font> ";
	     echo $rows['company'];
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> type :</font> ";
	     echo $rows['type'];
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> experience :</font> ";
	      echo $rows['experience'];
	   		echo("<br>");
	   echo("</font>");
	   echo ("<br><br>");
   }
}
			else if (!($skill1 && $title1 && $loc && $exp))
			{
				$show= "select * from jobdetail";
				   $result=mysqli_query($conn,$show);
	
   while($rows=mysqli_fetch_array($result))
   {
	    echo "<font size ='4px' color='Blue'> Job Title :</font> "; 
	   echo("<font color='Black'>");
	   echo "<font color='red'>";
		echo  $rows['title'];
	   echo "</font>";
	   echo("<br>");
	   
	   echo "<font size ='4px' color='Blue'>  Key skill :</font> ";
	   echo $rows['skill'];
	   echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> discription :</font> ";
	      echo $rows['discription'];
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> Sallery :</font> ";
	      echo $rows['sallery'];
	    
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> qualification :</font> ";
	   echo $rows['qualification'];
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> company :</font> ";
	     echo $rows['company'];
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> type :</font> ";
	     echo $rows['type'];
	   		echo("<br>");
	   
	   
	   echo "<font size ='4px' color='Blue'> experience :</font> ";
	      echo $rows['experience'];
	   		echo("<br>");
	   echo("</font>");
	   echo ("<br><br>");
			}
				
			}

				else 
{
	echo("<font color='red' >not found</font>");
	
}
?></marquee>
      </p></td>
      <td width="303">&nbsp;</td>
    </tr>
    <tr>
      <td width="300">&nbsp;</td>
      <td rowspan="2"><p>&nbsp;</p>
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
      <td width="303">&nbsp;</td>
    </tr>
    <tr>
      <td width="300" height="21">&nbsp;</td>
      <td width="303">&nbsp;</td>
    </tr>
  </tbody>
</table>

</body>
</html>
<?php include("footer.php"); ?>