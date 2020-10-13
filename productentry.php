<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>
    <style type="text/css">

    </style>
	
	</script>
<script language="javascript">
function check()
{
 if(document.form1.producttype.value==="producttype")
  {
    alert("Plese Select Product Type");
	document.form1.producttype.focus();
	return false;
  }

   if(document.form1.productname.value==="")
  {
    alert("Plese Enter Your Product Name");
	document.form1.productname.focus();
	return false;
  }
   if(document.form1.detail.value==="")
  {
    alert("Plese fill Product Detail");
	document.form1.detail.focus();
	return false;
  }
 if(document.form1.price.value==="")
  {
    alert("Plese Enter Price of Product ");
	document.form1.price.focus();
	return false;
  }
  if(document.form1.img.value==="")
  {
    alert("Plese Select Image of Product ");
	document.form1.img.focus();
	return false;
  }
  return true;
}
  </script>
</head>
<body>
<?PHP include "Sheader.php";?>
  <br>  <br>
        <h3><span class="" >Add Your Product:</h3>
		<br></span>
       <?php	
			 if ($_SESSION["uns"]==null)
			 {
			     header("location:SellerLogin.php");
			 }
			 else
			 {
			 	$_SESSION["uns"]; 
			 }
			?>
 <?php
 $compname=$_SESSION["compn"];
extract($_POST);
if (isset($_POST['subm1']))
{
	
	echo "<font color='green'>Your Product Add Sucessfully...</font>";
require_once "config.php";
	$fp=addslashes(file_get_contents($_FILES['img']['tmp_name']));
	
	$cmd1="insert into productmaster(producttype,companyname,productname,detail,price,productimage)
	values('$producttype','$compname','$productname','$detail','$price','$fp')";
	$rs1=mysqli_query($con,$cmd1);
	IF($rs1){
	echo "<font color='green'>Your Product Add Sucessfully...</font>";
	}else{echo "error";}
}

?>
<? echo "$compname"; ?>
<form action="productentry.php" method="post" enctype="multipart/form-data" name="form1" onSubmit="return check();">
 <table class="table table-striped">
<tr>
<td class="style54">Product Type</td>
<td>
<select name="producttype">
         	<option value="producttype">producttype
            <option value=fertilizer>fertilizer
         	<option value=seeds>seeds   
			<option value=machinery>machinery
			<option value=chemicalssoils>chemicals & soils
			<option value=Agriculturalmaterial>Agricultural materials
          </select>  </td>
</tr>

<tr>
<td class="style54">Product Name</td>
<td>
<input name="productname" type="text"   style="width:150px; " 
        class="style2" /></td>
</tr>
<tr>
<td class="style55">Detail</td>
<td class="style56">
    <textarea  class="style2" cols="20" name="detail"></textarea></td>
</tr>
<tr>
  <td class="style54">Price</td>
  <td><input name="price" type="text" 
        style="width:150px; " class="style2" /></td>
</tr>
<tr>
<td class="style54">Image</td>
<td><label>

      <input name="img" accept="image/JPEG" type="file">
    
</label></td>
</tr>
</table>

</center>
    <p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input name ="subm1"id="Submit1" class="btn-success" type="submit" value="submit" class="style54" />
        <span 
            class="style57">&nbsp;&nbsp;
        </span>
        <input id="Reset1" type="reset" class="btn-danger" value="cancle" class="style54" />
    </p>

</form>


</body>
</html>
