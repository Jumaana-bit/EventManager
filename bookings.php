<?php
session_start();

include "db.php";

if(isset($_POST['hall'] && isset($_POST['date'])) {

	$hall = $_POST['hall'];
	$date = $_POST['date'];
	$uname = $_SESSION['Username'];

	if(empty($hall)){
		exit();
	}
	else {
		//check if hall is already booked
		$sql = "SELECT * FROM hall WHERE Hall='$hall' AND dates='$date'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)>0) {
			alert("Hall is already booked on this day.");
			exit();
		}
		else {
			$sql2= "INSERT INTO hall(Username, dates, Hall) VALUES('$uname', '$date', '$hall')";
			}
		}
}