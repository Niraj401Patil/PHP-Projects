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
.imgsel11{
  border-radius: 50%;
}
</style>
</head>

<body bgcolor="green">
	<div class="header" style="background-image: url('img/background/grass.jpg');">
  <h2><span class="headf">Krushi Portal </span></h2>

</div>
 <div id="navbar">
<nav class="navbar navbar-inverse" role="navigation">  
  <div class="navbar-header">     
  <a class="navbar-brand" href="#">Seller</a>   
  </div><div>
  <ul class="nav navbar-nav">    
  <li> <a href="sellerhome.php" class="style64">Home</a></li> 
  <li><a  href="orderrequest.php">Order request</a></li>
   <li><a href="productentry.php">Product Entry</a></li>
  <li class="divider"></li>
     
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <input name="Submit2" class="btn-danger" type="button" class="style62"  
	  onclick="document.location.href = 'logoutseller.php';" value="Logout"  />   
	  <?php	
	       include"config.php";
		   $unm=$_SESSION["uns"];
			 if ($_SESSION["uns"]==null)
			 {
			     header("location:SellerLogin.php");
			 }
			 else
			 {
				 echo "<font color='white' >";
			 	echo $_SESSION["uns"]; 
				echo "</font >";
			 }

			?>
			
			               <?PHP 
                $qur1="select * from sellermaster where username='$unm'";
             $rs1=mysqli_query($con,$qur1);
			 
		      if(mysqli_num_rows($rs1)>0)
	            {
					$row=mysqli_fetch_array($rs1);
					$checki=$row['SPimg'];
				}
			       if($checki)
				   {		
                   echo '<img  class="imgsel11" style="height: 50px; width: 50px"
				   src="data:image/jpeg;base64,'
	              .base64_encode($row['SPimg']).'"/>';
			
				   }
				   else{
					   echo '<img srcset="userlogo2.png" class="imgsel11" style="height:
					   50px; width: 50px">';
				  
				   }
             ?>

	  </form>     
  <li class="divider"></li>   
 
    </ul> 
	</div>
	</nav>
	</div>
	<div class="content">
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






