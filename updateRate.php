

<?PHP include("Aheader.php");?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<script>
function validation(){
	//alert("hello");
	//document.getElementById("mz").style.borderColor="rgb(0,200,0)";
}
</script>
<style>

input[type=text]{width:100px;
text-align: right;
}
</style>
</head>
<body>
<form name="rate" action="updateRate.php" method="POST">

    <font color="green"><h2>Update crop Rate</h2></font>
<?PHP


require_once("config.php");
	extract($_POST);
	
	$rs="select * FROM crop  ";
	$query =mysqli_query($con,$rs);
	if(mysqli_num_rows($query))  
	{
	echo "<table border='1px' class='table table-hover'>";
    echo "<tr><th>no</th><th>Market</th><th>Maize</th><th>Rice</th>
	<th>Sugarcane</th><th>Bajra</th><th>Onion</th><th>Banana</th>
	<th>SunFlower</th><th>Moong</th></tr>";

	while($row=mysqli_fetch_array($query))
	{
		 $tcode=$row["T_code"];
         $Nhead=$row["T_name"];
		 $maize1=$row["maize"];
		echo "<tr>";
		echo "<td>";
        echo  $row["T_code"];
		echo "</td>";
		echo "<td>";
		echo  $row['T_name'];
		echo "</td>";	
		echo "<td>";
		?>
		<input type="hidden" id="mz" name="hide[]" value="<?php echo $row[0] ?>">
		<input type="text" name="maizu[]" value="<?php echo $row[2] ?>" onkeypress="validation(this.value)">
		<?php
		echo "</td>";	

		echo "<td>";
		?>
		<input type="text" name="ricer[]" value="<?php echo $row[3] ?>" onkeypress="validation()">
		<?php
		echo "</td>";
		
		echo "<td>";
		?>
		<input type="text" name="Sug[]" value="<?php echo $row[4] ?>">
		<?php
		echo "</td>";
		
				echo "<td>";
		?>
		<input type="text" name="Bajra1[]" value="<?php echo $row[5] ?>" onkeypress="validation(this.value)">
		<?php
		echo "</td>";	

		echo "<td>";
		?>
		<input type="text" name="Onion1[]" value="<?php echo $row[6] ?>" onkeypress="validation()">
		<?php
		echo "</td>";
		
		echo "<td>";
		?>
		<input type="text" name="Banana1[]" value="<?php echo $row[7] ?>">
		<?php
		echo "</td>";
		
				echo "<td>";
		?>
		<input type="text" name="SunFlower2[]" value="<?php echo $row[8] ?>">
		<?php
		echo "</td>";
		
				echo "<td>";
		?>
		<input type="text" name="Moong1[]" value="<?php echo $row[9] ?>">
		<?php
		echo "</td>";
	
		echo "</tr>";
		
	}

	}
		echo"<tr><th></th><th></th>";
		echo "<th>";
		echo '<input type="submit" name="updat1" value="Maize"/>';
		echo "</th>";
		echo "<th>";
	    echo '<input type="submit" name="rice1" value="Rice"/>';
		echo "</th>";
		echo "<th>";
	    echo '<input type="submit" name="sugar" value="Sugarcane"/>';
		echo "</th>";
		
		echo "<th>";
		echo '<input type="submit" name="Bjb" value="Bajra"/>';
		echo "</th>";
		echo "<th>";
	    echo '<input type="submit" name="Onb" value="Onion"/>';
		echo "</th>";
		echo "<th>";
	    echo '<input type="submit" name="Bab" value="Banana"/>';
		echo "</th>";
		echo "<th>";
	    echo '<input type="submit" name="Sun" value="SunFlower1"/>';
		echo "</th>";
		echo "<th>";
	    echo '<input type="submit" name="Mon" value="Moong"/>';
		echo "</th>";
		echo "</tr>";
		echo "</table>";
	
?>
</form>
<?PHP
if(isset($_POST['updat1']))
{
	extract($_POST);
  for($i=0;$i<32;$i++)
  {
	$up="update crop set maize='$maizu[$i]' where T_code='$hide[$i]'";
    $res=mysqli_query($con,$up);
  }
  ?>
  <script>
  location.href="updateRate.php";
  </script>
  <?php
}
if(isset($_POST['rice1']))
{
	extract($_POST);
  for($i=0;$i<32;$i++)
  {
	$up="update crop set rice='$ricer[$i]' where T_code='$hide[$i]'";
    $res=mysqli_query($con,$up);
  }
  ?>
  <script>
  location.href="updateRate.php";
  </script>
  <?php
}
if(isset($_POST['sugar']))
{
	extract($_POST);
  for($i=0;$i<32;$i++)
  {
	$up="update crop set Sugarcane='$Sug[$i]' where T_code='$hide[$i]'";
    $res=mysqli_query($con,$up);
  }
  ?>
  <script>
  location.href="updateRate.php";
  </script>
  <?php
}

if(isset($_POST['Bjb']))
{
	extract($_POST);
  for($i=0;$i<32;$i++)
  {
	$up="update crop set Bajra='$Bajra1[$i]' where T_code='$hide[$i]'";
    $res=mysqli_query($con,$up);
  }
  ?>
  <script>
  location.href="updateRate.php";
  </script>
  <?php
}
 if(isset($_POST['Onb']))
{
	extract($_POST);
  for($i=0;$i<32;$i++)
  {
	$up="update crop set Onion='$Onion1[$i]' where T_code='$hide[$i]'";
    $res=mysqli_query($con,$up);
  }
  ?>
  <script>
  location.href="updateRate.php";
  </script>
  <?php
}
 if(isset($_POST['Bab']))
{
	extract($_POST);
  for($i=0;$i<32;$i++)
  {
	$up="update crop set Banana='$Banana1[$i]' where T_code='$hide[$i]'";
    $res=mysqli_query($con,$up);
  }
  ?>
  <script>
  location.href="updateRate.php";
  </script>
  <?php
}
 if(isset($_POST['Sun']))
{
	extract($_POST);
  for($i=0;$i<32;$i++)
  {
	$up="update crop set SunFlower='$SunFlower2[$i]' where T_code='$hide[$i]'";
    $res=mysqli_query($con,$up);
  }
  ?>
  <script>
  location.href="updateRate.php";
  </script>
  <?php
}
?>
</body>
</html>