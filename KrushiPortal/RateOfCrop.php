<?php

require_once("config.php");
ERROR_REPORTING(E_ALL^E_NOTICE); 
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Crop rate</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
<style>
.mySlides {display:none;
	
	height: 200px;
	width:500px;
	}
</style>
	<script>
   function getdistrict(val) {
	document.getElementById("state").style.borderColor="rgb(0,200,0)";
	$.ajax({
	type: "POST",
	url: "get_district.php",
	data:'state_id='+val,
	success: function(data){
		$("#district-list").html(data);
	}
	});
}
function gettal(val) {
	document.getElementById("district-list").style.borderColor="rgb(0,200,0)";

	$.ajax({
	type: "POST",
	url: "get_tal.php",
	data:'state_id='+val,
	success: function(data){
		$("#tal_list").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}

function talchange()
{	document.getElementById("tal_list").style.borderColor="rgb(0,200,0)";
}

function cropchange()
{	document.getElementById("cropratel").style.borderColor="rgb(0,200,0)";
}

function onsub(){
 var ster="hello";
 var _state = document.getElementById("state").value;
 var _dist = document.getElementById("district-list").value;
 //var ster="hello";
 var _Tal  = document.getElementById("tal_list").value;
 var _crop = document.getElementById("cropratel").value;
 
 if(_state=="")
 {
	 //alert("please select state");
	//document.getElementById("stateer").innerHTML=ster;
	document.getElementById("state").style.borderColor="#FF0000";
	document.getElementById("state").focus();
     return false;
 }
 else if(_dist=="")
 {
	 //alert("please select District");
	document.getElementById("district-list").style.borderColor="#FF0000";
    
     return false;
 }
  else if(_Tal=="")
 {
	 //alert("please select Market");
	document.getElementById("tal_list").style.borderColor="#FF0000";
    
     return false;
 }
   else if(_crop=="")
 {
	 //alert("please select Crop");
	document.getElementById("cropratel").style.borderColor="#FF0000";
    
     return false;
 }
 
}

  </script>	
   <style>
   .ratbtn{
	height:40px;
	width:50%;
	color:rgb(255,255,255);
	background-color:rgb(100,200,200);
    }
	
	
	
	.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }

.form-control2{
	width:40%;
	background-color:rgb(224,240,225);
	border-radius: 15px;
}
   .form-control1 {	width:40%;
	background-color:rgb(224,240,225);
	border-radius: 15px;
}
.hhhh{
height:900px;	
}
   </style>
 </head>
	
	<body>
	<?PHP include "header.php";?>

    <div class="container-fluid" style="height: 100px">
    <div class="col-sm-8" style="width: 500px">
    <div class="row">
    <div class="col-xs-12">
        <h3>Find Crop Rate in Diffrent Markets in India </h3>
	<hr>
  <form name="insert" action="RateOfCrop.php" method="post" onsubmit="return onsub();">
  <table width="142%" height="117"  border="0">
  <tr>
    <th width="6%" rowspan="5" scope="row">&nbsp;
      </th>
    <th width="28%" scope="row">Select Sate </th>
	
    <td width="59%"><p>&nbsp;</p>
      <p>     <select onChange="getdistrict(this.value);"  name="state" id="state" 
	  class="form-control" >
      <option value="">Select State</option>
      <br>
      <?php $query =mysqli_query($con,"SELECT * FROM state");
  while($row=mysqli_fetch_array($query))
  { ?>
      <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
      <?php
  }
  ?>
    </select>   <span id="stateer"></span></p></td>
    <td width="2%" rowspan="5">&nbsp;</td>
    <td width="5%" rowspan="5">&nbsp;
    
    
    </td>
  </tr>
  
	<tr>
	  <th scope="row">Select District </th>
	  <td><select name="district" id="district-list" class="form-control" 
	onChange="gettal(this.value);" >
	    <option value="">Select District</option>
	    </select></td>
	  </tr>
	<tr>
	  <th scope="row">Select Market</th>
	  <td><br>
	    <select name="tal" id="tal_list" class="form-control"
	onChange="talchange();">
	      <option value="">Select Market</option>
	      </select></td>
	  </tr>

	<tr>
	  <th scope="row">Select Crop </th>
	  <td><br>
	    <select name="Cropname" id="cropratel" class="form-control" onChange="cropchange();">
	      <option value="">Select Crop</option>
	      <option value="Bajra">Bajra</option>
		  <option value="Banana">Banana</option>
		  <option value="maize">maize</option>
		  <option value="Moong">Moong</option>
		  <option value="Onion">Onion</option>
		  <option value="rice">rice</option>
		  <option value="Sugarcane">Sugarcane</option>
		  <option value="SunFlower">SunFlower</option>
	
	      </select></td>
	  </tr>
	<tr>
	  <th scope="row"></th>
	  <td><br>
	    <input type="submit" value="go" name=" nm"  class="ratbtn"/></td>
	  </tr>
	<tr>
	  <th scope="row"></th>
	  <th scope="row"></th>
	<th scope="row"><?php
	require_once("config.php");
	extract($_POST);
	if(isset($nm))
	{

	$query =mysqli_query($con,"SELECT $Cropname , T_name FROM crop WHERE T_code =$tal ");
	while($row=mysqli_fetch_array($query))  
	{
	
	echo '<h4><u>';
	echo ("The Rate of &nbsp  <b>$Cropname</b> &nbsp in &nbsp");
	
	echo "<b>";
	echo $row["T_name"];
	echo ("</b>&nbsp is : &nbspRs. &nbsp");
	echo '<font color="green"><b>';
    echo $row[0];
	echo  "</b>";
	echo ("/Kg."); 
	echo "</font></b>";
	echo '</h4></u>'; 
	}
	}
	?></th>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	</table>
  </form>
 
	  </div>
    </div> 
  </div>
    
    <p>&nbsp;</p>

		
   <div class="hhhh" >
        <img class="mySlides" src="img/i1.jpg" style="width:50%; height:40%;">
        <img class="mySlides" src="img/logo1.jpg" style="width:50%; height:40%;">
        <img class="mySlides" src="img/crops/4.jpg" style="width:50%; height:40%;">
  </div>
		
		
		
    <p>&nbsp;</p>
    </div>
<br>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>
<?PHP include"footer.php";?>
</body>
</html>
