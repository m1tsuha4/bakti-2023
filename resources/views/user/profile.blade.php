@extends('layouts.main')
@section('content')
    <div class="row ms-5 mt-5">
        <div class="col">
            <div class="row ms-5 ">
                <div class="col-1 update-profile ">
                    <img class="img-fluid add-profile" src="{{ $user->profile ? asset('storage/profiles/' . $user->profile->foto) : 'img/add-profile.svg' }}" alt="" onclick="showUpdateBox()">
{{--                    <form action="">--}}
{{--                        <div id="updateBox" class="update-box" style="display: none;">--}}
{{--                            <h2>Upload Photo</h2>--}}
{{--                            <div class="drag-option" ondrop="handleDrop(event)" ondragover="handleDragOver(event)">--}}
{{--                                <img class="icon-add" src="img/add-photo.svg" alt="">--}}
{{--                                <p>Drag and drop here</p>--}}
{{--                                <p>or</p>--}}
{{--                                <p onclick="handleBrowse()"><strong>Browse</strong></p>--}}
{{--                            </div>--}}
{{--                            <button>Simpan</button>--}}
{{--                            <img id="closeIcon" src="img/tutup.svg" alt="" onclick="closeUpdateBox()">--}}
{{--                        </div>--}}
{{--                        <div id="overlay"></div>--}}
{{--                    </form>--}}
{{--                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        @method('PATCH')--}}

{{--                        <!-- Your other form fields -->--}}

{{--                        <div id="updateBox" class="update-box" style="display: none;">--}}
{{--                            <h2>Upload Photo</h2>--}}
{{--                            <div class="drag-option" ondrop="handleDrop(event)" ondragover="handleDragOver(event)">--}}
{{--                                <img class="icon-add" src="img/add-photo.svg" alt="">--}}
{{--                                <p>Drag and drop here</p>--}}
{{--                                <p>or</p>--}}
{{--                                <p onclick="handleBrowse()"><strong>Browse</strong></p>--}}
{{--                            </div>--}}
{{--                            <input type="file" name="foto" id="foto" style="display: none;"> <!-- File input for foto -->--}}
{{--                            <button type="submit">Simpan</button>--}}
{{--                            <img id="closeIcon" src="img/tutup.svg" alt="" onclick="closeUpdateBox()">--}}
{{--                        </div>--}}
{{--                        <div id="overlay"></div>--}}
{{--                    </form>--}}
                    <form id="formUpdateFoto" method="POST" action="{{ route('profile.update-foto', ['user_id' => Auth::user()->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div id="updateBox" class="update-box" style="display: none;">
                            <h2>Upload Photo</h2>
                            <div class="drag-option" ondrop="handleDrop(event)" ondragover="handleDragOver(event)">
                                <img class="icon-add" src="img/add-photo.svg" alt="">
                                <p>Drag and drop here</p>
                                <p>or</p>
                                <p onclick="handleBrowse()"><strong>Browse</strong></p>
                            </div>
                            <input type="file" name="foto" id="foto"> <!-- File input for foto -->
                            <button type="submit">Simpan</button>
                            <img id="closeIcon" src="img/tutup.svg" alt="" onclick="closeUpdateBox()">
                        </div>
                        <div id="overlay"></div>
                    </form>
                </div>
                <div class="col-8 mt-3 ">
                    <div class="row tag-nama">{{ $user->name }}</div>
                    <div class="row tag-nim">{{ $user->nim }}</div>
                </div>
            </div>
            <div class="row ms-3 mt-3">
                <div class="col-6 form-profile ">
                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <label for="inputNama" class="form-label">Nama Lengkap<span class="text-danger"  >*</span></label>
                            <input class="form-control" id="" type="text" value="{{ $user->name }}" aria-label="readonly input example" readonly>
                            <span class="note" >* Tidak Dapat Diubah</span>
                        </div>
                        <div class="row input-fakultas">
                            <label for="inputNama" class="form-label ">Fakultas</label>
                            <img class="edit-fakultas" src="img/edit.svg" style="width:3rem;" alt="">
                            <input  class="form-control" type="text" name="fakultas" value="{{ $user->profile->fakultas ?? '' }}" aria-label="default input example">
                        </div>

{{--                        <div class="row jenis-kelamin ">--}}
{{--                            <div class="col-12">--}}
{{--                                <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-5 pilihan1">--}}
{{--                                <input type="text" id="inputBox1" value="Perempuan" class="form-control inactive" onclick="toggleColor('inputBox1', 'inputBox2')" readonly>--}}
{{--                            </div>--}}
{{--                            <div class="col-5 pilihan2">--}}
{{--                                <input type="text" id="inputBox2" value="Laki-Laki" class="form-control inactive" onclick="toggleColor('inputBox2', 'inputBox1')" readonly>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row jenis-kelamin">--}}
{{--                            <div class="col-12">--}}
{{--                                <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-5 pilihan1">--}}
{{--                                <input type="hidden" name="jenis_kelamin" value="Perempuan">--}}
{{--                                <input type="text" id="inputBox1" value="Perempuan" class="form-control inactive" onclick="toggleColor('inputBox1', 'inputBox2', 'Perempuan')" readonly>--}}
{{--                            </div>--}}
{{--                            <div class="col-5 pilihan2">--}}
{{--                                <input type="hidden" name="jenis_kelamin" value="Laki-Laki">--}}
{{--                                <input type="text" id="inputBox2" value="Laki-Laki" class="form-control inactive" onclick="toggleColor('inputBox2', 'inputBox1', 'Laki-Laki')" readonly>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row jenis-kelamin">
                            <div class="col-12">
                                <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-5 pilihan1">
                                <input type="radio" class="btn-check" id="btn-check-outlined" name="jenis_kelamin" value="Perempuan"
                                       @if(isset($user->profile->jenis_kelamin) && $user->profile->jenis_kelamin === 'Perempuan') checked @endif>
                                <label class="btn btn-outline-primary" for="btn-check-outlined">Perempuan</label><br>
                            </div>
                            <div class="col-5 pilihan2">
                                <input type="radio" class="btn-check" id="btn-check-2-outlined" name="jenis_kelamin" value="Laki-Laki"
                                       @if(isset($user->profile->jenis_kelamin) && $user->profile->jenis_kelamin === 'Laki-Laki') checked @endif>
                                <label class="btn btn-outline-primary" for="btn-check-2-outlined">Laki-Laki</label><br>
                            </div>
                        </div>


                        <div class="row">
                            <label for="inputNama" class="form-label ">Kelompok</label>
                            <input  class="form-control" type="text" name="kelompok" value="{{ $user->profile->kelompok ?? '' }}" aria-label="default input example">
                        </div>

                </div>
                <div class="col-6 form-profile">
                    <div class="row">
                        <label for="inputNama" class="form-label">NIM<span class="text-danger"  >*</span></label>
                        <input class="form-control" id="" type="text" value="{{ $user->nim }}" aria-label="readonly input example" readonly>
                        <span class="note" >* Tidak Dapat Diubah</span>
                    </div>
                    <div class="row input-departemen">
                        <label for="inputNama" class="form-label ">Departemen</label>
                        <img class="edit-departemen" src="img/edit.svg" style="width:3rem;" alt="">
                        <input class="form-control" type="text" name="department" value="{{ $user->profile->department ?? '' }}"  aria-label="default input example">
                    </div>
                    <div class="row custom-datepicker">
                        <label for="inputTanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input id="inputTanggalLahir" class="form-control" type="date" name="tanggal_lahir" value="{{ $user->profile->tanggal_lahir ?? '' }}"  aria-label="default input example">
                        <span id="customIcon" class="custom-icon"></span>
                    </div>


                    <div class="row">
                        <label for="inputNama" class="form-label ">No Absen</label>
                        <input  class="form-control" type="number" name="no_absen" value="{{ $user->profile->no_absen ?? '' }}" aria-label="default input example">
                    </div>
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col button-profile d-flex justify-content-center">
                    <button class="btn btn-first">Simpan</button>
                </div>
            </div>
                    </form>

            <div class="row mt-3 ms-4 mb-3">
                <h2 class="sandi-header">Ganti Kata Sandi</h2>
            </div>
            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')
                <div class="row ms-4 form-profile">
                    <div class="col-6">
                        <div class="row input-sandi">
                            <label for="inputNama" class="form-label ">Kata Sandi Lama</label>
                            <img class="edit-sandi" style="width: 3rem" id="eyeicon" src="img/eye-slash.svg" alt="">
                            <input id="sandiLama" class="form-control" type="password" name="current_password" aria-label="default input example">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row input-sandi">
                            <label for="inputNama" class="form-label ">Kata Sandi Baru</label>
                            <img class="edit-sandi" style="width: 3rem" id="eyeicon2" src="img/eye-slash.svg" alt="">
                            <input id="sandiBaru" class="form-control" type="password" name="password" aria-label="default input example"></div>
                    </div>

                </div>
                <div class="row mt-3 ">
                    <div class="col button-profile d-flex justify-content-center">
                        <button class="btn btn-first">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <div class="update-profile">
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
        <div class="tanggal-lahir custom-datepicker">
            <h5 class="edit-tgllhr">Tanggal Lahir</h5>
            <input class="input-tgllhr" type="date" placeholder="Tanggal Lahir">
            <span class="custom-icon"></span>
        </div>
            <div class="sandi-main">
                <h2 class="sandi-header">Ganti Kata Sandi</h2>
                <div class="sandi-lama">
                    <h5 class="edit-sandi1">Kata Sandi Lama</h5>
                    <input class="input-sandi1" type="password" placeholder="Sandi Lama" >

                </div>
                <div class="sandi-baru">
                    <h5 class="edit-sandi2">Kata Sandi Baru</h5>
                    <input class="input-sandi2" type="password" placeholder="Sandi Baru">
                </div>
                <div class="simpan">
                    <button class="simpan-profile" type="button">Simpan</button>
                </div>
            </div>

         --}}



@endsection


