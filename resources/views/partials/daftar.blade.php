<form method="POST" action="{{ route('register') }}" class="daftar" id="daftar" style="display: none">
    @csrf
  <div class="col">
    <div class="row justify-content-center mb-2">
     <p>Daftar Akun</p></div>

        <div class="row mb-3 costum-margin justify-content-center">
          <div class="col-9">
            <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" >
          </div>
        </div>
        <div class="row mb-3 costum-margin justify-content-center">
          <div class="col-9">
            <input type="text" name="nim" class="form-control" placeholder="NIM" >
          </div>
        </div>
        <div class="row mb-3 costum-margin justify-content-center">
          <div class="col-9">
            <input type="email" name="email" class="form-control" placeholder="Email" >
          </div>
        </div>
        <div class="row mb-3 costum-margin justify-content-center">
          <div class="col-9 input-password">
            <input type="password" name="password" id="sandiDaftar3" class="form-control" placeholder="Password" aria-label="First name">
         <span class="show-password-icon"><img id="eyeicon3" src="img/eye-slash.svg" alt=""></span>
          </div>
        </div>
        <div class="row mb-4 justify-content-center">
          <div class="col-9 input-password">
            <input type="password" name="password_confirmation" id="sandiDaftar4" class="form-control" placeholder="Password" aria-label="First name">
         <span class="show-password-icon"><img id="eyeicon4" src="img/eye-slash.svg" alt=""></span>
          </div>
        </div>
        <div class="row mb justify-content-center">
            <button type="submit" class="btn btn-nav btn-first button-daftar">Daftar</button>
        </div>
      </div>
     {{-- <div class="row justify-content-center g-5 mb-3">
       <div class="col-sm-5">
         <input type="text" class="form-control" placeholder="Email" aria-label="First name">
       </div>
     </div>
     <div class="row justify-content-center g-5 mb-3">
       <div class="col-sm-5">
         <input type="text" class="form-control" placeholder="Nama Lengkap" >
       </div>
       <div class="col-sm-5">
         <input type="text" class="form-control" placeholder="NIM" aria-label="Last name">
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
     </div> --}}
     <img id="closeIcon" src="img/tutup.svg" alt="Close" onclick="closeBox()">
     </form>
