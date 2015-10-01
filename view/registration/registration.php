<script language="javascript">
 function chkReg(){
	 	var userName = document.regFrom.user_name.value;
	 	var userPassword = document.regFrom.user_password.value;
		if(userName=='')
		{
			alert('Please input your username');
			document.regFrom.user_name.focus();
			return false;			
		}
		if(userPassword=='')
		{
			alert('Please input your password');
			document.regFrom.user_password.focus();
			return false;			
		}
	 }
</script>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="view/main.css" type="text/css">
</head>
<body><center>
<div id="body">
<div id="header"><h1>Web Survey</h1></div>
<div id="form_reg">
<div id="form_design1"><tr><td><?php echo $msg ?></td></tr></div>
<div id="form_design">
<form action="index.php?page=registration" method="post" id="regFrom" name="regFrom" onSubmit="return chkReg()">
			<table>
				<caption>Registration</caption>
				<tr>
					<td>Username</td>
					<td><input type="text" name="user_name" value=""/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="user_password" value="" /></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" class="button" name="signup" value="Sign Up"/></td>
                    
				</tr>	
			</table>	
		</form>	
        </div>
        </div>
        <div id="header_REG"></div>	
        </div>
        </center>
        </body>
</html>