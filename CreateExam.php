<?php

    //Get values for new question
    $json_data = json_decode(file_get_contents("php://input"), true);
    $data = $json_data;
    
    //Get 3 Questions with paramaters
    $Q1 = $data['Q1'];
    $Q2 = $data['Q2'];
    $Q3 = $data['Q3'];
    
    //Seperate Paramaters
    $Points1 = $Q1['points'];
    $Difficulty1 = $Q1['Difficulty'];
    $Topic1 = $Q1['Topic'];
    $Restraint1 = $Q1['Restraints'];
    $Points2 = $Q2['points'];
    $Difficulty2 = $Q2['Difficulty'];
    $Topic2 = $Q2['Topic'];
    $Restraint2 = $Q2['Restraints'];
    $Points3 = $Q3['points'];
    $Difficulty3 = $Q3['Difficulty'];
    $Topic3 = $Q3['Topic'];
    $Restraint3 = $Q3['Restraints'];
    
    
    //connect to database
    $host = 'sql2.njit.edu';
	  $dbuser = 'sk972';
	  $dbpassword = '0w7Tt87N';
	  $db = 'sk972';
	
	  mysql_connect($host, $dbuser, $dbpassword);
	  mysql_select_db($db);
    
    //checking QuestionBank for question
    $sqll = ("SELECT Question FROM QuestionBank WHERE Difficulty = $Difficulty1 AND Topic = $Topic1 AND Restraint = $Restraint1)");
    $sql2 = ("SELECT Question FROM QuestionBank WHERE Difficulty = $Difficulty2 AND Topic = $Topic2 AND Restraint = $Restraint2)");
    $sql3 = ("SELECT Question FROM QuestionBank WHERE Difficulty = $Difficulty3 AND Topic = $Topic3 AND Restraint = $Restraint3)");
    
    //Run Queries
    $Q1_sql = mysql_query($sql1);
    $Q2_sql = mysql_query($sql2);
    $Q2_sql = mysql_query($sq13);
    
    //IF multiple results randomly select
    
    
    
    
?> 
