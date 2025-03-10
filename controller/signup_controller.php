<?php

require "../includes/db.php";

function createAccount($con)
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$role = "user";

	$sql = "INSERT INTO users VALUES(:email, :username, :password, :role)";

	$stmt = $con->prepare($sql);

	$status = $stmt->execute([
	    ':email' => $email,
	    ':username' => $username,
	    ':password' => $password, 
	    ':role' => 'user',
	]);

	if($status)
	{
		header("Location: ../viewslogin.html") || die("Unable to redirect!");
		exit();
	}

}

createAccount($con);

?>

