<header>
    <nav class="navbar navbar-expand-lg nav-color py-4 w-100 position-fixed">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <a class="navbar-brand" href="#">
      <img src="/img/logo-unand.png" alt="Bootstrap" width="42" height="42">
    </a>
    <a class="navbar-brand" href="#">
      <img src="/img/logo-bakti.png" alt="Bootstrap" width="42" height="42">
    </a>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-5">
        <li class="nav-item">
          <a class="nav-link {{($tittle === "Beranda") ? 'active' : '' }} " style="color: #6c2863;" aria-current="page" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($tittle === "Maskot") ? 'active' : '' }}" style="color: #6c2863;" href="/maskot">Maskot</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($tittle === "Peta") ? 'active' : '' }}" style="color: #6c2863;" href="/peta">Peta</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link {{($tittle === "Merchandise") ? 'active' : '' }}" style="color: #6c2863;" href="/merchandise">Merchandise</a>
        </li>
        <li class="nav-item">
        <div class="btn btn-first btn-nav" href="/login" role="button" onclick="showLoginBox()">
         Masuk
          <div id="loginBox" class="login-box" style="display: none;">
        <h2>Masuk Akun</h2>
        <input class="input-nim" type="text" placeholder="NIM">
        <input class="input-password" type="password" placeholder="Password">
      <a href="/edit-profile"><button>Masuk</button></a>  
        <img id="closeIcon" src="img/tutup.svg" alt="" onclick="closeLoginBox()">
    </div>
        </div>
        <div id="overlay"></div>
        </li>
      </ul>
    </div>
  </div>
</nav>  
    </header>