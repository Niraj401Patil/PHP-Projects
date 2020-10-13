 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}
.content {
  padding: 16px;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
divim {
    width: 100%;
    height: 400px;
    background-image: url('img/screen/logo1.jpg');
    background-size: 100% 100%;
    border: 1px solid red;
}
.headf{
  font-weight: xx-large;
   color: white;
  font-size: 50px;
  
   
}

	</style>
	</head>
	<body bgcolor="">
	<div class="header" style="background-image: url('img/background/grass.jpg');">
  <h2><span class="headf">Krushi Portal </span></h2>
  
</div>
    <div id="navbar">
	<nav  class="navbar navbar-inverse ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
	  <li><a href="RateOfCrop.php">Rate Of Crop</a></li>
      <li><a href="ContactUs.php">Contact Us</a></li>
	  <li><a href="AboutUs.php">AboutUs</a></li>
          <li><a href="UserLogin.php">Login</a></li>
          <li><a href="SignupPage.php">SignUp</a></li>
		    <li><a href="SellerLogin.php">SellerPanel</a></li>
    </ul>
</div>
</nav>
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
	