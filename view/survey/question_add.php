	<form action="index.php?page=survey" method="post">
	<div><br/>
            <?php	$sn = 0;
        		$query = mysql_query("SELECT * FROM survey_questions ORDER BY question_id ASC ");
				while($data = mysql_fetch_array($query)):
				$sn++;
		?>
	  <div>
    	<label>
		<input type="hidden" name="questions[<?php echo $data['question_id']; ?>]" value="<?php echo $data['question_id']; ?>">
		<?php echo $sn.'. '.$data['question_description']; ?></label><br/>
    	<p>
  <?php
  		$sql = mysql_query("SELECT * FROM survey_questions q
							LEFT JOIN survey_question_options qop ON (qop.question_id = q.question_id)
							WHERE q.question_id=".$data['question_id']);
		while($record = mysql_fetch_array($sql)):

  ?>      

        <label><?php echo getField($data['question_id'], $record['option_id']); ?><?php echo $record['option_description']; ?></label><br/>
        <?php endwhile; ?>
        
    	</p>
  	</div>	

        <?php endwhile; 
		?>
			<input type="submit" name="btnSubmit" value="submit"/>
			<input type="reset" value="clear fields"/>
		</div>
		</div>
	</form>