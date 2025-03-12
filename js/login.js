// login Form Relate Code 



let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{

    //window.location.href = "/views/login.php";
    console.log(window.location.origin + "/Bookshelf/views/login.php");
    window.location.href = window.location.origin + "/Bookshelf/views/login.php";
    


    loginForm.classList.toggle('active');
}

// To Make Close Button Of Login View Functional 

document.querySelector('#close-login-btn').onclick = function(){

    //loginForm.classList.toggle('active');
    window.location.href = window.location.origin + "/Bookshelf/index.php";
}