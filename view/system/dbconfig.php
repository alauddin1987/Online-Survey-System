<?php
	
	$server_name="localhost";
	$server_username="root";
	$server_password="";
	$server_database="survey2";
	
	$connect=mysql_connect($server_name,$server_username,$server_password) or die ("Server error : Server information is wrong.");
	$db_connection=mysql_select_db($server_database) or die ("Database error : Database not found in your server.");

?>