<?php
	$con = mysqli_connect("localhost", "cir112", "tjdwo7595!", "cir112");

	$userID = $_POST["userID"];
	$userPassword = $_POST["userPassword"];
	$userGender = $_POST["userGender"];
	$userMajor = $_POST["userMajor"];
	$userEmail = $_POST["userEmail"];

	$statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?, ?, ?, ?, ?)");
	mysqli_stmt_bind_param($statement, "sssss", $userID, $userPassword, $userGender, $userMajor, $userEmail);
	mysqli_stmt_execute($statement);

	$response = array();
	$response["success"] = true;

	echo json_encode($response);

?>