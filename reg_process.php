<?php
session_start();

include "db.php";

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$fname = validate($_POST['fname']);
	$lname = validate($_POST['lname']);
	$uname = validate($_POST['uname']);
	$email= validate($_POST['email']);
	$password = validate($_POST['password']);

	//Validate
	if(empty($fname)) {
		header("Location: register.php?error=First Name is required");
		exit();
	}
	else if(empty($lname)) {
		header("Location: register.php?error=Last Name is required");
		exit();
	}
	else if(empty($uname)) {
		header("Location: register.php?error=User Name is required");
		exit();
	}
	else if(empty($password)) {
		header("Location: register.php?error=Password is required");
		exit();
	}
	else {
		//check if username already exist
		$sql = "SELECT * FROM users WHERE Username='$uname' or email='$email'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0) {
			header("Location: assignment2.php?error=Username/email already used");
			exit();
		}
		else {
			$sql2= "INSERT INTO users(FirstName, LastName, Username, Password, EmailAddress) VALUES('$fname', '$lname', '$uname', '$password', '$email')";
			$result2 = mysqli_query($conn, $sql2);
			if($result2) {
				header("Location: project.php?succeess=Your account has been created successfully");
				exit();
			} else {
				header("Location: project.php?error=Unknown error occured");
				exit();
			}
		}
	}
}else {
	header("project.php");
	exit();
}