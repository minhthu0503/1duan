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



// const products_list_left_header = document.querySelectorAll('.products_list-left-header');
// const products_list_left_body = document.querySelectorAll('.products_list-left-body');
// const products_list_left_i  = document.querySelectorAll('.products_list-left-i');

// for(const list_left_header of products_list_left_header){
//     list_left_header.addEventListener('click', addOpen);
// }

// function addOpen(){
//     products_list_left_body.classList.add('open')
// }
// function removeOpen(){
//     products_list_left_body.classList.remove('open')
// }
// products_list_left_header.addEventListener('click', addOpen);
// products_list_left_i.addEventListener('click', removeOpen);

const js_left_click1 = document.querySelector('.js_left-click1');
const js_left_show1 = document.querySelector('.js_left-show1');
const js_left_remove1 = document.querySelector('.js_left-remove1');

const js_left_click2 = document.querySelector('.js_left-click2');
const js_left_show2 = document.querySelector('.js_left-show2');
const js_left_remove2 = document.querySelector('.js_left-remove2');

const js_left_click3 = document.querySelector('.js_left-click3');
const js_left_show3 = document.querySelector('.js_left-show3');
const js_left_remove3 = document.querySelector('.js_left-remove3');

const js_left_click4 = document.querySelector('.js_left-click4');
const js_left_show4 = document.querySelector('.js_left-show4');
const js_left_remove4 = document.querySelector('.js_left-remove4');

const js_left_rotate1 = document.querySelector('.js_left-rotate1');
const js_left_rotate2 = document.querySelector('.js_left-rotate2');
const js_left_rotate3 = document.querySelector('.js_left-rotate3');
const js_left_rotate4 = document.querySelector('.js_left-rotate4');


function addOpen1() {
    js_left_show1.classList.add('open')
   js_left_rotate1.classList.add('open')
    document.querySelector('.js_left-remove1').style.display = 'block';
}

function removeOpen1() {
    js_left_show1.classList.remove('open')
   js_left_rotate1.classList.remove('open')
    document.querySelector('.js_left-remove1').style.display = 'none';
}
js_left_click1.addEventListener('click', addOpen1);
js_left_remove1.addEventListener('click', removeOpen1);

function addOpen2() {
    js_left_show2.classList.add('open')
   js_left_rotate2.classList.add('open')
    document.querySelector('.js_left-remove2').style.display = 'block';

}

function removeOpen2() {
    js_left_show2.classList.remove('open')
   js_left_rotate2.classList.remove('open')
    document.querySelector('.js_left-remove2').style.display = 'none';
}
js_left_click2.addEventListener('click', addOpen2);
js_left_remove2.addEventListener('click', removeOpen2);


function addOpen3() {
    js_left_show3.classList.add('open')
   js_left_rotate3.classList.add('open')
    document.querySelector('.js_left-remove3').style.display = 'block';

}

function removeOpen3() {
    js_left_show3.classList.remove('open')
    document.querySelector('.js_left-remove3').style.display = 'none';
}
js_left_click3.addEventListener('click', addOpen3);
js_left_remove3.addEventListener('click', removeOpen3);


function addOpen4() {
    js_left_show4.classList.add('open')
   js_left_rotate4.classList.add('open')
    document.querySelector('.js_left-remove4').style.display = 'block';
}

function removeOpen4() {
    js_left_show4.classList.remove('open')
    document.querySelector('.js_left-remove4').style.display = 'none';
}
js_left_click4.addEventListener('click', addOpen4);
js_left_remove4.addEventListener('click', removeOpen4);





