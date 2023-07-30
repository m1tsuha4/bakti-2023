@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col welcome-content">
            <div class="row ms-5 mt-5">
                <div class="col-6 ukm-kolom ">
                    <div class="card ukm-main" style="width: 20rem;">
                        <div class="card-body">
                            <p class="card-text ukm-header mt-3 mb-4">UKM Neo Telemetri</p>
                        </div>
                        <img src="img/play-video.svg" class="card-img-top mb-4" alt="...">
                        <div class="btn mb-4">Button Tugas</div>
                    </div>
                </div>
                <div class="col-6 ukm-kolom">  <div class="card ukm-main" style="width: 20rem;">
                        <div class="card-body">
                            <p class="card-text ukm-header mt-3 mb-4">UKM Penalaran</p>
                        </div>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/twI-4xFNU7M" title="YouTube video" allowfullscreen></iframe>
                        </div>
                        <div class="btn mb-4">Button Tugas</div>
                    </div></div>
            </div>
            <div class="row ms-5 mt-5 mb-5">
                <div class="col-6 ukm-kolom">  <div class="card ukm-main" style="width: 20rem;">
                        <div class="card-body">
                            <p class="card-text ukm-header mt-3 mb-4">UKM Aiesec</p>
                        </div>
                        <img src="img/play-video.svg" class="card-img-top mb-4" alt="...">
                        <div class="btn mb-4">Button Tugas</div>
                    </div></div>
                <div class="col-6 ukm-kolom">  <div class="card ukm-main" style="width: 20rem;">
                        <div class="card-body">
                            <p class="card-text ukm-header mt-3 mb-4">UKM UKO</p>
                        </div>
                        <img src="img/play-video.svg" class="card-img-top mb-4" alt="...">
                        <div class="btn mb-4">Button Tugas</div>
                    </div></div>
            </div>

        </div>
    </div>

@endsection

