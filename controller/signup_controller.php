<?php

require "../includes/db.php";
session_start(); // Move session_start() to the top

function createAccount($con)
{
    try {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = "user";

        $sql = "INSERT INTO users (email, username, password, role) VALUES(:email, :username, :password, :role)";
        $stmt = $con->prepare($sql);

        $status = $stmt->execute([
            ':email' => $email,
            ':username' => $username,
            ':password' => $password, 
            ':role' => 'user',
        ]);

        if ($status) {
            //header("Location: ../views/login.php");
            echo"success";
            exit();
        }
    } 
	catch (PDOException $e) 
	{
        // Debug: Log the actual SQL error code
        error_log("SQL Error Code: " . $e->getCode());

        if ($e->getCode() == "23000") { // Ensure it's a string comparison
            // $_SESSION['signup_error'] = "Error: Email already exists!";
            echo "failed";
        } else {
            // $_SESSION['signup_error'] = "Error: Email already exists!";
            echo"failed";
        }

        // header("Location: ../views/signup.php");
        // exit();
    }
}

createAccount($con);

?>
