//plus and minus shop orders
const numbers = document.querySelectorAll('.tile-product .number');
numbers.forEach((number) => {
    number.addEventListener('click', (e) => {
        const plus = number.querySelector('.tile-plus');
        const minus = number.querySelector('.tile-minus');
        const input = number.querySelector('input');

        if (e.target == plus && input.value < 10) {
            input.value = parseInt(input.value) + 1;
        } else if (e.target == minus && input.value > 0) {
            input.value = parseInt(input.value) - 1;
        }
    })
})

// menu hamburger
const hamburger = document.querySelector(".button-menu .hamburger");
const header = document.querySelector(".nav-items");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    header.classList.toggle("active");
}

// delete elements
function removeFilter(button){
    button.parentElement.remove();
    // const element = document.querySelector(".li-filter");
    // element.remove();

    // const btn1 = document.getElementsByClassName('btn');
    // btn1.addEventListener('click', () => {
    // btn1.style.display = 'none';
// })
}
