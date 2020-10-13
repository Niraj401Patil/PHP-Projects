<?PHP require_once "employerhome.php";?>
  <?php
extract($_POST);
$con=mysql_connect("localhost","root","") or die("not connect to localhost");
mysql_select_db("jobportal",$con)or die("not connect to database");
/*
$cc=mysql_query("select * from jobseeker where username='$lid'");
if (mysql_num_rows($cc)>0)
{
	echo "Same Username Already Exists Please Change your Username</br>Go Back";
	exit;
}*/

$cmd="insert into employer
(username,password,email,company,address,contact)   values   ('$name','$pass','$email','$cname','$address1','$contactno')";
	
$stor=mysql_query($cmd)or die("query not work");
echo "<h2><font color='green' >Your Account is successfully created </font></h2>";
if($stor)
{
	
		$_SESSION["un"] = $name;
		//header("location: employerhome.php");
	 require_once "employerhome.php";
}


?>
<?PHP
//require_once "home.php";

?>