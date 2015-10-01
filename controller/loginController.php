<?php
if(isset($_POST['login'])=='Login')
	{
		$user_name=$_POST['user_name'];
		$user_password=$_POST['user_password'];
		$sql = "select * from survey_users where user_name ='$user_name'"; 
		$select=mysql_query($sql);
		$userPassword = mysql_result($select,0,'user_password');
		$rows=mysql_num_rows($select);
		if($rows>0){
			if($userPassword=="$user_password")
			{
				mysql_query("UPDATE survey_users SET user_attempts=0 WHERE user_name ='$user_name'");
				$_SESSION['user_name'] = $user_name;
				$_SESSION['user_password'] = $user_password;		
				$_SESSION['user_id'] = mysql_result($select,0,'user_id');		
				header('Location: index.php?page=survey');
			}
			else
			{
				mysql_query("UPDATE survey_users SET user_attempts=user_attempts+1 WHERE user_name ='$user_name'");
				
				$sql = "select user_attempts from survey_users where user_name ='$user_name' AND user_password='$userPassword'"; 
				$select=mysql_query($sql);
				$num_attams = mysql_result($select,0,'user_attempts');
				
				if(!isset($_COOKIE["user"]))
				{
					mysql_query("UPDATE survey_users SET user_attempts=0 WHERE user_name ='$user_name'");
					$expire=time()+60*2;
					setcookie("user", $user_name, $expire);
				}
				if(($num_attams > 1) && (isset($_COOKIE["user"])))
				{
					header("Location: index.php?page=registration&msg=if you are not an existing user, Please sing up Now");
				}
				else
				{
					header("Location: index.php?page=login&msg=Invalid User name or Password");
				}
			}
		}
		else{
				header("Location: index.php?page=login&msg=Invalid User name or Password");
		}
	
	}

?>