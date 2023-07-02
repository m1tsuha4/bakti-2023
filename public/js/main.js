const ItemHeaders = document.querySelectorAll(".intro-header");
ItemHeaders.forEach((ItemHeader) => {
    ItemHeader.addEventListener("click", (event) => {
        ItemHeader.classList.toggle("active");

        const ItemBody = ItemHeader.nextElementSibling;

        if (ItemHeader.classList.contains("active")) {
            ItemBody.style.maxHeight = ItemBody.scrollHeight + "px";
        } else {
            ItemBody.style.maxHeight = 0;
        }
    });
});

function showLoginBox() {
    var loginBox = document.getElementById("loginBox");
    var overlay = document.getElementById("overlay");
    overlay.classList.add('overlay');
    loginBox.style.display = "block";
    loginBox.style.opacity = 1;
    var body = document.getElementsByTagName("body")[0];
    body.style.overflow = "hidden";   
   
}

		