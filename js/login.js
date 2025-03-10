// login Form Relate Code 



let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{

    window.location.href = "login.html";

    loginForm.classList.toggle('active');
}

// To Make Close Button Of Login View Functional 

document.querySelector('#close-login-btn').onclick = () =>{

    loginForm.classList.toggle('active');
}