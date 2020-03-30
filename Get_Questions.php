<?php
  
	//SEND FRONT QUESTION BANK
	//connect to the server and select databse
	$host = 'sql2.njit.edu';
	$dbuser = 'sk972';
	$dbpassword = '0w7Tt87N';
	$db = 'sk972';
	
	mysql_connect($host, $dbuser, $dbpassword);
	mysql_select_db($db);
	
	$sql_viewexam = "SELECT * FROM QuestionBank;";
	$sql_view = mysql_query($sql_viewexam);
	while($rows = mysql_fetch_assoc($sql_view)){
		$post_data = array(
			'difficulty' => $rows["Difficulty"],
			'topic' => $rows["Topic"],
			'restraint' => $rows["Restraint"],
			'question' =>rows["Question"],
			't1input' => $rows["T1_Input"],
			't1output' => $rows['T1_Output'],
			't2input' => $rows ['T2_Input'],
			't2output' => $rows['T2_output'],
			'points' => $rows['Points']
		);
		echo json_encode($post_data);
	}
	
?> 