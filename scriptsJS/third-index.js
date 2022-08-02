const numbers = document.querySelectorAll('.tile-product .number');
numbers.forEach((number) => {
    number.addEventListener('click', (e) => {
        const plus = number.querySelector('.plus');
        const minus = number.querySelector('.minus');
        const input = number.querySelector('input');

        if (e.target == plus && input.value < 10) {
            input.value = parseInt(input.value) + 1;
        } else if (e.target == minus && input.value > 0) {
            input.value = parseInt(input.value) - 1;
        }
    })
})
const number_cart = document.querySelectorAll('.tile-light .number-light');
number_cart.forEach((numbers) => {
    numbers.addEventListener('click', (e) => {
        const plus_light = numbers.querySelector('.plus-light');
        const minus_light = numbers.querySelector('.minus-light');
        const input = numbers.querySelector('input');

        if (e.target == plus_light && input.value < 10) {
            input.value = parseInt(input.value) + 1;
        } else if (e.target == minus_light && input.value > 0) {
            input.value = parseInt(input.value) - 1;
        }
    })
});

// menu hamburger
const hamburger = document.querySelector(".button-menu .hamburger");
const header = document.querySelector(".nav-items");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    header.classList.toggle("active");
}

//Button scroll
var mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
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