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


$(document).ready(function() {
    //First hide the alert :
      $("#example").hide();
      
    // then bind the click :
    $("#alert-trigger").on("click", function () {
      
      $("#example").fadeIn(); // Shows the alert
      
      window.setTimeout(function() {
        $("#example").fadeOut(); // hides it again
      }, 3000);
      
    });
});

function search_level() {
    let input = document.getElementById('myInputs').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('menu_level1');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="flex";                 
        }
    }
  }
  
  function openNav() {
    document.getElementById("myNav").style.width = "70%";
  }
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
  
  //Open category "Produkty"
  function openProducts() {
    document.getElementById("myProducts").style.width = "70%";
  }
  function closeProducts() {
    document.getElementById("myProducts").style.width = "0%";
  }
  
  //Open category "Producenci"
  function openManufacturers() {
    document.getElementById("myManufacturers").style.width = "70%";
  }
  function closeManufacturers() {
    document.getElementById("myManufacturers").style.width = "0%";
  }
  
  //Open category "Źródła Światła"
  function openElements() {
    document.getElementById("myElementsLights").style.width = "70%";
  }
  function closeElements() {
    document.getElementById("myElementsLights").style.width = "0%";
  }
  
  //Open category "Spark" from "Źródła Światła"
  function openSpark(){
    document.getElementById("myCategorySpark").style.width = "70%";
  }
  function closeSpark() {
    document.getElementById("myCategorySpark").style.width = "0%";
  }
  
  //Open category "Automatyka, sterowanie"
  function openAutomatic(){
    document.getElementById("myAutomatic").style.width = "70%";
  }
  function closeAutomatic() {
    document.getElementById("myAutomatic").style.width = "0%";
  }
  
  //Open category "Oświetlenie wewnętrzne"
  function openInteriorLighting(){
    document.getElementById("myInterior").style.width = "70%";
  }
  function closeInteriorLighting() {
    document.getElementById("myInterior").style.width = "0%";
  }
  
  //Open overlay on whole page related to settings regional
  function openWholeNav() {
    document.getElementById("myWholeNav").style.display = "block";
  }
  
  function closeWholeNav() {
    document.getElementById("myWholeNav").style.display = "none";
  }
  