var loadFile = function (event) {
    var image = document.getElementById("output").addEventListener("click");
    image.src = URL.createObjectURL(event.target.files[0]);
};
