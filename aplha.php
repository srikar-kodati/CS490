<?php
	//Get values passed from middle and front

	$username = $_POST['username']
	$password = $_POST['password']

	//connect to the server and select databse

	$host = 'sql2.njit.edu'
	$dbuser = 'sk972'
	$dbpassword = '0w7Tt87N'
	$db = 'sk972'
	
	//connect to server and database
	
	mysql_connect($host, $dbuser, $dbpassword)
	mysql_select_db($db)

	//check database for user 
	
	if(isset($_POST['username'])){
		$check = "select * from login where user = ' ".$username." ' and password = ' ".$password." '
		$result = mysql_query($check);
		if ($result){
			echo '{"valid":"notvalid"}'
		}
		else{
			echo "Login Failed"
		}
	}

