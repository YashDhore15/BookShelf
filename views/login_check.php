<?php

    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if($email === "rutik@gmail.com" && $password === "123456")
        {
            echo"Login Sucessful";
        }
        else
        {
            echo"Invalid Username or Password";
        }
    }    

?>