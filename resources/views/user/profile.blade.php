@extends('layouts.main')
@section('content')
    <div class="row ms-5 mt-5 profile">
        <div class="col">
            <div class="row ms-5 ">
                <div class="col-1 update-profile ">
                    <img class="img-fluid add-profile" src="{{ $user->profile ? asset('storage/profiles/' . $user->profile->foto) : 'img/add-profile.svg' }}" alt="" onclick="showUpdateBox()">
                    <form id="formUpdateFoto" method="POST" action="{{ route('profile.update-foto', ['user_id' => Auth::user()->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div id="updateBox" class="update-box" style="display: none;">
                            <h2>Upload Photo</h2>
                            <div class="drag-option" ondrop="handleDrop(event)" ondragover="handleDragOver(event)">
                                <img class="icon-add" src="img/add-photo.svg" alt="">
                                {{-- <p>Drag and drop here</p>
                                <p>or</p> --}}
                                {{-- <p onclick="handleBrowse()"><strong>Browse</strong></p> --}}
                                <label class="custom-file-input-wrapper" for="foto">
                                    Browse
                                </label>
                                <input class="text-center" type="file" name="foto" id="foto" >
                            </div>
                          <!-- File input for foto -->
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
    


@endsection


