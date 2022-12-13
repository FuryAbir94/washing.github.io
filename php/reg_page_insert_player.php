<?php

	require_once('db_config.php'); 
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_errno) {
		printf("Connect failed: %s\n", $conn->connect_error);
		exit();
	}
	printf("Connected successfully");
	
	$fullname = $_POST["fullname"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$dob = $_POST["dob"];
	$country = $_POST["country"];
	$password = $_POST["password"];

	if (empty($fullname) or empty($username) or empty($email) or empty($password))
	{
		echo "<script> location.href='error_reg_page.php'; </script>";
		exit;
	}
	
	$sql = "INSERT INTO fadebook(fullname,username,email,dob,country,password) VALUES('$fullname', '$username', '$email', '$dob', '$country', '$password')";
	$newsql = "INSERT INTO postbook(username) VALUES('$username')";

	if ($result = $conn->query($sql))
	{
		$result2=mysqli_query($conn,$newsql); 
		echo "<script> location.href='../login_page.html'; </script>";
		$result->free();

		exit;
	}
	else
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	  

	mysqli_close($conn);
?>
    
