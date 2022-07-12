let searchForm = document.querySelector('.search-form');//chercher class 'search-form'

document.querySelector('#search-btn').onclick = () => {   //cliquer sur le button search
    searchForm.classList.toggle('active');  //ajouter ou supprimer class 'active' après class search-form
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');//chercher class 'shopping-cart'

document.querySelector('#cart-btn').onclick = () => {     //cliquer sur le button shopping-cart
    shoppingCart.classList.toggle('active');  //ajouter ou supprimer class 'active' après class shopping-cart
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
}

let loginForm = document.querySelector('.login-form');//chercher class 'login-form'

document.querySelector('#login-btn').onclick = () => {     //cliquer sur le button login
    loginForm.classList.toggle('active');  //ajouter ou supprimer class 'active' après class login-form
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}


var swiper = new Swiper(".TVs-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

var swiper = new Swiper(".telephones-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});