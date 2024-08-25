// for search section
let searchBtn = document.querySelector('#search-btn');
let searchBar =document.querySelector('.search-bar-container');
var formBtn = document.querySelector('#login-btn');
var loginForm = document.querySelector('.login-form-container');
var formClose = document.querySelector('#form-close');
var menu = document.querySelector('#menu-bar');
var navbar = document.querySelector('.navbar');
var videoBtns = document.querySelectorAll('.vid-btn');


window.onscroll = ()=>{
    searchBtn.classList.remove('fa-times');
   searchBar.classList.remove('active');
   loginForm.classList.remove('active');
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
}
searchBtn.addEventListener('click',()=>{
   searchBtn.classList.toggle('fa-times');
   searchBar.classList.toggle('active');
});

// for login section
formBtn.addEventListener('click',()=>{
    loginForm.classList.add('active');
});
formClose.addEventListener('click',()=>{
    loginForm.classList.remove('active');
});

// for menu section

menu.addEventListener('click',()=>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
});

// Select all elements with the class 'vid-btn
document.addEventListener('DOMContentLoaded', () => {
    let videoBtns = document.querySelectorAll('.vid-btn');
    videoBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelector('.controls .active')?.classList.remove('active');
            btn.classList.add('active');
            let src = btn.getAttribute('data-src');
            document.querySelector('#video-slider').src = src;
        });
    });
});

// for email section 

$(document).ready(function() {

    console.log('Document ready and script executed.');
    setTimeout(function() {
        console.log('Hiding notification after 10 seconds.');
        $('.notification').addClass('hide');
    }, 5000);

// Hide notification on click
    $(document).on('click', '.notification', function() {
        console.log('Notification clicked.');
        $(this).addClass('hide');
    });
});



    









