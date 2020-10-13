<!doctype html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
.headf{
  font-weight: xx-large;
   color: white;
}
divim {
    width: 100%;
    height: 400px;
    background-image: url('img/screen/logo1.jpg');
    background-size: 100% 100%;
    border: 1px solid red;
}


.outImgM{		
		height: 20px;
		width: 30px;
		background: gold;
		box-shadow: 1px 1px green;
		box-sizing: border-box;
		border-radius: 30px;
		} .inImgM{
		height: 20PX;
		width: 30PX;
		background: green;
		border-radius: 30px;
			
		}
		.imgch{
			border-radius: 50%;
		}
</style>
</head>

<body bgcolor="green">
	<div class="header" style="background-image: url('img/background/grass.jpg');">
  <h2><span class="headf">Krushi Portal </span></h2>

</div>
 <div id="navbar">
<nav class="navbar navbar-default" role="navigation">  
  <div class="navbar-header">     
  <a class="navbar-brand" href="#">User</a>   
  </div><div>
  <ul class=" nav nav-pills">    
  <li><a href="userhome.php">Home</a></li> 
  <li><a href="usergallery.php">Gallery</a></li>
 <li> <a href="myactivities.php">myactivities</a></li>
  <li class="divider"></li>
      <form class="navbar-form navbar-left" role="search">      
	 
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   <input id="Button2" class="btn-danger" type="button" value="Logout" onclick="document.location.href = 'logoutu.php';"  action="logoutu.php"/>
     
    <?php	
			 extract($_POST);
     include "config.php";
			 if ($_SESSION["un"]==null)
			 {
			     header("location:UserLogin.php");
			 }
			 else
			 {
			 	$unm=$_SESSION["un"]; 
			 	echo $unm;
			 }?>
               <?PHP 
                $qur1="select * from usermaster where username='$unm'";
             $rs1=mysqli_query($con,$qur1);
			 
	           if(mysqli_num_rows($rs1)>0)
	            {
					$row=mysqli_fetch_array($rs1);
					$checki=$row['UPimg'];
				}
			       if($checki){		
                   echo '<img  class="imgcl" style="height: 50px; width: 50px"
				   src="data:image/jpeg;base64,'
	              .base64_encode($row['UPimg']).'"/>';
			
				   }
				   else{
					   echo '<img srcset="userlogo2.png" class="imgcl" style="height:
					   50px; width: 50px">';
				  
				   }
             ?>   
 
	  </form> 
  <li class="divider"></li>   
 
    </ul> 
	</div>
	</nav>
	</div>
	</div>
	<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>