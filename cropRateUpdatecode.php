<?PHP
session_start();
extract ($_POST);
include "header.php";
require_once("config.php");

  $Nheadi=$_SESSION["Nheading"];

  $news_id = $_GET['id1'];

  $query="SELECT * FROM crop where '$news_id'";
  $result=mysqli_query($con,$query);
  if(mysqli_num_rows($result)>0)  
  { 
    echo "$news_id";
	  
	  //$rse1="update crop set $news_id='11'";
	   $rse= "update crop set rice ='1'  where  rice='$news_id' ";
	
	  $ss=mysqli_query($con,$rse);
	  if($ss){
		  echo "success";
	  }
	  else{
		  echo "unsuccess";
	  }
	  
  }
   
?>
