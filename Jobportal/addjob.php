<?PHP 
include("empheader.php");
	?>

 <html>
 	<head>
 		<title></title>
 	</head>
 	
<body bgcolor="#D2DFE3">
 <form name="add" action="addjob.php" method="post">
  <p> Add your Job </p>
  <table width="521" height="382" border="0" align="left">
    <tbody>
      <tr>
        <td width="29">&nbsp;</td>
        <td width="129" style="color: #1D0808"><label for="textfield">Title</label></td>
        <td width="267"><input type="text" name="title1" id="textfield"></td>
        <td width="78">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="color: #1D0808">Skill</td>
        <td><input type="text" name="skill1" id="textfield2"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="color: #1D0808"><label for="textfield6"><br>
        Discription</label></td>
        <td><textarea maxlength="50" rows="3" cols="50"input type="text" name="discription1" id="textfield3"></textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="color: #1D0808">Sallery</td>
        <td><input type="text" name="sallery1" id="textfield6"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="color: #1D0808"><label for="textfield7">Location</label></td>
        <td><input type="text" name="location1" id="textfield4"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="color: #1D0808"><label for="textfield9">Qualification</label></td>
        <td><input type="text" name="qualification1" id="textfield5"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="color: #1D0808">company</td>
        <td><input type="text" name="company1"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="color: #1D0808"><p>type</p>
        <p></p></td>
        <td><input type="text" name="type1"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td style="color: #1D0808">experience</td>
        <td><input type="text" name="experience1"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit1" id="submit2" value="Add">
        <input type="reset" name="reset" id="reset" value="cancle"></td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</form>
</body>

 </html>
	


	<?php
extract($_POST);

{
	$con=mysql_connect("localhost","root","") or die("not connect to localhost");
         mysql_select_db("jobportal",$con)or die("not connect to database");

	//$fp=addslashes(file_get_contents($_FILES['img']['tmp_name']));
	
	$cmd1="insert into jobdetail(title,skill,discription,sallery,location,qualification,company,type,experience)  values ('$title1','$skill1','$discription1','$sallery1','$location1','$qualification1','$company1','$type1','$experience1')";

	$rs1=mysql_query($cmd1)or die("Could Not Perform the Query");
	echo "<font color='green'>Your Job Add Sucessfully...</font>";
}

?>
