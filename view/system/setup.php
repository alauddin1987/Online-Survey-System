<html>
<head>
<title>Assessment Setup</title>
</head>
<body>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "survey2";
$connection = mysql_connect($host, $user, $pass)
or die ("Couldn't connect to database");
mysql_select_db ($database);

$query = "CREATE TABLE Survey_users( user_id int (11), user_name varchar (50), user_password varchar (100), user_attempts int(5),
user_update_at TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, user_created_at DATETIME DEFAULT NULL, PRIMARY KEY (user_id))";
$conn = mysql_query ($query, $connection);

$query = "CREATE TABLE Survey_questions( question_id int(11) NOT NULL, question_name varchar (50), question_type varchar (30), question_description varchar (200), PRIMARY KEY (question_id))";
$conn = mysql_query ($query, $connection);

$query = "CREATE TABLE Survey_question_options( option_id int (11) NOT NULL, question_id int (11), option_description varchar (200), PRIMARY KEY(option_id) )";
$conn = mysql_query ($query, $connection);

$query = "CREATE TABLE Survey_user_answers( answer_id int (11) NOT NULL, user_id int (11), question_id int (11),
option_id int (11), PRIMARY KEY(answer_id))";
$conn = mysql_query ($query, $connection);

$query = "INSERT INTO Survey_users(user_id, user_name, user_password, user_attempts, user_update_at, user_created_at) VALUES ('1', 'riaz', '12345', '1'), '', ''";
$conn = mysql_query ($query, $connection);

$query = "INSERT INTO Survey_questions (question_id, question_name, question_type, question_description ) VALUES ('1', 'hobby', 'radio', 'what is your favorite play')";
$conn = mysql_query ($query, $connection);

if ($conn) {
echo "Table created";
}
else {
echo "Table not created: " . mysql_error(); + "";
}
?>
</body>
</html>