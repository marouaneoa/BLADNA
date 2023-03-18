"use strict";

const img = document.getElementById("photo");
const maintxt = document.getElementById("maintxt");
const subtxt = document.getElementById("subtxt");

const images = [
  "https://images.pexels.com/photos/11756748/pexels-photo-11756748.jpeg?auto=compress&cs=tinysrgb&w=1600",
  "https://images.pexels.com/photos/2092453/pexels-photo-2092453.jpeg?auto=compress&cs=tinysrgb&w=1600",
  "https://images.pexels.com/photos/2458417/pexels-photo-2458417.jpeg?auto=compress&cs=tinysrgb&w=1600",
  "https://images.pexels.com/photos/13658377/pexels-photo-13658377.jpeg?auto=compress&cs=tinysrgb&w=1600",
  "https://images.pexels.com/photos/8798170/pexels-photo-8798170.jpeg?auto=compress&cs=tinysrgb&w=1600",
  "https://images.pexels.com/photos/8876645/pexels-photo-8876645.jpeg?auto=compress&cs=tinysrgb&w=1600",
  "https://images.pexels.com/photos/13682900/pexels-photo-13682900.jpeg?auto=compress&cs=tinysrgb&w=1600", //needs black
  "https://images.pexels.com/photos/4511194/pexels-photo-4511194.jpeg?auto=compress&cs=tinysrgb&w=1600",
  "https://images.pexels.com/photos/10390401/pexels-photo-10390401.jpeg?auto=compress&cs=tinysrgb&w=1600", //also needs black,
  "https://images.pexels.com/photos/15881239/pexels-photo-15881239.jpeg?auto=compress&cs=tinysrgb&w=1600", //needs black
];

let i = 0;

function changeBackground() {
  img.style.opacity = 0.5;

  setTimeout(() => {
    img.style.backgroundImage = "url(" + images[i] + ")";
    img.style.opacity = 1;
    i = (i + 1) % images.length;
    if (i == 1 || i == 4 || i == 6 || i == 7 || i == 8) {
      maintxt.style.color = "Black";
      subtxt.style.color = "#5d9c59";
    } else {
      maintxt.style.color = "White";
      subtxt.style.color = "#c7e8ca";
    }
  }, 1500);
}

changeBackground();
setInterval(changeBackground, 3000);

/*
var i = 0;
function change() {
  if (i == images.length - 1) {
    i = 0;
  } else {
    i++;
  }
  img.style.backgroundImage = "url(" + images[i] + ")";
  if (i == 1 || i == 4 || i == 6 || i == 7 || i == 8) {
    maintxt.style.color = "Black";
    subtxt.style.color = "#5d9c59";
  } else {
    maintxt.style.color = "White";
    subtxt.style.color = "#c7e8ca";
  }
}

window.onload = function () {
  setInterval(change, 2000);
};
*/
// buttons listener
const btn = document.querySelector(".sec__btn");
const formOne = document.querySelector(".form--1");
const footer = document.querySelector(".sec__footer");
const formTwo = document.querySelector(".form--2");
const formend = document.querySelector(".sec__end");
let k = 1;
console.log(form);
btn.addEventListener("click", function () {
  if (k == 1) {
    formOne.classList.add("hidden");
    footer.classList.add("hidden");
    formTwo.classList.remove("hidden");
    k++;
  } else {
    formTwo.classList.add("hidden");
    btn.classList.add("hidden");
    formend.classList.remove("hidden");
  }
});

//profile

var input = document.getElementById("image-input");
var output = document.getElementById("sec__photo__container");
input.addEventListener("change", function () {
  if (input.files[0]) {
    var reader = new FileReader();
    reader.addEventListener("load", function () {
      console.log(reader.result);
      output.src = reader.result;
      output.style.backgroundColor = "transparent";
    });
    reader.readAsDataURL(input.files[0]);
  }
});
