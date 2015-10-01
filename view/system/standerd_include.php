<?php
@session_start();
error_reporting(0);
include('dbconfig.php');
$logout = (isset($_REQUEST['logout']))?$_REQUEST['logout']:'';
if($logout=='yes')
{
	session_unset($_SESSION['user_name']);
	header('Location: index.php?page=login&msg=Log Out Successfully!');
	exit();
}
/*else if($_SESSION['user_name']=='')
{
	header('Location: index.php?page=login&msg=Access Denied');
	exit();
}
*/?>
