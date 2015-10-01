<?php
	$msg = isset($_REQUEST['msg'])?$_REQUEST['msg']:'';
?>

<script language="javascript">
 function chkLogin(){
	 	var userName = document.loginForm.user_name.value;
	 	var userPassword = document.loginForm.user_password.value;
		if(userName=='')
		{
			alert('Please input your username');
			document.loginForm.user_name.focus();
			return false;			
		}
		if(userPassword=='')
		{
			alert('Please input your password');
			document.loginForm.user_password.focus();
			return false;			
		}
	 }
</script>
<body><center>
<div id="body">
<div id="header"><h1>Web Survey</h1></div>
<div id="form">
<div id="form_design1"><tr><td><?php echo $msg; ?></td></tr>
</div>
<div id="form_design">
<form action="index.php?page=login" method="post" name="loginForm" id="loginForm" class="form_design" onSubmit="return chkLogin()" >
			<table cellpadding="0" cellspacing="0" align="right">
				<caption>Login</caption>
				<tr>
					<td>Username</td>
					<td><input type="text" name="user_name" id="user_name" value=""/></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="user_password" id="user_password" value=""/></td>
				</tr>
				<tr>
					<td></td>
					<td><input  class="button" type="submit" name="login" value="Sign In"/></td>
                    
				</tr>	
			</table>	
  </form>
</div>
</div>
<div id="header2"></div>	
</div>
<div id="beaker">
<span class="bubble">
<span class="glow"> </span> </span>
</div>
</center>
</body>
</html>
        
        