
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
    background-color:cornflowerblue;
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
    background-color:green;
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

<body>
<p>   &nbsp;&nbsp;<img src="images/imgjob/inner3.jpg" width="500" height="121" alt=""/><img src="images/imgjob/jobsearch.jpg" width="318" height="121" alt=""/><img src="images/imgjob/01-normal.jpg" width="500" height="121" alt=""/></p>
<ul>
  <li><a href="ahome.php">Home</a></li>
  <li><a href="ajobseeker.php">Jobseekers</a></li>
  <li><a href="aemployer.php">Employers</a></li>
  <li><a href="ajobdetail.php">Jobdetails</a></li>
  <li><a href="ajobApplied.php">Job Applied</a></li>
   <li><a href="afeedback.php">Feedback</a></li>
  <li></li>
  <li></li>
  <li class="dropdown">
    <div class="dropdown-content">
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;</button> </a><br>
      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Create Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button> </a>
     
    </div>
  </li>
  
</ul>
<p style="font-size: 10px; color: #E70F12;">&nbsp;</p>


</body>
</html>
