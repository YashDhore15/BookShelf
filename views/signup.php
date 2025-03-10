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
            <input type="text" name="username" class="box" placeholder="enter your username" id="uname">
            <p style="color:red" id="ustr"></p>

            <span>email</span>
            <input type="email" name="email" class="box" placeholder="enter your email" id="u_email">
            <p style="color:red" id="estr"></p>

            <span>password</span>
            <input type="password" name="password" class="box" placeholder="enter your password" id="upwd">
            <p style="color:red" id="pstr"></p>

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
    var uname = document.getElementById("uname").value.trim();
    var u_email = document.getElementById("u_email").value.trim();
    var upwd = document.getElementById("upwd").value.trim();

    var ustr = document.getElementById("ustr");
    var estr = document.getElementById("estr");
    var pstr = document.getElementById("pstr");

    var flag = true;

    // Username validation
    if (uname.length === 0) {
        ustr.innerText = "* required";
        flag = false;
    } else {
        ustr.innerText = "";
    }

    // Email validation
    if (u_email.length === 0) {
        estr.innerText = "* required";
        flag = false;
    } else {
        estr.innerText = "";
    }

    // Password validation
    if (upwd.length === 0) {
        pstr.innerText = "* required";
        flag = false;
    } else {
        pstr.innerText = "";

        if(upwd.length < 5  )
        {
            pstr.innerText = "Password should atleast 5 character long";
            flag = false;
        }
        if(upwd.length > 8)
        {
            pstr.innerText = "Password length should not be greater than 8";
            flag = false;
        }
    }
    
    // if(upwd.length < 5  )
    // {
    //     pstr.innerText = "Password should atleast 5 character long";
    //     flag = false;
    // }
    // if(upwd.length > 8)
    // {
    //     pstr.innerText = "Password length should not be greater than 8";
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