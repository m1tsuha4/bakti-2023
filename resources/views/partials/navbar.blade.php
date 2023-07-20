<header>
    <nav class="navbar navbar-expand-lg nav-color py-4 w-100 position-fixed">
  <div class="container">
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
        {{-- <li class="nav-item">
          <a class="nav-link {{($tittle === "Merchandise") ? 'active' : '' }}" style="color: #6c2863;" href="/merchandise">Merchandise</a>
        </li> --}}
        <li class="nav-item">
        <div class="btn btn-first btn-nav" href="/login" role="button" onclick="showDaftarBox()">
          Daftar
            <form class="daftar" id="daftar" style="display: none">
             <div class="row justify-content-center mb-4">
              <h2>Daftar Akun</h2></div> 
              <div class="row justify-content-center g-5 mb-3">
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="First name">
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="NIM" aria-label="Last name">
                </div>
              </div>
              <div class="row justify-content-center g-5 mb-3">
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Fakultas" >
                </div>
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Departemen" aria-label="Last name">
                </div>
              </div>
              <div class="row justify-content-center g-5 mb-4">
                <div class="col-sm-5">
                  <input type="password" id="password-input" class="form-control" placeholder="Password" aria-label="First name">
                  <span class="show-password-icon"><img id="eyeicon" src="img/eye-slash.svg" alt=""></span>
                </div>
                <div class="col-sm-5">
                  <input type="password" id="password-input2" class="form-control" placeholder="Konfirmasi Password" aria-label="First name">
                  <span class="show-password-icon"><img id="eyeicon2" src="img/eye-slash.svg" alt=""></span>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="btn btn-nav btn-first button-login">Daftar</div>
              </div>
              <img id="closeIcon" src="img/tutup.svg" alt="Close" onclick="closeBox()">
              </div>
            </form>       
          </div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <div class="btn btn-first btn-nav" href="{{ route('login') }}" role="button" onclick="showLoginBox()">
         Masuk
          <div id="loginBox" class="login-box" style="display: none;">
        <h2>Masuk Akun</h2>
        <input class="input-nim" type="text" placeholder="NIM">
        <input class="input-password" type="password" placeholder="Password">
      <a href="{{ route('login') }}"><button>Masuk</button></a>
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
