
<html >
<head>
    <title>Untitled Page</title>
    <style type="text/css">
       .divf{
		   height: 500px;
		   width: 500px;
		   
	   }
	   input[type=text],input[type=password],select{
			width: 200px;
			padding: 10px 10px;
			border: 2px;
			background-color: rgb(222,222,222);
			color: blue;
			font-size: 20px;
			border-radius: 5px;
		}

    </style>
	
<script language="javascript">
function check()
{
 if(document.form1.un.value==="")
  {
    alert("Plese Enter Username");
	document.form1.un.focus();
	return false;
  }
  if(document.form1.sq.value==="")
  {
    alert("Plese Enter Security Question");
	document.form1.sq.focus();
	return false;
  }
   if(document.form1.sans.value==="")
  {
    alert("Plese Enter Security Answer");
	document.form1.sans.focus();
	return false;
  }
  return true;
}
</script>
</head>
<body bgcolor="#000080">
<?PHP include "header.php";?>
<form name="form1" action="sellerforgotpasswordcode.php" method="post" onSubmit="return check();">
 <center> 
`<div class="divf"id="divf">
 <h2 class="style3">
         </h2>
    <h2 class="style3">
       <span class="style8">Seller Forgot Password:<span class="style7">&nbsp;</span></span><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp;        </span></h2>
   <table class="table" width="50%" height="140" border="1">
      <tr>
        <td width="246" class="style8"><span class="style10">Username&nbsp;</span></td>
        <td width="326" class="style8">
          <label>
            <input name="un" type="text" class="style7"/>
        </label>        </td>
      </tr>
      <tr>
        <td class="style8"><span class="style10">Security Question</span></td>
        <td class="style8"><span class="style1">
          <select name="sq" class="style7">
         	<option value>Security Question
               <option value=Login Id>Login Id
                <option value=Date of Birth>Date of Birth
         	<option value=Mobile No>Mobile No
         	<option value=Voter Id>Voter Id
         	<option value=Email Id>Email Id	
			</option>
			</select>
        </span></td>
      </tr>
      <tr>
        <td class="style8"><span class="style10"> SecurityAnswer&nbsp;</span></td>
        <td class="style8"><span class="style1">
          <input  name="sans" type="text"class="style7" />
        </span></td>
      </tr>
    </table>
		
    <p class="style1">
        <input class="btn-default" id="Button1" type="button"  value="Back" action="SellerLogin.php"  onclick="document.location.href = 'SellerLogin.php';">&nbsp;
        <input class="btn-success" id="Submit2" type="submit" value="submit" /></p>        
  </div> </center>
	
</form>
	<?PHP include "footer.php";?>	
</body>
</html>