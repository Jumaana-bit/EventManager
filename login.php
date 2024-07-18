<?php
session_start();
include "db.php";

if(isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data; 
	}

	$uname = validate($_POST['uname']);
	$password = validate($_POST['password']);

	if(empty($uname)) {
		header("Location: project.php?error=User Name is required");
		exit();
	}
	else if(empty($password)) {
		header("Location: project.php?error=Password is required");
		exit();
	}else {
		$sql = "SELECT * FROM users WHERE Username='$uname' AND Password ='$password'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
			if($row['Username'] === $uname && $row['Password']=== $password) {
				$_SESSION['Username'] = $row['Username'];
				$_SESSION['FirstName'] = $row['FirstName'];
				header("Location: form.html");
				exit();
			} else{
				header("Location: project.php?error=Incorrect Username or Password");
				exit();
				}
			}else{
				header("Location: project.php?error=Incorrect Username or Password");
				exit();
			}
		}
}
else{
	header("Location: project.php");
	exit();
}
