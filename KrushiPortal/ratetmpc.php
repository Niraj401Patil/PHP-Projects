<?PHP

	extract($_POST);
	
	$rt = $_GET['id'];
	
	$query="update crop set maize='10' where T_code='$rt'";
    $result=mysqli_query($con,$query);
	
  if($result)  
  { 
   echo"Update Successfull";
  }
?>