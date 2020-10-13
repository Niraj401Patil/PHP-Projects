<?php include("header.php"); ?>
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