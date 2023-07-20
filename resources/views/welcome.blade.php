<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAKTI UNAND 2023 | {{$tittle}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    
  </head>
  <body>

    
  @include('partials.navbar')

  <div class="nav-logo">
     <img src="/img/logo-unand.png" alt="Bootstrap" width="42" height="42">
    <img src="/img/logo-bakti.png" alt="Bootstrap" width="42" height="42">

  </div>

   <!-- ========== Start Login ========== -->

<section id="hero">
  <div class="container hero-main">
    <div class="row">
      <div class="col-4">
        <div class="bakti">
       <img src="img/bakti2023.svg" class="img-fluid" alt="Bakti2023" >
      </div>
      <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-style btn-first mt-5 fw-600" type="button" onclick="showLoginBox()" >
          Masuk
        <form id="loginBox" class="login-box" style="display: none">
          <div class="row justify-content-center mb-4">
            <h2>Masuk Akun</h2>
          </div>
            <div class="row justify-content-center g-5 mb-4">
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="NIM" aria-label="First name">
              </div>
            </div>
            <div class="row justify-content-center g-5 ">
              <div class="col-sm-8">
                <input type="password" class="form-control" placeholder="Password" aria-label="First name">
              </div>
             <a href="/dashboard">
              <div class="row justify-content-center">
                <div class="btn btn-nav btn-third">Masuk</div>
               </div></a> 
              <img id="closeIcon2" src="img/tutup.svg" alt="Close" onclick="closeLoginBox()">
            </div>
        </form>
        </button>
        <button class="btn btn-style btn-second" type="button">ID Card</button>
      </div>
      </div>
      <div class="col-7 ms-5 d-flex justify-content-end">
        <div class="col-9 ">
          <img src="img/komputer.svg" class="img-fluid" alt="Bakti2023" >
         </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== End Hero ========== -->
<!-- ========== Start Intro ========== -->
<section id="intro">
  <div class="container text-center intro-main">
    <div class="row">
      <div class="col-md-4 me-5 mt-5 intro-img">
        <img src="img/intro.svg" alt="">
      </div>
      <div class="col-md-6 intro-text">
        <p class="ms-5" > <strong>BAKTI</strong>(Bimbingan Aktivitas Kemahasiswaan dalam Tradisi Ilmiah) adalah kegiatan <strong>pengenalan</strong> terhadap<strong>, tradisi ilmiah dan pembinaan kegiatan kemahasiswaan</strong> di perguruan tinggi bagi <strong> mahasiswa baru Universitas Andalas</strong> </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 intro-main">
        <div class="intro-content">
          <div class="intro-header">Siapa aja tuh yang ikut BAKTI?</div>
          <div class="intro-body">
            <div class="intro-body-content">
              Setiap mahasiswa atau mahasiswi baru Universitas Andalas wajib mengikuti rangkaian kegiatan ini.
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 intro-main">
        <div class="intro-content">
          <div class="intro-header">Siapa aja tuh yang ikut BAKTI?</div>
          <div class="intro-body">
            <div class="intro-body-content">
              Setiap mahasiswa atau mahasiswi baru Universitas Andalas wajib mengikuti rangkaian kegiatan ini.
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-6 intro-main">
        <div class="intro-content">
          <div class="intro-header">Siapa aja tuh yang ikut BAKTI?</div>
          <div class="intro-body">
            <div class="intro-body-content">
              Setiap mahasiswa atau mahasiswi baru Universitas Andalas wajib mengikuti rangkaian kegiatan ini.
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 intro-main">
        <div class="intro-content">
          <div class="intro-header">Siapa aja tuh yang ikut BAKTI?</div>
          <div class="intro-body">
            <div class="intro-body-content">
              Setiap mahasiswa atau mahasiswi baru Universitas Andalas wajib mengikuti rangkaian kegiatan ini.
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  </section>  
  <!-- ========== End Intro ========== -->

  <!-- ========== Start Timeline ========== -->

  <section id="timeline">
    <div class="container text-center timeline">
      <div class="row">
        <div class="col timeline-header">
         <img src="img/timeline-header.svg" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col timeline-main">
          <img src="img/timeline-main.svg" class="img-fluid" alt="">
        </div>
        
      </div>
    </div>
  </section>

  <!-- ========== End Timeline ========== -->
  <!-- ========== Start Anthem ========== -->

  <section id="anthem">
    <div class="container text-center anthem">
      <div class="row">
        <div class="col anthem-header">
         <img src="img/anthem-header.svg" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col anthem-main">
          <img src="img/anthem-main.svg" class="img-fluid" alt="">
        </div>
        
      </div>
    </div>
  </section>
 <!-- ========== End Anthem ========== -->
  <!-- ========== Start Dokumentasi========== -->

  <section id="dokumentasi">
    <div class="container text-center dokumentasi">
      <div class="row">
        <div class="col dokumentasi-header">
         <img src="img/dokumentasi-header.svg" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row">
        <div class="col dokumentasi-main">
          <img src="img/dokumentasi.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- ========== End Dokumentasi========== -->
  @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js" ></script>
  </body>
</html>