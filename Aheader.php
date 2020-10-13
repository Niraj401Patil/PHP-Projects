<?PHP
session_start();

?>

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
</style>
</head>

<body bgcolor="green">
	<div class="header" style="background-image: url('img/background/grass.jpg');">
  <h2><span class="headf">Krushi Portal </span></h2>

</div>
 <div id="navbar">
<nav class="navbar navbar-default" role="navigation">  
  <div class="navbar-header">     
  <a class="navbar-brand" href="#">Admin</a>   
  </div><div>
  <ul class="nav navbar-nav">    
  <li><a href="adminhome.php">home</a></li> 
  <li><a href="newsUpdate.php">NewsUpdate</a></li>
   <li><a href="updateRate.php">updateRate</a></li>
  <li class="divider"></li>
  <li><a href="Afeedback.php">Feedback</a></li> 
  <li class="divider"></li> 
    <form class="navbar-form navbar-left" role="search">      
	  <div class="form-group">    
	  <input type="text" class="form-control" placeholder="Search">   
	  </div>          
	  <button type="submit" class="btn btn-default">Search</button>  
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   <input id="Button2" class="btn-danger" type="button" value="Logout" onclick="document.location.href = 'logout.php';"  action="logout.php"/>
     
    <?php	
			 extract($_POST);
     include "config.php";
			 if ($_SESSION["unm"]==null)
			 {
			     header("location:home.php");
			 }
			 else
			 {
			 	$unm=$_SESSION["unm"]; 
			 	echo $unm;
			 }?>
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

