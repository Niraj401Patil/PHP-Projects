<?PHP
ERROR_REPORTING(E_ALL^E_NOTICE); 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.textt{
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
     }
	.textareat{
		width: 90%;
		height:300px; 
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
		
	}
	</style>
</head>

<body>
<?PHP include "Aheader.php" ?>


<h2>Update the news</h2>
<form name="news" method="POST" action="newsUpdate.php" >

&nbsp;<input type="text" name="ID1" placeholder="ID" required class="textt"><br>
&nbsp;<input type="text" name="Heading" placeholder="Heading" required class="textt"></br>
&nbsp;<textarea name="Description" placeholder="Description" required class="textareat"></textarea>
</br>
&nbsp;<input type="submit" name="btn" value="submit">
</form>
<?PHP 

      require_once("config.php");
      extract($_POST);
      $query = "SELECT * FROM news where id='$ID1'" ;
      $result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
     $cc="update news set heading='$Heading'  where  id='$ID1' ";
	 $dd= "update news set newsDescrition ='$Description'  where  id='$ID1' ";
	 $rs1=mysqli_query($con,$cc)or die("Could Not Perform the Query");
	 $rs2=mysqli_query($con,$dd)or die("Could Not Perform the Query");
		echo "<font color=blue><i>Your news updated successfully !!!</i></font>";
}
else
{
	$add="insert into news(id,heading,newsDescrition)values($ID1,'$Heading','$Description')";
	$result=mysqli_query($con,$add);
	echo "<font color=blue><i>Your news Inserted successfully !!!</i></font>";
}

?>
</body>
</html>