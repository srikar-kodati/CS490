<?php
    
    //get students answers for every question
    //Get values for new grade
    $json_data = json_decode(file_get_contents("php://input"), true);
    $data = $json_data;
    $User = $data['username'];
    $Answer1 = $data['answer1'];
    $Answer2 = $data['answer2'];
    $Answer3 = $data['answer3'];
    $Score1 = $data['score1'];
    $Score2 = $data['score2'];
    $Score3 = $data['score3'];
    
    //connect to database
    $host = 'sql2.njit.edu';
	  $dbuser = 'sk972';
	  $dbpassword = '0w7Tt87N';
	  $db = 'sk972';
 
	  mysql_connect($host, $dbuser, $dbpassword);
    mysql_select_db($db);
    
    //Change values in table
    $sql_input = "INSERT INTO StudentAnswers(User, Answer1, Answer2, Answer3, Score1, Score2, Score3) VALUES('$User', '$Answer1', '$Answer2', '$Answer3', '$Score1', $Score2', $Score3')";
    
    //run query
    $result = mysql_query($sql_input);
    echo '{"valid":"valid"}';
    
?> 
