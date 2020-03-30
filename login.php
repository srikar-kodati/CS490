<?php
  
	//Get values passed from middle and front
	$json_data = json_decode(file_get_contents("php://input"), true);
	$data = $json_data;
	$username = $data['username'];
	$password = $data['password'];
  
	//hashing password
	$hashpassword = sha1($password);
  
	//connect to the server and select databse
	$host = 'sql2.njit.edu';
	$dbuser = 'sk972';
	$dbpassword = '0w7Tt87N';
	$db = 'sk972';
 
	mysql_connect($host, $dbuser, $dbpassword);
	mysql_select_db($db);
  
	//check database for user 
	$sql = "SELECT * FROM Login WHERE User = '$username' AND Password = '$hashpassword' ";
	
	//check type of user
	$sql_checktype = "SELECT LEFT(Type, 255) FROM Login WHERE User = '$username'";
	$result = mysql_query($sql);
	$user_type = mysql_query($sql_checktype);
	if (mysql_num_rows($result)!= 0){
		if ($user_type = 'instructor'){
			echo '{"valid":"valid"},{"type":"Instructor"}';
		}else if ($user_type = 'student'){
			echo '{"valid":"valid"},{"type":"Student"}';
		}
	}else{
	  echo '{"valid":"notvalid"}';
	}
?> 