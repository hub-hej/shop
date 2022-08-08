(function (){
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
})();

(function(){
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
})
})();

(function(){
// menu hamburger
const hamburger = document.querySelector(".button-menu .hamburger");
const header = document.querySelector(".nav-items");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    header.classList.toggle("active");
}
})();

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


const img = document.getElementById('image-back');
let toogle = true;

const sliderAnim = [
    { opacity: '0' },
    { opacity: '1' }
];

const sliderAnimOptions = {
    duration: 500,
    iterations: 1
}

const sliderData = [
    {
        image: 'photos/Photo–1.png',   
    },
    {
        image: 'photos/Photo–1.png',
    },
    {
        image: 'photos/Photo–1.png',
    },
    {
        image: 'photos/Photo–1.png',
    },
    {
        image: 'photos/product-1.png',
    }
];
// img.addEventListener('click', function () {
//     toogle = !toogle;
//     if (toogle) {
//         img.src = image1;
//         headerTag.textContent = text1[0];
//         subheaderTag.textContent = text1[1];
//         paragraph.textContent = text1[2];
//     } else {
//         img.src = image2;
//         headerTag.textContent = text2[0];
//         subheaderTag.textContent = text2[1];
//         paragraph.textContent = text2[2];
//     }
//     img.animate(sliderAnim, sliderAnimOptions);
// })
// slider button left-right arrow 
document.getElementById("image-back").height = "518";

//Change photo thanks to slider button left-right arrow for lights
let slideIndex = 0;
function plusDivs(n) {
    slideIndex += n

    if (slideIndex == -1) {
        slideIndex = sliderData.length - 1;
    } else if (slideIndex == sliderData.length) {
        slideIndex = 0;
    }

    img.src = sliderData[slideIndex].image;
    img.animate(sliderAnim, sliderAnimOptions);
}

