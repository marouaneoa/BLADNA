//STICKY NAVIGATION :

window.onscroll = function () {
    myFunction();
};

// Get the navbar
var navbar = document.querySelector(".nav__items");
var header = document.getElementById("header");
// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky");
        header.style.marginTop = "100px";
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
