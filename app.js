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

const headerTag = document.querySelector(".main-image .text-main-image h4");
const subheaderTag = document.querySelector(".main-image .text-main-image h3");
const paragraph = document.querySelector(".main-image .text-main-image p");

img.addEventListener('click', function () {
    toogle = !toogle;
    if (toogle) {
        img.src = image1;
        headerTag.textContent = text1[0];
        subheaderTag.textContent = text1[1];
        paragraph.textContent = text1[2];
    } else {
        img.src = image2;
        headerTag.textContent = text2[0];
        subheaderTag.textContent = text2[1];
        paragraph.textContent = text2[2];
    }
    img.animate(sliderAnim, sliderAnimOptions);
})