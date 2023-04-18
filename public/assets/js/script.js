"use strict";

//chevron scroll
const chevron = document.getElementById("chevron");
const sec2 = document.getElementById("section--2");

chevron.addEventListener("click", function () {
  sec2.scrollIntoView({ behavior: "smooth" });
});

//STICKY NAVIGATION :

window.onscroll = function () {
  myFunction();
};

// Get the navbar
var navbar = document.querySelector(".nav__items");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

// NAVBAR ACTIVE
var btnContainer = document.querySelector(".nav__links");
var btns = btnContainer.getElementsByTagName("a");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var curr = document.getElementsByClassName("activee");
    curr[0].classList.remove("activee");
    this.className += " activee";
  });
}
//slider
const sliderCloth = document.querySelector(".itemsCloth");
const sliderDish = document.querySelector(".itemsDish");
const sliderJewel = document.querySelector(".itemsJewel");
let isDown = false;
let startX;
let scrollLeft;
slide(sliderCloth);
slide(sliderDish);
slide(sliderJewel);

function slide(slider) {
  slider.addEventListener("mousedown", (e) => {
    isDown = true;
    slider.classList.add("active");
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  });
  slider.addEventListener("mouseleave", () => {
    isDown = false;
    slider.classList.remove("active");
  });
  slider.addEventListener("mouseup", () => {
    isDown = false;
    slider.classList.remove("active");
  });
  slider.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 3; //scroll-fast
    slider.scrollLeft = scrollLeft - walk;
  });
}

//TEXT FUNCTIONALITY
"const title = document.querySelector('.sec__title')" +
  ";" +
  "const txt = document.querySelector('.sec__testimonials--1')" +
  ";" +
  "title.textContent = 'Azul Fellawen !'" +
  ";" +
  "txt.innerHTML" +
  "=" +
  "'Kabyle culture refers to the indigenous cultural traditions of the Kabyle people, who are the original inhabitants of the Kabylie region in North Africa. Kabyle culture has survived for thousands of years and has been shaped by the region's geography, climate, and history. The Kabyle people have a unique language, Kabyle Tamazight, which has several dialects spoken across the region<br><br>The Kabyle people are known for their strong attachment to their traditions and values. Family and community are central to their culture, and hospitality is an important part of their way of life. Kabyle communities have a long history of self-sufficiency, with agriculture, animal husbandry, and weaving being the primary sources of livelihood.<br><br>Kabyle art is known for its vibrant colors and intricate designs, with pottery, jewelry, and weaving being particularly important forms.';";
