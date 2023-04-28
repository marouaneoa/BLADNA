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

/* login modal */

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
    modal.style.display = "block";
};

span.onclick = function () {
    modal.style.display = "none";
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
