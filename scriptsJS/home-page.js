(function ()
{
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

const image1 = 'photos/MaskGroup40.png';
const image2 = 'photos/Mask Group 40.png';

const text1 = [
    "POZNAJ SEDNA",
    "Schneider Electric",
    "Senda to osprzęt elektroinstalacyjny o wyrazistym kształcie oraz unikalnej formie."
];

const text2 = [
    "Philips HUE",
    "Oświetl swój dom",
    "Wyobraź sobie, że jednym dotknięciem wyłączasz wszystkie światła."
];

const sliderData = [
    {
        image: 'photos/MaskGroup40.png',
        header: 'POZNAJ SEDNA',
        subheader: 'Schneider Electric',
        text: 'Senda to osprzęt elektroinstalacyjny o wyrazistym kształcie oraz unikalnej formie.'
    },
    {
        image: 'photos/Mask Group 40.png',
        header: 'Philips HUE',
        subheader: 'Oświetl swój dom',
        text: 'Wyobraź sobie, że jednym dotknięciem wyłączasz wszystkie światła.'
    }
];

const headerTag = document.querySelector(".main-image .text-main-image h4");
const subheaderTag = document.querySelector(".main-image .text-main-image h3");
const paragraph = document.querySelector(".main-image .text-main-image p");

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

let slideIndex = 0;

function plusDivs(n) {
    slideIndex += n

    if (slideIndex == -1) {
        slideIndex = sliderData.length - 1;
    } else if (slideIndex == sliderData.length) {
        slideIndex = 0;
    }

    img.src = sliderData[slideIndex].image;
    headerTag.textContent = sliderData[slideIndex].header;
    subheaderTag.textContent = sliderData[slideIndex].subheader;
    paragraph.textContent = sliderData[slideIndex].text;
    img.animate(sliderAnim, sliderAnimOptions);
}
// menu hamburger
 const hamburger = document.querySelector(".button-menu .hamburger");
 const header = document.querySelector(".nav-items");

 hamburger.addEventListener("click", mobileMenu);

 function mobileMenu() {
     hamburger.classList.toggle("active");
     header.classList.toggle("active");
}



























































// function show_list() {
//     var courses = document.getElementsByClassName("courses_class");

//     if (courses.style.display == "block") {
//         courses.style.display = "none";
//     } else {
//         courses.style.display = "block";
//     }
// }
// window.onclick = function (event) {
//     if (!event.target.matches('.button-menu')) {
//         document.getElementsByClassName('courses_class')
//             .style.display = "none";
//     }
// }  

    /*function increment(target) {
    const plus = target;
    const input = plus.previousElementSibling;
    input.value = parseInt(input.value) + 1;
 }
 function decrement(target) {
  const minus = target;
  const input = minus.nextElementSibling;
  input.value = parseInt(input.value) -  1;
 } */

