@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col welcome-content">
            <div class="row mt-5  text-center ">
                <div class="col-3 penugasan-header">Tugas
                </div>
                <div class="col-2 penugasan-header">Tanggal Pengumpulan</div>
                <div class="col-3 penugasan-header-status">Status</div>
                <div class="col-3 penugasan-header"></div>
            </div>

            <div class="card mt-3 penugasan-box">
                <div class="row penugasan-headers">
                    <div class="col-3 box-header">
                        Resume Talkshow
                    </div>
                    <div class="col-3 date-box">20 Agustus 2023, 23.59</div>
                    <div class="col-3 status-box">Belum Dikumpul</div>
                    <div class="col-2 ms-1">
                        <div class="btn btn-upload">Upload</div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>

            <div class="card mt-3 penugasan-box-late ">
                <div class="row ">
                    <div class="col-3 box-header-late">
                        Resume Talkshow
                    </div>
                    <div class="col-3 date-box-late">20 Agustus 2023, 23.59</div>
                    <div class="col-3 status-box-late">Belum Dikumpul</div>
                    <div class="col-2 ms-1">
                        <div class="btn btn-upload-late">Upload</div>
                    </div>
                </div>
            </div>
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>
            <div class="card mt-3 penugasan-box-done ">
                <div class="row">
                    <div class="col-3 box-header-done">
                        Resume Talkshow
                    </div>
                    <div class="col-3 date-box-done">20 Agustus 2023, 23.59</div>
                    <div class="col-3 status-box-done">Belum Dikumpul</div>
                    <div class="col-2 ms-1">
                        <div class="btn btn-upload">Batalkan</div>
                    </div>
                </div>
            </div>
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>
            <div class="card mt-3 penugasan-box-done ">
                <div class="row">
                    <div class="col-3 box-header-done">
                        Resume Talkshow
                    </div>
                    <div class="col-3 date-box-done">20 Agustus 2023, 23.59</div>
                    <div class="col-3 status-box-done">Belum Dikumpul</div>
                    <div class="col-2 ms-1">
                        <div class="btn btn-upload">Batalkan</div>
                    </div>
                </div>
            </div>
            <div class="col-12 penugasan-body">
                <div class="penugasan-body-content">
                    Tugas ditulis di double folio dengan format bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla blabla bla bla bla bla
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- @include('partials.sidebar')
@include('partials.header') --}}




{{--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js" ></script>
  </body>
</html> --}}
