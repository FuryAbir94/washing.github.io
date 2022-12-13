<?php
    session_start();
	require_once('db_config.php'); 
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if ($conn->connect_errno) {
		printf("Connect failed: %s\n", $conn->connect_error);
		exit();
		
	}
	// printf("Connected successfully");
	header('location:../index2.html');
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	$_SESSION['userid']=$username;
	$table=$account."s";
	$colomn1 = $account."_id";
	$colomn2 = $account."_name";
	$colomn3 = $account."_username";
	$colomn4 = $account."_email";
	$colomn5 = $account."_country";
	$colomn6 = $account."_password";
	$colomn7 = $account."_company";

	
	if (empty($username) or empty($password))
	{
		echo "<script> location.href='../error_login_page.html'; </script>";
		exit;
	}
	
	$x=strcmp($account,"player");
	if($x == 0)
	{
		$sql = "SELECT $colomn1, $colomn2, $colomn3, $colomn4, $colomn5, $colomn6 FROM $table WHERE $colomn3='$username'";
	}

	if ($result = $conn->query($sql))
	{
		printf("<br>%d record(s) found!<br>", $result->num_rows);
		$row = $result->fetch_assoc();
		if ($password != $row[$colomn6])
		{
			echo "<script> location.href='../error_login_page.html'; </script>";
			exit;
		}
		else{
			if($x == 0)
			{
				printf("ID- %s<br>Name- %s<br>Username- %s<br>Email- %s<br>Country- %s<br>Password- %s<br>", $row[$colomn1], $row[$colomn2], $row[$colomn3], $row[$colomn4], $row[$colomn5], $row[$colomn6]);
                
                echo "<script> location.href='../home_page.html'; </script>";
                $result->free();
                exit;
			}
			if($y == 0)
			{
				printf("ID- %s<br>Name- %s<br>Username- %s<br>Company- %s<br>Password- %s<br>", $row[$colomn1], $row[$colomn2], $row[$colomn3], $row[$colomn7], $row[$colomn6]);
                
                echo "<script> location.href='../home_page.html'; </script>";
                $result->free();
                exit;
			}
			

		}
	}
	else
	{
		printf("No record found!");
	}
	  

	mysqli_close($conn);
?>
    
