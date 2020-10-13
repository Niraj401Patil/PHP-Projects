<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Untitled Page</title>
    <style type="text/css">
       
       
    </style>
<script language="javascript">

</script>
</head>
<body>
<form name="form1" action="buyproduct.php" method="post" onSubmit="return check();">
<?php	
echo $_SESSION["un"]; 
?>
</table>
</form>
</body>
</html>
