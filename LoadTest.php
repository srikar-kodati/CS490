<?php
  
	//SEND FRONT QUESTION BANK
	//connect to the server and select databse
	$host = 'sql2.njit.edu';
	$dbuser = 'sk972';
	$dbpassword = '0w7Tt87N';
	$db = 'sk972';
	
	mysql_connect($host, $dbuser, $dbpassword);
	mysql_select_db($db);
	
	$sql_viewgrades = "SELECT * FROM Grades";
	$sql_view = mysql_query($sql_viewgrades);
  $dbdata = array();
  
	while($rows = mysql_fetch_assoc($sql_view)){
		$dbdata[] = $rows;
  }    
  
  echo json_encode($dbdata);
	
?> 