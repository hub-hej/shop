(function () {
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

(function () {
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

(function () {
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

//Function which allows for hide and show text during responsive pages
jQuery(document).ready(function ($) {
    op = function (obj) {
        $(obj).stop().slideToggle();
    };
});


//Function which allows the opinion to be marked stars
$(".star").on('click', function(){
    for(let i=0; i<= 4;i++){
      document.getElementById(i).querySelector('.fa-star').style.color = "";
    }
    for(let i=0; i<= this.id;i++){
      document.getElementById(i).querySelector('.fa-star').style.color = "orange";
    }
  });

//Function which allow on open and close overlay
function openNav() {
    document.getElementById("myNav").style.display = "block";
}
function closeNav() {
    document.getElementById("myNav").style.display = "none";
}

//Function which allow on open and close overlay
function openNavs() {
    document.getElementById("myNavs").style.display = "block";
}
function closeNavs() {
    document.getElementById("myNavs").style.display = "none";
}

(function (){
//Moved btn text into variable so it can be changed more easily
var btn_text = {
    default: "Dodaj do ulubionych",
    added: "Usuń z ulubionych"
}
$('.fav_btn')
//set initial text and classes
.removeClass('remove added')
.html(btn_text.default)
//The click toggles the 'default' and 'added' states
.on('click', function(e) {

    //Toogle the 'added' class
    $(this).toggleClass('added');

    //Swap the text
    if ($(this).is('.added')) {
        $(this).html(btn_text.added);
    } else {
        $(this)
            .removeClass('remove added')
            .html(btn_text.default)
    }
})
})();

//Function which changes color to another
function getclick(elem) {
    elem.style.color = '#f74137';
}

let carts = document.querySelectorAll('.button9');
let products = [
  {
    name: 'Łącznik jednobiegunowy (moduł) 10AX - kontener 2',
    tag: 'Kod produktu: CW1.01/11',
    price: 190.24, 
    inCart: 0
  },
  {
    name: 'Łącznik jednobiegunowy (moduł) 10AX 4',
    tag: 'cross1',
    price: 367.01, 
    inCart: 0
  },
  {
    name: 'Łącznik jednobiegunowy (moduł) 10AX 4',
    tag: 'Kod produktu: CW1.02/11',
    price: 223.12, 
    inCart: 0
  },
  {
    name: 'Łącznik jednobiegunowy (moduł) 10AX 5',
    tag: 'Kod produktu: CW1.03/11',
    price: 367.01, 
    inCart: 0
  }
];
for (let i=0; i< carts.length; i++){
  carts[i].addEventListener('click', () =>{
    cartNumbers(products[i]);
    totalCost(products[i]);
  })
}
 function onLoadCartNumbers(){
   let productNumbers = localStorage.getItem('cartNumbers');
   if(productNumbers){
     document.querySelector('.number-orders').textContent = productNumbers;
   }
}
function cartNumbers(product){
  let productNumbers = localStorage.getItem('cartNumbers');

  productNumbers = parseInt(productNumbers);
  if(productNumbers){
    localStorage.setItem('cartNumbers', productNumbers + 1);
    document.querySelector('.number-orders').textContent = productNumbers + 1;

  }
  else
  {
    localStorage.setItem('cartNumbers', 1);
    document.querySelector('.number-orders').textContent = 1;
  }
  setItems(product);
}
function setItems(product){
  let cartItems = localStorage.getItem('productsInCart');
  cartItems = JSON.parse(cartItems);

  if(cartItems != null){
    if(cartItems[product.tag] == undefined){
      cartItems = {
        ...cartItems, 
        [product.tag]: product
      }
    }
    cartItems[product.tag].inCart += 1;
  } else {
    product.inCart = 1;
    cartItems = {
      [product.tag]: product 
    }
  }
  localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}
function totalCost(product){
  let cartCost = localStorage.getItem('totalCost');

  if(cartCost != null){
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost", cartCost + product.price);
  } else{
    localStorage.setItem("totalCost", product.price);
  }
}
onLoadCartNumbers();

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

function calc(n) {
  var price = document.getElementsByClassName("ticket_price")[n].innerHTML;
  var noTickets = document.getElementsByClassName("num")[n].value;
  var total = parseFloat(price) * noTickets;
  if (!isNaN(total))
    document.getElementsByClassName("total")[n].innerHTML = total;
}

/*For total*/
$(document).ready(function() {
  $(".tile-light").on("input", ".quantity", function() {
    var price = +$(".price").data("price");
    var quantity = +$(this).val();
    $("#total").text( price * quantity + "zł" );
  })

  var $buttonPlus = $('.plus-light');
  var $buttonMin = $('.minus-light');
  var $quantity = $('.quantity');
  
  /*For plus and minus buttons*/
  $buttonPlus.click(function() {
    $quantity.val(parseInt($quantity.val())).trigger('input');
  });
  
  $buttonMin.click(function() {
    $quantity.val(Math.max(parseInt($quantity.val()))).trigger('input');
  });
})