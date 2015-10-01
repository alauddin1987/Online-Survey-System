<?php if(isset($_POST['btnSubmit']))
{
	$user_id = $_SESSION['user_id'];
	foreach($_POST['questions'] as $key=>$value):
		foreach($_POST['result'][$value] as $key2=>$value2):
		$sql = "INSERT INTO survey_user_answers (user_id, question_id, option_id) VALUES ($user_id, $value, $value2)";
			mysql_query($sql) or die(mysql_error());
	endforeach;
	endforeach;
	 header("Location: index.php?page=survey&msg=Thank you for attend survey");

}
				
		
?>
