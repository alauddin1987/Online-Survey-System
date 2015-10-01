<?php
$msg = isset($_REQUEST['msg'])?$_REQUEST['msg']:'';
if(isset($_POST['signup']))
{
	$user_name = $_POST['user_name'];
	$pass      = $_POST['user_password'] ;
	$query_check_username = "select * from survey_users where user_name='$user_name'";
	$results = mysql_query ($query_check_username) or die(mysql_error());
	$num_results = mysql_num_rows($results);
	if ($num_results > 0) {
				header("Location: index.php?page=registration&msg=This Name is already exists.");
	exit;
	}
	$query = "insert into survey_users (user_name, user_password) values ('$user_name'
	, '$pass')";
	$ret = mysql_query ($query);
	if ($ret)
		header("Location: index.php?page=registration&msg=Registration successful.For Sign In <a href='index.php?page=login'>Click here</a>");
}

?>