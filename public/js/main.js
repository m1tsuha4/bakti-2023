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

function showDaftarBox() {
    var daftarBox = document.getElementById("daftar");
    var overlay = document.getElementById("overlay");
    overlay.classList.add("overlay");
    daftarBox.style.display = "block";
    daftarBox.style.opacity = 1;
    overlay.style.display = "block";
    var body = document.getElementsByTagName("body")[0];
    body.style.overflow = "hidden";
}


function showLoginBox() {
  var loginBox = document.getElementById("loginBox");
  var overlay = document.getElementById("overlay");
  overlay.classList.add("overlay");
 loginBox.style.display = "block";
 loginBox.style.opacity = 1;
  overlay.style.display = "block";
  var body = document.getElementsByTagName("body")[0];
  body.style.overflow = "hidden";
}


function closeBox() {
    var Box = document.getElementById("daftar");
    var overlay = document.getElementById("overlay");
    overlay.classList.remove("overlay");
    Box.style.opacity = 0;
    var body = document.getElementsByTagName("body")[0];
    Box.classList.remove("overlay");

    setTimeout(function () {
        Box.style.display = "none";
        overlay.style.display = "none";
        body.style.overflow = "auto";
    }, 100); // Waktu animasi fade-out, dalam milidetik (misalnya, 500ms)
}

function closeLoginBox() {
  var Box = document.getElementById("loginBox");
  var overlay = document.getElementById("overlay");
  overlay.classList.remove("overlay");
  Box.style.opacity = 0;
  var body = document.getElementsByTagName("body")[0];
  Box.classList.remove("overlay");

  setTimeout(function () {
      Box.style.display = "none";
      overlay.style.display = "none";
      body.style.overflow = "auto";
  }, 100); // Waktu animasi fade-out, dalam milidetik (misalnya, 500ms)
}

let selectedOption = null;

function selectOption(option) {
    const optionElement = document.getElementsByClassName(option)[0];

    // Jika kotak sudah dipilih sebelumnya, batalkan pemilihan
    if (selectedOption === option) {
        selectedOption = null;
        optionElement.classList.remove("selected");
    } else {
        // Jika ada kotak yang sudah dipilih sebelumnya, batalkan pemilihan
        if (selectedOption) {
            const selectedElement =
                document.getElementsByClassName(selectedOption)[0];
            selectedElement.classList.remove("selected");
        }

        // Pilih kotak baru
        selectedOption = option;
        optionElement.classList.add("selected");
    }
}

function showUpdateBox() {
    var updateBox = document.getElementById("updateBox");
    var overlay = document.getElementById("overlay");
    overlay.classList.add("overlay");
    updateBox.style.display = "block";
    updateBox.style.opacity = 1;
    overlay.style.display = "block";
    var body = document.getElementsByTagName("body")[0];
    body.style.overflow = "hidden";
}

function closeUpdateBox() {
    var updateBox = document.getElementById("updateBox");
    var overlay = document.getElementById("overlay");
    overlay.classList.remove("overlay");
    updateBox.style.opacity = 0;
    var body = document.getElementsByTagName("body")[0];
    updateBox.classList.remove("overlay");

    setTimeout(function () {
        updateBox.style.display = "none";
        overlay.style.display = "none";
        body.style.overflow = "auto";
    }, 100); // Waktu animasi fade-out, dalam milidetik (misalnya, 500ms)
}

// Fungsi untuk menangani peristiwa drop saat elemen dijatuhkan
function handleDrop(event) {
    event.preventDefault();
    var file = event.dataTransfer.files[0];
    displayFileInfo(file);
    // Lakukan sesuatu dengan file yang dijatuhkan, seperti mengunggahnya atau memprosesnya.
    console.log("File dropped:", file);
}

// Fungsi untuk menangani peristiwa perambaan saat elemen ditarik
function handleDragOver(event) {
    event.preventDefault(); // Menghentikan peristiwa bawaan browser
}

// Fungsi untuk menampilkan informasi file yang dipilih
function displayFileInfo(file) {
    var dragOption = document.querySelector(".drag-option");
    dragOption.innerHTML = "";

    var iconAdd = document.createElement("img");
    iconAdd.classList.add("icon-add");
    iconAdd.src = "img/add-photo.svg"; // Ganti dengan sumber gambar yang sesuai
    iconAdd.alt = "Uploaded Image";
    dragOption.appendChild(iconAdd);

    var fileName = document.createElement("p");
    fileName.textContent = file.name;
    dragOption.appendChild(fileName);

    dragOption.classList.add("uploaded");
}

// Fungsi untuk mengubah ukuran file menjadi format yang lebih mudah dibaca
function formatFileSize(size) {
    if (size === 0) return "0 Bytes";
    var units = ["Bytes", "KB", "MB", "GB", "TB"];
    var i = Math.floor(Math.log(size) / Math.log(1024));
    return parseFloat((size / Math.pow(1024, i)).toFixed(2)) + " " + units[i];
}

// Fungsi untuk menangani peristiwa perambaan saat tombol "Browse" diklik
function handleBrowse() {
    var fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.accept = "image/*"; // Hanya menerima file gambar
    fileInput.addEventListener("change", function (event) {
        var file = event.target.files[0];
        displayFileInfo(file);
        // Lakukan sesuatu dengan file yang dipilih, seperti mengunggahnya atau memprosesnya.
        console.log("File selected:", file);
    });
    fileInput.click();
}

document.addEventListener('DOMContentLoaded', function() {
  // Kode JavaScript Anda di sini
  let eyeicon = document.getElementById("eyeicon");
  let password = document.getElementById("password-input");

  eyeicon.onclick = function() {
    if (password.type == "password") {
      password.type = "text";
      eyeicon.src = "img/eye.svg";
    } else {
      password.type = "password";
      eyeicon.src = "img/eye-slash.svg";
    }
  }

  let eyeicon2 = document.getElementById("eyeicon2");
  let password2 = document.getElementById("password-input2");

  eyeicon2.onclick = function() {
    if (password2.type == "password") {
      password2.type = "text";
      eyeicon2.src = "img/eye.svg";
    } else {
      password2.type = "password";
      eyeicon2.src = "img/eye-slash.svg";
    }
  }
});




var countDownDate = new Date("August 18, 2023 00:00:00").getTime();
var x = setInterval(function(){
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);



  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;


},1000);

