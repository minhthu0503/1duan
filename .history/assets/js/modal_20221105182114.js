const signin_btn = document.querySelector('.signin_btn');
const signup_btn = document.querySelector('.signup_btn');
const fromBx = document.querySelector('.fromBx');
const modal__inner = document.querySelector('.modal__inner');
const modal_background = document.querySelector('.modal_background');
const modal__body = document.querySelector('.modal__body');

const header_login = document.querySelector('.header_login');
const nav_login_btn = document.querySelector('.nav_login_btn');
const modal = document.querySelector('.modal');
const close_btn = document.querySelector('.close_btn');

const products_list_left_header = document.querySelector('.products_list-left-header');
const products_list_left_body = document.querySelector('.products_list-left-body');
const products_list_left_i  = document.querySelector('.products_list-left-i');


signup_btn.onclick = function () {
    fromBx.classList.add('active');
    modal__inner.classList.add('active');
    modal_background.classList.add('active');
}
signin_btn.onclick = function () {
    fromBx.classList.remove('active');
    modal__inner.classList.remove('active');
    modal_background.classList.remove('active');
}

function addOpen(){
    products_list_left_body.classList.add('open')
}
function removeOpen(){
    products_list_left_body.classList.remove('open')
}
products_list_left_header.addEventListener('click', addOpen);
products_list_left_i.addEventListener('click', removeOpen);



function showLogin() {
    modal.classList.add('open')
}

function closeLogin() {
    modal.classList.remove('open')
}

header_login.addEventListener('click', showLogin);
nav_login_btn.addEventListener('click', showLogin);
close_btn.addEventListener('click', closeLogin);
modal.addEventListener('click', closeLogin);
modal__body.addEventListener('click', function (event) {
    event.stopPropagation();
})
products_list_left_body.addEventListener('click', function (event) {
    event.stopPropagation();
})