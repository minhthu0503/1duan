
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
const checkout_link = document.querySelector('.checkout_link');





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
checkout_link.addEventListener('click', showLogin);



const modal_cart = document.querySelector('.products_detail-cart');
const modal_cart_section = document.querySelector('.cart_modal-section');
const btn_product_close = document.querySelector('.close_product_btn');
const btn_product_add = document.querySelector('.products_detail-fixed-btn-add');
const btn_product_add_main = document.querySelector('.products_detail-btn-add');
function addOpen() {
    modal_cart.classList.add('open');
}
function removeOpen() {
    modal_cart.classList.remove('open');
}
btn_product_add.addEventListener('click', addOpen);
btn_product_add_main.addEventListener('click', addOpen);
btn_product_close.addEventListener('click', removeOpen);
modal_cart.addEventListener('click', removeOpen);
modal_cart_section.addEventListener('click', function (event) {
    event.stopPropagation();
})

