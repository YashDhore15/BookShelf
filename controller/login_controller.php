<?php

require "../includes/db.php";

session_start();

function login($con)
{
	//$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users where email = :email";

	$stmt = $con->prepare($sql);

	$status = $stmt->execute([':email' => $email]);

	if($status)
	{
		$count = $stmt->rowCount(); // Returns the number of matching rows

		if($count !== 0)
		{
			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			$_SESSION['user'] = $user['username'];
			header("Location: ../views/index.php") || die("Unable to redirect!");
			exit();	
		}
		else
			echo "Account not found!";
	}
}

login($con);

?>

