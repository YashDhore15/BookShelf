<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Boot Store Website Design Tutorial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Swiper JS USE SWIPER form CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

   <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="../css/home.css">

    <script>
        function showErrorPopup(message) 
        {
            alert(message); // Basic popup (you can customize this)
        }
    </script>
    
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

            <input type="submit" value="create" class="btn" onclick=" validateForm(event)">

            <p>forget password ? <a href="#"> Click here</a></p>

            <div class="" role="alert" id="errorMsg"> <!-- to show error message -->
                <p id="message"></p>
            </div>
        </form>
    </div>

    <script>

        function validateForm(event) 
        {

            event.preventDefault(); // Stop form submission
            
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

            if(!flag)
            {
                return; // Stop execution if validation fails
            }

            signup_credintials_check(username,email, password);
            
        }

        function signup_credintials_check(username,email, password)
        {
            fetch('../controller/signup_controller.php',
   				{ 
   	 			   method: 'POST',
   			   	   body  : new URLSearchParams({'username':username,'email':email,'password':password})
   				}
   		    )
            .then(response => response.text()) 
            .then(data => 
            {
                if(data.trim() == "success") 
                {
                    window.location.href = "../views/login.php";
                } 
                else if(data.trim() == "failed") 
                {
                    var errorMsg = document.getElementById("errorMsg");
                    var message  = document.getElementById("message");

                    errorMsg.classList.add("alert","alert-danger");
                    message.innerText = "Error: user already exists";
                } 
                else 
                {
                    var errorMsg = document.getElementById("errorMsg");
                    var message  = document.getElementById("message");

                    errorMsg.classList.add("alert","alert-danger");
                    message.innerText = "Some Unexpected Error Occured";
                }
            })
   		    .catch(error => console.error("MyError while Register :", error))
        }


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <!-- Swiper CDN JS Link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--Custom js File Link -->

    <script src="../js/signup.js"></script>

</body>

</html>