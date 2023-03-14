"use strict";
//STICKY NAVIGATION :
// const nav = document.querySelector(".nav__items");
// const header = document.querySelector(".header");
// const navHeight = nav.getBoundingClientRect().height;
// console.log(navHeight);
// const stickyNav = function (entries) {
//   const [entry] = entries;
//   console.log(entry);

//   if (!entry.isIntersecting) nav.classList.add("sticky");
//   else nav.classList.remove("sticky");
// };

// const headerObserver = new IntersectionObserver(stickyNav, {
//   root: null,
//   threshold: 0,
//   rootMargin: `-200px`,
// });

// headerObserver.observe(header);

// When the user scrolls the page, execute myFunction
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
    var curr = document.getElementsByClassName("active");
    curr[0].classList.remove("active");
    this.className += " active";
  });
}
