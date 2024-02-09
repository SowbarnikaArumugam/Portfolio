const header = document.querySelector("header");

window.addEventListener ("scroll", function(){
    header.classList.toggle("sticky", window.scrollY > 0)
});

let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () => {
    menu.classList.toggle('bx bx-menu');
    navlist.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('bx bx-menu');
    navlist.classList.remove('active');
}