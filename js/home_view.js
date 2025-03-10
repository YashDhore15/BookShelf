searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = ()=>{

    searchForm.classList.toggle('active');
}

// login Form Relate Code 
/*
let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{

    loginForm.classList.toggle('active');
}

// To Make Close Button Of Login View Functional 

document.querySelector('#close-login-btn').onclick = () =>{

    loginForm.classList.toggle('active');
}
*/

// Scroll Relate Code 

window.onscroll = () =>{

    searchForm.classList.remove('active');
    
    if(window.scrollY > 80)
    {
        document.querySelector('.header .header-2').classList.add('active');
    }
    else
    {
        document.querySelector('.header .header-2').classList.remove('active');
    }
}


window.onload = () =>{
    
    if(window.scrollY > 80)
    {
        document.querySelector('.header .header-2').classList.add('active');
    }
    else
    {
        document.querySelector('.header .header-2').classList.remove('active');
    }

    fadeOut();
}

// function for loder-gif animation 

function loader()
{
  document.querySelector('.loader-container').classList.add('active');
}

function fadeOut()
{
  setTimeout(loader,4000);
}



// JS Code From Swiperjs CDN
// Code for Sliding books with some time interval 

var swiper = new Swiper(".books-slider  ", {
    loop:true,
    centeredSlide:true,
    autoplay:{
        delay:4500, // change
        disableOnInteraction:false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

// Sliding books for Featured Books Section

  var swiper = new Swiper(".featured-slider", {
    spaceBetween: 10,
    loop:true,
    centeredSlide:true,
    autoplay:{
        delay:4500, //change
        disableOnInteraction:false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      450: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 4,
      },
    },
});

// Js for New Arrivals 

  var swiper = new Swiper(".arrivals-slider", {
    spaceBetween: 10,
    loop:true,
    centeredSlide:true,
    autoplay:{
        delay:4500, //change
        disableOnInteraction:false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
});

// JS for Reviews Section 

var swiper = new Swiper(".reviews-slider", {
  spaceBetween: 10,
  grabCursor:true, // optional 
  loop:true,
  centeredSlide:true,
  autoplay:{
      delay:4500, //change
      disableOnInteraction:false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

// JS For Sliding Blogs Section 

var swiper = new Swiper(".blogs-slider", {
  spaceBetween: 10,
  grabCursor:true, // optional 
  loop:true,
  centeredSlide:true,
  autoplay:{
      delay:4500, //change
      disableOnInteraction:false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
 