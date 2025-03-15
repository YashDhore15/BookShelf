<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website Design Tutorial</title>

    <!-- Swiper JS USE SWIPER form CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

   <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="../css/home.css">
    
</head>

<body>

            <div>
                <div id="login-btn" ></div>
            </div>
            
    <!-- login form -->

    <div class="login-form-container">

        <!-- To Close Login Form  Cross button -->

        <div id="close-login-btn" class="fas fa-times"></div>

        <form>

            <h3>Sign in</h3>

            <span>email</span>
            <input type="email" name="email" class="box" placeholder="enter your email" id="email">
            <p style="color:red" id="email_error_msg"></p>

            <span>password</span>
            <input type="password" name="password" class="box" placeholder="enter your password" id="password">
            <p style="color:red" id="password_error_msg"></p>

            <div class="checkbox">

                <input type="checkbox" name="" id="remember-me">

                <label for="remember-me">remember me</label>
            </div>

            <input type="submit" value="submit" class="btn" onclick=" sign_in_validation(event)">

            <p>forget password ? <a href="#"> Click here</a></p>
            <p>don't have an account ? <a href="signup.php">create one</a></p>
            <p id="loginErrorMsg" style="color:red"> </p>
        </form>

        </div>

    </div>

    <script>
    function sign_in_validation(event) 
    {
        event.preventDefault(); // Stop form submission

        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;

        let email_error_msg = document.getElementById("email_error_msg");
        let password_error_msg = document.getElementById("password_error_msg");

        let flag = true;

        // Email validation
        if (email.length === 0) {
            email_error_msg.innerText = "Please enter your email";
            flag = false;
        } else {
            email_error_msg.innerText = "";
        }

        // Password validation
        if (password.length === 0) {
            password_error_msg.innerText = "Please enter your password";
            flag = false;
        } else {
            password_error_msg.innerText = "";

            if (password.length < 5) {
                password_error_msg.innerText = "Password should be at least 5 characters long";
                flag = false;
            }
            else if (password.length > 8) {
                password_error_msg.innerText = "Password length should not be greater than 8";
                flag = false;
            }
        }

        if (!flag) {
            return; // Stop execution if validation fails
        }

        login_credintials_check(email, password);
    }

    function login_credintials_check(email, password) 
    {
        let message = document.getElementById("messageBox");
        let messageText = document.getElementById("message");
        let loginErrorMsg = document.getElementById("loginErrorMsg");

        // AJAX request
        let x = new XMLHttpRequest();
        x.open("POST", "../controller/login_controller.php", true);
        x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        x.onreadystatechange = function () 
        {   
            if (x.readyState === 4 && x.status === 200) 
            {
            
                let response = JSON.parse(x.responseText); // Parse JSON safely

                if (response.status === "success") 
                {
                    window.location.href = "../index.php";
                } 
                else 
                {
                    loginErrorMsg.innerHTML = response.message;
                    console.log(loginErrorMsg.innerHTML);
                }
            }
        }

        x.send("user_email=" + encodeURIComponent(email) + "&user_password=" + encodeURIComponent(password));
    }
    </script>

     <!-- Swiper CDN JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--Custom js File Link -->

    <script src="../js/signup.js"></script>

</body>

</html>