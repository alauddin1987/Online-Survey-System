<?php
function getField($question_id, $option_id)
{
	switch ($question_id):
			case 1:
			echo "<input type='checkbox' name='result[$question_id][]' value=$option_id>";
		break;
		case 2:
			echo "<input type='radio' name='result[$question_id][]' id='radio' value=$option_id>";
			break;
		case 3:
			echo "<input type='radio' name='result[$question_id][]' id='radio' value=$option_id>";
		break;
		default:
		break;
	endswitch;
}

?>
