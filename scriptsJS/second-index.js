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

//Button scroll on whole page
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

//This function allows for hide and show us text in class text-expand and footer-information
jQuery(document).ready(function($){
  op = function(obj) {
    $(obj).stop().slideToggle();
    };
});

(function (){
//This function allows for change color after click on pagination
links = document.querySelectorAll(".pagination a")
links.forEach(function (item) {
  item.addEventListener('click', function () {
    //reset the color of other links
    links.forEach(function (item) {
      item.style.backgroundColor = 'white'
    })
    // apply the style to the link
    this.style.backgroundColor = '#F74137'
  });
})
})();

(function (){
//This function allow for hide and show more information in dropdown left menu (GNIAZKA, WYŁĄCZNIKI)
var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
})();

//Add function which allow you to use input range
window.onload = function(){
  slideOne();
  slideTwo();
}
let sliderOne = document.getElementById("slider-1");
let sliderTwo = document.getElementById("slider-2");
let displayValOne = document.getElementById("range1");
let displayValTwo = document.getElementById("range2");
let minGap = 0;
let sliderTrack = document.querySelector(".slider-track");
let sliderMaxValue = document.getElementById("slider-1").max;
function slideOne(){
  if(parseInt(sliderTwo.value) - parseInt
  (sliderOne.value) <= minGap){
      sliderOne.value = parseInt(sliderTwo.value) - minGap;
  }
  displayValOne.textContent = sliderOne.value;
  fillColor();
}
function slideTwo(){
  if(parseInt(sliderTwo.value) - parseInt
  (sliderOne.value) <= minGap){
      sliderTwo.value = parseInt(sliderOne.value) + minGap;
  }
  displayValTwo.textContent = sliderTwo.value;
  fillColor();
}
function fillColor(){
  percent1 = (sliderOne.value / sliderMaxValue) * 100;
  percent2 = (sliderTwo.value / sliderMaxValue) * 100;
  sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #f74137 ${percent1}% , #f74137 ${percent2}% , #dadae5 ${percent2}%`;
}