@extends('layouts.beranda')

@section('content')




    
    <div class="nav-logo">
        <img src="/img/logo-unand.png" alt="Bootstrap" width="42" height="42">
        <img src="/img/logo-bakti.png" alt="Bootstrap" width="42" height="42">

    </div>

    <!-- ========== Start Login ========== -->
    <section id="hero">
        <div class="container hero-main">
            <div class="row hero">
                <div class="col-4">
                    <div data-aos="zoom-in" data-aos-duration="1000" class="bakti">
                        <img src="img/bakti2023.svg" class="img-fluid" alt="Bakti2023" >
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-style btn-first mt-5 fw-600" type="button" onclick="showLoginBox()" >
                            Masuk
                            <form method="POST" action="{{ route('login') }}" id="loginBox" class="login-box" style="display: none" >
                                @csrf
                                <div class="row justify-content-center mb-4">
                                    <h2>Masuk Akun</h2>
                                </div>
                                <div class="row justify-content-center g-5 mb-4">
                                    <div class="col-sm-8">
                                        <div class="row justify-content-center"><input type="text" name="nim" class="form-control input" placeholder="NIM" aria-label="First name"></div>
                                    </div>
                                </div>
                                <div class="row justify-content-center g-4">
                                    <div class="col-sm-8">
                                        <div class="row justify-content-center"><input type="password" id="sandiMasuk" name="password" class="form-control password" placeholder="Password" aria-label="First name">
                                            <span class="show-password-icon1"><img id="eyeicon5" class="icon-password" src="img/eye-slash.svg" alt=""></span>
                                        </div>
                                    </div>
                                    <div class="col button-forgot">
                                        <div class="row justify-content-center">
                                            @if (Route::has('password.request'))
                                            <div class="col-md-7">
                                                <a href="{{ route('password.request') }}"> 
                                                    <div class="row mb-4 justify-content-end forget-password"> 
                                                        
                                                             Forgot Password
                                                    </div>
                                                    </div>
                                                </a>
                                            @endif
                                            <div class=" btn btn-nav btn-third button-login" onclick="submitLoginForm()">Masuk</div>
                                        </div>

                                    </div>
                                    <img id="closeIcon2" src="img/tutup.svg" alt="Close" onclick="closeLoginBox()">
                                </div>
                            </form>
                        </button>
                        <button class="btn btn-style btn-second" type="button">ID Card</button>
                    </div>
                </div>
                <div class="col-8  d-flex justify-content-end">
                    <div data-aos="zoom-in" data-aos-duration="1000" class="col-8">
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
            <div class="row intro-row1 ">
                <div data-aos="fade-up                                              " data-aos-duration="1000" class="col-md-4 me-5 mt-5 intro-img">
                    <img src="img/intro.svg" alt="">
                </div>
                <div class="col-md-6 intro-text">
                    <div class="row">
                        <p data-aos="fade-up" data-aos-duration="1000" class="" > <strong>BAKTI</strong>(Bimbingan Aktivitas Kemahasiswaan dalam Tradisi Ilmiah) adalah kegiatan <strong>pengenalan</strong> terhadap<strong>, tradisi ilmiah dan pembinaan kegiatan kemahasiswaan</strong> di perguruan tinggi bagi <strong> mahasiswa baru Universitas Andalas</strong> </p>
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
            <div class="row ">
                <div class="col d-flex justify-content-center anthem-main">
                    <div class="card " style="width: 50rem;">
                        {{-- <div class="card-body">
                        </div> --}}
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/twI-4xFNU7M" title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
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


    
@endsection
