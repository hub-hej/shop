//Function which allows for hide and show text during responsive pages
jQuery(document).ready(function ($) {
    op = function (obj) {
        $(obj).stop().slideToggle();
    };
});
//Button scroll
var mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
// menu hamburger
const hamburger = document.querySelector(".button-menu .hamburger");
const header = document.querySelector(".nav-items");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    header.classList.toggle("active");
}