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

        <form method="POST" action="../controller/signup_controller.php" onsubmit="return validateForm();">

            <h3>Sign up</h3>

            <span>username</span>
            <input type="text" name="username" class="box" placeholder="enter your username" id="username">
            <p style="color:red" id="username_error_msg"></p>

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

            <input type="submit" value="create" class="btn">

            <p>forget password ? <a href="#"> Click here</a></p>

            
        </form>
    </div>

    <script>

function validateForm() 
{
    var username = document.getElementById("username").value.trim();
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("password").value.trim();

    var username_error_msg = document.getElementById("username_error_msg");
    var email_error_msg = document.getElementById("email_error_msg");
    var password_error_msg = document.getElementById("password_error_msg");

    var flag = true;

    // Username validation
    if (username.length === 0) {
        username_error_msg.innerText = "* required";
        flag = false;
    } else {
        username_error_msg.innerText = "";
    }

    // Email validation
    if (email.length === 0) {
        email_error_msg.innerText = "* required";
        flag = false;
    } else {
        email_error_msg.innerText = "";
    }

    // Password validation
    if (password.length === 0) {
        password_error_msg.innerText = "* required";
        flag = false;
    } else {
        password_error_msg.innerText = "";

        if(password.length < 5  )
        {
            password_error_msg.innerText = "Password should atleast 5 character long";
            flag = false;
        }
        if(password.length > 8)
        {
            password_error_msg.innerText = "Password length should not be greater than 8";
            flag = false;
        }
    }
    
    // if(password.length < 5  )
    // {
    //     password_error_msg.innerText = "Password should atleast 5 character long";
    //     flag = false;
    // }
    // if(password.length > 8)
    // {
    //     password_error_msg.innerText = "Password length should not be greater than 8";
    //     flag = false;
    // }

    return flag; // If flag is false, form submission will be prevented
}


    </script>


     <!-- Swiper CDN JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--Custom js File Link -->

    <script src="../js/signup.js"></script>

</body>

</html>