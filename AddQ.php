<?php
    $json_data = json_decode(file_get_contents("php://input"), true);
    $data = $json_data;
    $TestCase1Input = $data['TestCase1Input'];
    $TestCase1Output = $data['TestCase1Output'];
    $TestCase2Input = $data['TestCase2Input'];
    $TestCase2Output = $data['TestCase2Output'];
    $Description = $data['Description'];
    $Points = $data['Points'];
    $Difficulty = $data['Difficulty'];
    $Topic = $data['Topic'];
    $Restraints = $data['Restraints'];
    
    $host = 'sql2.njit.edu';
	  $dbuser = 'sk972';
	  $dbpassword = '0w7Tt87N';
	  $db = 'sk972';
	
	  mysql_connect($host, $dbuser, $dbpassword);
	  mysql_select_db($db);
    
    $sql = ("INSERT INTO QuestioBank(Difficulty, Topic, Restraints, Question, T1_input, T1_output, T2_input, T2_Output, Points) VALUES ($Difficulty, $Topic, $restraints, $Description, $TestCase1Input, $TestCase1Output, $TestCase2Input, $TestCase2Output, $Points");
    
    $add = mysql_query($sql);
?> 
