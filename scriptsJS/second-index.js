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

//Function which allow for choose as many things as we want to display
$('.choice').on('change', function() {
  var currentVal = $(this).val();

  if (currentVal == 0) {
    $('.light').show();
  } else {
    $('.light').hide().slice(0, currentVal).show();
  }
})

//Function which allows for search lights 
function searchFunction() {
  const searchbox = document.getElementById("myInput").value.toUpperCase();
  const storeitems = document.getElementById("product-list");
  const product = document.querySelectorAll(".light");
  const pname = storeitems.getElementsByTagName("h2");

  for (var i = 0; i < pname.length; i++) {
    let match = product[i].getElementsByTagName('h2')[0];

    if (match) {
      let textvalue = match.textContent || match.innerHTML; 

      if (textvalue.toUpperCase().indexOf(searchbox) > -1){
        product[i].style.display = "";
      } else {
        product[i].style.display = "none";
      }
    }
  }
}

//Function related to checkbox Producent with Parametr 1, Parametr 2, Parametr 3, ...
jQuery(function(){ // document ready to process
  jQuery('ul').find("input").on('change',function(){ // when the input changes
    let selected = []; // init a selected array
    jQuery('ul').find("input").each(function(){ // on every input 
      if(jQuery(this).is(":checked")){ // check if the input is checked
        selected.push(jQuery(this).val()); // push the selected value to selected array
      }
    })
    if(!selected.length){ // if no items selected
    jQuery("div.light").show(); // show all
    return; // stop code execution
    
    }
    jQuery("div.light").hide(); // hide all divs
    jQuery("div.light").each(function(){ // take each div
      const category = jQuery(this).attr('data-category'); // capture the attribute category
      const categorySplitted = category.split(' '); // split each category by space
      categorySplitted.forEach((cat)=>{ // foreach category array
        if(selected.indexOf(cat) !== -1){ // cross check with selected categories; if selected
        jQuery(this).show(); // show the div
        }
      });
      
    });
  });
  });

  function myFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck");
    // Get the output text
    var text = document.getElementById("text");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }
  function myFunction2() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck2");
    // Get the output text
    var text = document.getElementById("text2");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction3() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck3");
    // Get the output text
    var text = document.getElementById("text3");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction4() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck4");
    // Get the output text
    var text = document.getElementById("text4");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction5() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck5");
    // Get the output text
    var text = document.getElementById("text5");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction6() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck6");
    // Get the output text
    var text = document.getElementById("text6");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction7() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck7");
    // Get the output text
    var text = document.getElementById("text7");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction8() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck8");
    // Get the output text
    var text = document.getElementById("text8");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction9() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck9");
    // Get the output text
    var text = document.getElementById("text9");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction10() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck10");
    // Get the output text
    var text = document.getElementById("text10");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction11() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck11");
    // Get the output text
    var text = document.getElementById("text11");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

  function myFunction12() {
    // Get the checkbox
    var checkBox = document.getElementById("myCheck12");
    // Get the output text
    var text = document.getElementById("text12");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
      text.style.display = "flex";
    } else {
      text.style.display = "none";
    }
  }

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}