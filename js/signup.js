// login Form Relate Code 

let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{

    loginForm.classList.toggle('active');
}

// To Make Close Button Of Login View Functional 

document.querySelector('#close-login-btn').onclick = () =>{

    loginForm.classList.toggle('active');
    window.location.href = "../views/index.php";

}

loginForm.classList.toggle('active');