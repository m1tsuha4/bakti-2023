<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAKTI UNAND 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
    
  </head>
  <body>

    @include('partials.sidebar')
   <div class="content">
    {{-- <div class="grid1"></div>
    <div class="grid2"></div> --}}
    <header>
        <div class="main-header">
            <img class="notif-header" src="img/notification.svg" alt="">
            <img class="profile-header" src="img/profile-circle.svg" alt="" class="">
            <h6 class="name-header" >Aina Malyona</h6>
        </div>
    </header>
    <div class="main-welcome">
        <h3 class="text-welcome">Selamat Datang di BAKTI, Aina </h3>
        <img class="img-welcome" src="img/hai.svg" alt="">
    </div>
    <div class="update-profile">
        <img src="img/add-profile.svg" alt="" class="add-profile" onclick="showUpdateBox()">
        <div id="updateBox" class="update-box" style="display: none;">
          <h2>Upload Photo</h2>
          <div class="drag-option" ondrop="handleDrop(event)" ondragover="handleDragOver(event)">
            <img class="icon-add" src="img/add-photo.svg" alt="">
            <p>Drag and drop here</p>
            <p>or</p>
            <p onclick="handleBrowse()"><strong>Browse</strong></p>
          </div>
          <a href="/edit-profile"><button>Simpan</button></a>
          <img id="closeIcon" src="img/tutup.svg" alt="" onclick="closeUpdateBox()">
        </div>
      </div>
      
           <div id="overlay"></div>
        <h3 class="tag-nama">Aina Malyona</h3>
        <h6 class="tag-nim">2110952048</h6>
    </div>
</div>
<div class="input-data">
    <div class="fullname">
        <h5 class="nama-lengkap">Nama Lengkap<p>*</p></h5>
        <input class="readonly-name" type="text" value="Aina Malyona" readonly>
        <h6 class="note">* Tidak dapat diubah</h6>
    </div>
    <div class="NIM">
        <h5 class="nim">NIM<p>*</p></h5>
        <input class="readonly-nim" type="text" value="2110952048" readonly>
        <h6 class="note">* Tidak dapat diubah</h6>
    </div>
    <div class="fakultas">
        <h5 class="edit-fakultas">Fakultas</h5>
        <input class="input-fakultas" type="text" placeholder="Fakultas">
        <img src="img/edit.svg" alt="" class="edit">
    </div>
    <div class="departemen">
        <h5 class="edit-departemen">Departemen</h5>
        <input class="input-departemen" type="text" placeholder="Departemen">
        <img src="img/edit.svg" alt="" class="edit">
    </div>
    <div class="jenis-kelamin">
        <h5 class="edit-kelamin">Jenis Kelamin</h5>
        <div class="option-p" onclick="selectOption('option-p')">Perempuan</div>
        <div class="option-l" onclick="selectOption('option-l')">Laki Laki</div>
    </div>
</div>
<div class="tanggal-lahir">
    <h5 class="edit-tgllhr">Tanggal Lahir</h5>
    <input class="input-tgllhr" type="text" placeholder="Tanggal Lahir">
    <img src="img/calendar.svg" alt="" class="edit">
</div>
    <div class="sandi-main">
        <h2 class="sandi-header">Ganti Kata Sandi</h2>
        <div class="sandi-lama">
            <h5 class="edit-sandi1">Kata Sandi Lama</h5>
            <input class="input-sandi1" type="password" placeholder="Sandi Lama">
            
        </div>
        <div class="sandi-baru">
            <h5 class="edit-sandi2">Kata Sandi Baru</h5>
            <input class="input-sandi2" type="password" placeholder="Sandi Baru">
        </div>
        <div class="simpan">
            <button class="simpan-profile" type="button">Simpan</button>
        </div>
    </div>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js" ></script>
  </body>
</html>