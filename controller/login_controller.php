<?php

require "../includes/db.php";

session_start();

function login($con)
{
	//$username = $_POST['username'];
	$email = $_POST['user_email'];
	$password = $_POST['user_password'];

	$sql = "SELECT * FROM users where email = :email AND password = :password";

	$stmt = $con->prepare($sql);

	$status = $stmt->execute([':email' => $email, ':password' => $password]);

	if($status)
	{
		$count = $stmt->rowCount(); // Returns the number of matching rows

		if($count !== 0)
		{
			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION['user'] = $user['username'];
			header("Location: /Bookshelf/index.php") || die("Unable to redirect!");
			exit();	
		}
		else
			echo "Invalid email or password!";
	}
}

login($con);

?>

