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

        <form method="POST" action="../controller/login_controller.php" onsubmit="return sign_in_validation()">

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

            <input type="submit" value="submit" class="btn">

            <p>forget password ? <a href="#"> Click here</a></p>

            <p>don't have an account ? <a href="signup.php">create one</a></p>
        </form>
    </div>

    <script>
        function sign_in_validation()
        {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            
            var email_error_msg = document.getElementById("email_error_msg");
            var password_error_msg = document.getElementById("password_error_msg");

            var flag = true;

            // email validation
            if(email.length === 0)
            {
                email_error_msg.innerText = "Please enter your email";
                flag=false;
            }else {
                email_error_msg.innerText = "";
            }

            //password validation
            if(password.length === 0)
            {
                password_error_msg.innerText = "Please enter your password";
                flag=false;
            }else {
                password_error_msg.innerText = "";

                if(password.length < 5  )
                {
                    pstr.innerText = "Password should atleast 5 character long";
                    flag = false;
                }
                if(password.length > 8)
                {
                    pstr.innerText = "Password length should not be greater than 8";
                    flag = false;
                }
            }

            return flag; // if flase then form will not submit
        }
    </script>

     <!-- Swiper CDN JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--Custom js File Link -->

    <script src="../js/signup.js"></script>

</body>

</html>