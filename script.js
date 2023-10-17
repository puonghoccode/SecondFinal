$(function() {
  $(document).scroll(function(){
      var $nav = $('.nav');
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

var menu = document.getElementById("bar");
var items = document.getElementById("navbar");

items.style.right = "-360px";

menu.onclick = function() {
  if(items.style.right == "-360px"){
      items.style.right = "0";
  }
  else {
      items.style.right = "-360px";
  }
}




//======================================= Login-Signup button =====================================


const formOpenBtn = document.querySelector("#form-open");
login = document.querySelector(".login");
formContainer = document.querySelector(".form-container");
formCloseBtn = document.querySelector(".form-close");
signupBtn = document.querySelector("#signup");
loginBtn = document.querySelector("#login");
pwShowHide = document.querySelectorAll(".pw-hide");

formOpenBtn.addEventListener("click", () => login.classList.add("show"))
formCloseBtn.addEventListener("click", () => login.classList.remove("show"))

pwShowHide.forEach(icon => {
icon.addEventListener("click", () => {
  let getPwInput = icon.parentElement.querySelector("input");
  if(getPwInput.type === "password"){
    getPwInput.type = "text";
    icon.classList.replace("fa-eye-slash", "fa-eye");
    console.log(getPwInput);
  } else{
    getPwInput.type = "password";
    icon.classList.replace("fa-eye", "fa-eye-slash");
  }
})
})

signupBtn.addEventListener("click", (e) => {
e.preventDefault();
formContainer.classList.add("active");
})
loginBtn.addEventListener("click", (e) => {
e.preventDefault();
formContainer.classList.remove("active");
})



// Get the back to top button ==================================================


let mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  mybutton.style.display = "block";
} else {
  mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0; // For Safari
document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}




// Shopping cart button ============================================


let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCart = document.querySelector('.listCart');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
body.classList.add('active');
})

closeShopping.addEventListener('click', ()=>{
body.classList.remove('active');
})

let products = [
{
  id: 1,
  name: 'Mixed nuts mooncake',
  image: 'c1.jpg',
  price: 4.79
},
{
  id: 2,
  name: 'Mochi green bean mooncake',
  image: 'c6.jpg',
  price: 4.59
},
{
  id: 3,
  name: 'Lotus seed paste mooncake',
  image: 'c2.jpg',
  price: 5.19
},
{
  id: 4,
  name: 'Black garlic mooncake',
  image: 'c7.jpg',
  price: 5.99
},
{
  id: 5,
  name: 'Custard lava mooncake',
  image: 'c8.jpg',
  price: 5.29
},
{
  id: 6,
  name: 'Jelly mooncake',
  image: 'c5.jpg',
  price: 4.99
},
{
  id: 7,
  name: 'Red bean paste mooncake',
  image: 'c4.jpg',
  price: 5.29
},
{
  id: 8,
  name: 'Pineapple leaf paste',
  image: 'c3.jpg',
  price: 4.99
},
{
  id: 9,
  name: 'Revolving Lanterns',
  image: 'l1.jpg',
  price: 15.99
},
{
  id: 10,
  name: 'Cellophane Lanterns',
  image: 'l2.jpg',
  price: 18.99
},
{
  id: 11,
  name: 'Round Lanterns',
  image: 'l3.jpg',
  price: 15.29
},
{
  id: 12,
  name: 'Accordion Lanterns',
  image: 'l4.jpg',
  price: 14.79
},
];



let listCarts = [];

function initApp(){
products.forEach((value, key)=>{
  let newDiv = document.createElement('div');
  newDiv.classList.add('item');
  newDiv.innerHTML = `
    <img src="assets/${value.image}"/>
    <div class="title">${value.name}</div>
    <div class=" price">${value.price.toLocaleString()}$</div>
    <button onclick="addToCart(${key})">Add to Cart</button>
  `;
    list.appendChild(newDiv);
})
}

initApp();

function addToCart(key){
if(listCarts[key] == null){
  listCarts[key] = products[key];
  listCarts[key].quantity = 1;
}
reloadCart();
}

function reloadCart(){
listCart.innerHTML = '';
let count = 0;
let totalPrice = 0;
listCarts.forEach((value, key) => {
  totalPrice = totalPrice + value.price;
  count = count + value.quantity;

  if(value != null){
    let newDiv = document.createElement('li');
    newDiv.innerHTML = `
      <div class="product-img"><img src="assets/${value.image}"/></div>
      <div class="product-name">${value.name}</div>
      <div class="product-price"> &nbsp; &nbsp; ${value.price.toLocaleString()}$</div>
      <div>
        <button class="quantity-btn" onclick="changeQuantity(${key}, ${value.quantity -1})">&#8211;</button>
        <div class="count">${value.quantity}</div>
        <button class="quantity-btn" onclick="changeQuantity(${key}, ${value.quantity +1})">+</button>
      </div>
    `;
    listCart.appendChild(newDiv);
  }
})
total.innerText = totalPrice.toLocaleString();
quantity.innerText = count;
}

function changeQuantity(key, quantity){
if(quantity == 0){
  delete listCarts[key];
}else{
  listCarts[key].quantity = quantity;
  listCarts[key].price = quantity*products[key].price;
}
reloadCart();
}






