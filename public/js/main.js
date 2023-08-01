const Penugasan = document.querySelectorAll(".penugasan-box");
Penugasan.forEach((ItemHeader) => {
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

const PenugasanLate = document.querySelectorAll(".penugasan-box-late");
PenugasanLate.forEach((ItemHeader) => {
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

const PenugasanDone = document.querySelectorAll(".penugasan-box-done");
PenugasanDone.forEach((ItemHeader) => {
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

    let eyeicon5 = document.getElementById("eyeicon5");
    let password5 = document.getElementById("sandiMasuk");

    eyeicon5.onclick = function() {
        if (password5.type == "password") {
            password5.type = "text";
            eyeicon5.src = "img/eye.svg";
        } else {
            password5.type = "password";
            eyeicon5.src = "img/eye-slash.svg";
        }
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Kode JavaScript Anda di sini

    let eyeicon3 = document.getElementById("eyeicon3");
    let password3 = document.getElementById("sandiDaftar3");

    eyeicon3.onclick = function() {
        if (password3.type == "password") {
            password3.type = "text";
            eyeicon3.src = "img/eye.svg";
        } else {
            password3.type = "password";
            eyeicon3.src = "img/eye-slash.svg";
        }
    }
    let eyeicon4 = document.getElementById("eyeicon4");
    let password4 = document.getElementById("sandiDaftar4");

    eyeicon4.onclick = function() {
        if (password4.type == "password") {
            password4.type = "text";
            eyeicon4.src = "img/eye.svg";
        } else {
            password4.type = "password";
            eyeicon4.src = "img/eye-slash.svg";
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




function showNotification() {
    const emailInput = document.getElementById('exampleFormControlInput1').value;
    const notification = document.getElementById('notification');
    if (emailInput !== "") {
        notification.style.display = 'block';

        // Dapatkan elemen form berdasarkan ID
        var form = document.getElementById('email');
        // Lakukan submit form
        form.submit();
    }
}

//   sidebar aktif

document.addEventListener('DOMContentLoaded', function() {
    // Kode JavaScript Anda di sini
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("sandiLama");

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
    let password2 = document.getElementById("sandiBaru");

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

function toggleColor(activeInputId, inactiveInputId) {
    const activeInput = document.getElementById(activeInputId);
    const inactiveInput = document.getElementById(inactiveInputId);

    activeInput.classList.add("active");
    activeInput.classList.remove("inactive");

    inactiveInput.classList.add("inactive");
    inactiveInput.classList.remove("active");
}

// Simulasikan data pengguna dalam bentuk objek atau dari database Anda
const users = [
    { nim: '123456789', password: 'password123' },
    { nim: '987654321', password: 'securepass' }
];

function showConfirmationDialog() {
    var dialog = document.getElementById('confirmation-dialog');
    dialog.style.display = 'block';
}

function closeDialog() {
    var dialog = document.getElementById('confirmation-dialog');
    dialog.style.display = 'none';
}

document.getElementById('logout-button').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    showConfirmationDialog();
});

function logout() {
    closeDialog();
    // Lakukan tindakan logout
    window.location.href = "/";
}


// Fungsi untuk menampilkan notifikasi SweetAlert2
// function showNotification() {
//     Swal.fire({
//         icon: 'success',
//         title: 'Notifikasi',
//         text: 'Tombol telah ditekan!',
//     });
// }

// Fungsi untuk mengarahkan ke halaman selanjutnya setelah notifikasi ditampilkan

//button login
function submitLoginForm() {
    var form = document.getElementById('loginBox');
    form.submit();
}
//button daftar
function submitRegisterForm() {
    var form = document.getElementById('daftar');
    form.submit();
}


function handleFileChange() {
    var fileInput = document.getElementById('foto');
    var customFileLabel = document.querySelector('.custom-file-input-wrapper');
    var dragTextElements = document.querySelectorAll('.drag-option p');

    if (fileInput.files.length > 0) {
      // Jika ada file yang dipilih, sembunyikan teks dan label
      customFileLabel.style.display = 'none';
      for (var i = 0; i < dragTextElements.length; i++) {
        dragTextElements[i].style.display = 'none';
      }
    } else {
      // Jika tidak ada file yang dipilih, tampilkan teks dan label kembali
      customFileLabel.style.display = 'block';
      for (var i = 0; i < dragTextElements.length; i++) {
        dragTextElements[i].style.display = 'block';
      }
    }
  }

  // Tambahkan event listener untuk file input
  document.getElementById('foto').addEventListener('change', handleFileChange);



