<?php

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if(!empty($email)){
	if(!empty($password)){
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "youtube";
		
		$conn = new mysqli ($host, $dbusername, $dbpassword ,$dbname);
	
	if (mysqli_connect_error()){
		die('Connect Error ('.mysqli_connect_error().')'
		.mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO account1 (email, password)
		values ('$email','$password')";
		if ($conn->query($sql)){
			echo "New record is inserted successfully";
		}
		else{
			echo "Error: ".$sql ."<br>".$conn->error;
		}
		$conn->close();
	}	
	}
	else{
		echo "Password shouls not be empty";
		die();
	}
}
else{
	echo "email should not be empty";
	die();
}
?>
