<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BAKTI UNAND 2023 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
    
  </head>
  <body>
    
          @include('partials.sidebar') 
          @include('partials.header')

          <div class="container-fluid ">
            <div class="row">
              <div class="col  welcome-content">
                <div class="row ">
                  <div class="col mt-3 text-content ">
                    <img class="img-fluid profile-welcome" src="img/profile-img.svg" alt="">
                    <div class="col mt-3 welcome-header">
                      <h2>Hello Aina</h2>
                      <p>Selamat datang di BAKTI 2023</p>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col countdown-content">
                    <h4><img class="img-fluid me-1" src="img/countdown.svg" alt=""> Countdown Bakti 2023</h4>
                    <div class="card countdown-box" style="width: 28rem; height:10rem; ">
                      <div class="card-body">
                        <div class="col">
                          <div class="card countdown-fill" style="width: 5rem; height:5rem;"><p id="days">00</p> </div>
                          <h6 class="text-center" >Hari</h6>
                        </div>
                        <div class="col">
                          <div class="card countdown-fill" style="width: 5rem; height:5rem;"><p id="hours">00</p> </div>
                          <h6 class="text-center">Jam</h6>
                        </div>
                        <div class="col">
                          <div class="card countdown-fill" style="width: 5rem; height:5rem;"><p id="minutes">00</p></div>
                          <h6 class="text-center">Menit</h6>
                        </div>
                        <div class="col">
                          <div class="card countdown-fill" style="width: 5rem; height:5rem;"><p id="seconds">00</p></div>
                          <h6 class="text-center">Detik</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col tugas-content">
                   <div class="row">
                    <div class="col">
                      <h4><img class="img-fluid me-3" src="img/task.svg" alt="">Tugas</h4></div> 
                      <div class="col text-end lihat-tugas"><a href="/penugasan"><p>Lihat</p></a></div>
                    </div>
                   
                    <div class="card mb-4 tugas-box" style="width: 28rem; height:6rem">
                      <div class="row upload-tugas">
                        <div class="col-6 ms-5 upload-teks ">
                          <div class="row">
                            <div class="col upload-header">Resume Talkshow</div>
                          </div>
                          <div class="row">
                            <div class="col deadline-upload">Terakhir dikumpul 16 Agustus 2023</div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="btn btn-upload">Upload</div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-4 tugas-box" style="width: 28rem; height:6rem">
                      <div class="row upload-tugas">
                        <div class="col-6 ms-5 upload-teks ">
                          <div class="row">
                            <div class="col upload-header">Resume Talkshow</div>
                          </div>
                          <div class="row">
                            <div class="col deadline-upload">Terakhir dikumpul 16 Agustus 2023</div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="btn btn-upload">Upload</div>
                        </div>
                      </div></div>
                    <div class="card mb-4 tugas-box-late" style="width: 28rem; height:6rem">
                      <div class="row upload-tugas">
                        <div class="col-6 ms-5 upload-teks">
                          <div class="row">
                            <div class="col upload-header-late">Resume Talkshow</div>
                          </div>
                          <div class="row">
                            <div class="col deadline-upload-late">Terakhir dikumpul 16 Agustus 2023</div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="btn btn-upload-late">Upload</div>
                        </div>
                      </div></div>
                    <div class="note-tugas">
                      <p class="note1" > <img src="img/note1.svg" alt="">  Belum Dikumpul</p>
                      <p class="note2" > <img src="img/note2.svg" alt="">  Terlambat</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="row">
                  <div class="col mt-3 mb-2">
                    <div class="d-grid mt-2 gap-2 col-6 mx-auto download-content">
                      <button  class="btn btn-first" type="button"> <img class="me-2" src="img/document-download.svg" alt=""> Unduh ID Card</button>
                      <button class="btn btn-first" type="button"><img class="me-2" src="img/document-download.svg" alt=""> Buku Panduan</button>
                    </div>
                  </div>
                </div>
                <div class="row ms-4 mt-4">
                  <div class="col kalender-content">
                    <h4><img class="img-fluid me-3" src="img/kalender.svg" alt="">Kalender</h4>
                  </div> 
                  <div class="row">
                    <div class="col">
                      <img src="img/kalender-frame.svg" alt="">
                    </div>
                  </div>
                  </div>
                  <div class="row ms-4 mt-4 kegiatan-main">
                    <div class="col kegiatan-content">
                      <h4><img class="img-fluid me-3" src="img/kegiatan.svg" alt="">Kegiatan</h4>
                    </div> 
                    <div class="row card-kegiatan">
                      <div class="col">
                       <div class="card kegiatan-box" style="width: 22rem; height:4rem;">
                        <div class="row align-items-end">
                          <div class="col-4">
                            One of three columns
                          </div>
                          <div class="col-4">
                            One of three columns
                          </div>
                          <div class="col-4">
                            One of three columns
                          </div>
                        </div>
                          </div>
                      </div>
                      <div class="col">
                        <div class="card kegiatan-box" style="width: 22rem; height:4rem;"></div>
                       </div>
                       <div class="col">
                        <div class="card kegiatan-box" style="width: 22rem; height:4rem;"></div>
                       </div>
                      </div>
                     
                    </div>
                    </div>
                </div>
              </div>
            </div>
            
            {{-- <div class="row mt-2">
              <div class="col mt-3 welcome-content">
                <img class="img-fluid profile-welcome" src="img/profile-img.svg" alt="">
                <div class="col mt-3 welcome-header">
                  <h2>Hello Aina</h2>
                  <p>Selamat datang di BAKTI 2023</p>
                </div>
              </div>
             
            </div> --}}
          </div>
         
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js" ></script>
  </body>
</html>