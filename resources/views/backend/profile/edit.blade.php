@extends('layouts.backend.main')

@section('content')
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Edit Pengaturan Profile</h6>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('profile.update', $profile->id)}}"
                method="POST">

                @csrf

                <input
                    type="hidden"
                    value="PUT"
                    name="_method">

                <label>Nama Usaha <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nama_usaha') ? "is-invalid" : ""}}"
                    value="{{old('nama_usaha') ? old('nama_usaha') : $profile->nama_usaha}}"
                    name="nama_usaha"
                    placeholder="Masukkan Nama Usaha">
                    <div class="invalid-feedback">
                        {{$errors->first('nama_usaha')}}
                    </div>
                <br>

                <label>Logo Usaha <font style="inline-block" color="red">(*)</font></label><br>
                @if($profile->logo_usaha)
                    <span>Current image</span><br>
                    <img src="{{asset('storage/'. $profile->logo_usaha)}}" width="120px">
                    <br><br>
                @endif
                <input
                    type="file"
                    class="form-control {{$errors->first('logo_usaha') ? "is-invalid" : ""}}"
                    name="logo_usaha">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                    <div class="invalid-feedback">
                        {{$errors->first('logo_usaha')}}
                    </div>
                <br>
                <br>

                <label>Alamat <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('alamat') ? "is-invalid" : ""}}"
                    value="{{old('alamat') ? old('alamat') : $profile->alamat}}"
                    name="alamat"
                    placeholder="Masukkan Alamat">
                    <div class="invalid-feedback">
                        {{$errors->first('alamat')}}
                    </div>
                <br>

                <label>Nomor Handphone <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nomor_hp') ? "is-invalid" : ""}}"
                    value="{{old('nomor_hp') ? old('nomor_hp') : $profile->nomor_hp}}"
                    name="nomor_hp"
                    placeholder="Masukkan Nomor HP">
                    <div class="invalid-feedback">
                        {{$errors->first('nomor_hp')}}
                    </div>
                <br>
                
                <h5><b>Akun Bank</b></h5>
                <hr>
                
                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Bank Pertama</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_bank_1') ? "is-invalid" : ""}}"
                            value="{{old('nama_bank_1') ? old('nama_bank_1') : $profile->nama_bank_1}}"
                            name="nama_bank_1"
                            placeholder="Masukkan Nama Bank Pertama">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_bank_1')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Bank Kedua</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_bank_2') ? "is-invalid" : ""}}"
                            value="{{old('nama_bank_2') ? old('nama_bank_2') : $profile->nama_bank_2}}"
                            name="nama_bank_2"
                            placeholder="Masukkan Nama Bank Kedua">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_bank_2')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Bank Ketiga</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_bank_3') ? "is-invalid" : ""}}"
                            value="{{old('nama_bank_3') ? old('nama_bank_3') : $profile->nama_bank_3}}"
                            name="nama_bank_3"
                            placeholder="Masukkan Nama Bank Ketiga">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_bank_3')}}
                            </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Logo Bank Pertama</label><br>
                        @if($profile->logo_bank_1)
                            <span>Current image</span><br>
                            <img src="{{asset('storage/'. $profile->logo_bank_1)}}" width="120px">
                            <br><br>
                        @endif
                        <input
                            type="file"
                            class="form-control {{$errors->first('logo_bank_1') ? "is-invalid" : ""}}"
                            name="logo_bank_1">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                            <div class="invalid-feedback">
                                {{$errors->first('logo_bank_1')}}
                            </div>
                        <br>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Logo Bank Kedua</label><br>
                        @if($profile->logo_bank_2)
                            <span>Current image</span><br>
                            <img src="{{asset('storage/'. $profile->logo_bank_2)}}" width="120px">
                            <br><br>
                        @endif
                        <input
                            type="file"
                            class="form-control {{$errors->first('logo_bank_2') ? "is-invalid" : ""}}"
                            name="logo_bank_2">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                            <div class="invalid-feedback">
                                {{$errors->first('logo_bank_2')}}
                            </div>
                        <br>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Logo Bank Keiga</label><br>
                        @if($profile->logo_bank_3)
                            <span>Current image</span><br>
                            <img src="{{asset('storage/'. $profile->logo_bank_3)}}" width="120px">
                            <br><br>
                        @endif
                        <input
                            type="file"
                            class="form-control {{$errors->first('logo_bank_3') ? "is-invalid" : ""}}"
                            name="logo_bank_3">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                            <div class="invalid-feedback">
                                {{$errors->first('logo_bank_3')}}
                            </div>
                        <br>
                        <br>
                    </div>
                </div>


                <h5><b>Akun Rekening</b></h5>
                <hr>

                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Pemilik Rekening Bank Pertama</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_rekening_bank_1') ? "is-invalid" : ""}}"
                            value="{{old('nama_rekening_bank_1') ? old('nama_rekening_bank_1') : $profile->nama_rekening_bank_1}}"
                            name="nama_rekening_bank_1"
                            placeholder="Nama Pemilik Rekening Bank Pertama">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_rekening_bank_1')}}
                            </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Pemilik Rekening Bank Kedua</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_rekening_bank_2') ? "is-invalid" : ""}}"
                            value="{{old('nama_rekening_bank_2') ? old('nama_rekening_bank_2') : $profile->nama_rekening_bank_2}}"
                            name="nama_rekening_bank_2"
                            placeholder="Nama Pemilik Rekening Bank Kedua">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_rekening_bank_2')}}
                            </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Pemilik Rekening Bank Ketiga</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_rekening_bank_3') ? "is-invalid" : ""}}"
                            value="{{old('nama_rekening_bank_3') ? old('nama_rekening_bank_3') : $profile->nama_rekening_bank_3}}"
                            name="nama_rekening_bank_3"
                            placeholder="Nama Pemilik Rekening Bank Ketiga">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_rekening_bank_3')}}
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nomor Rekening Bank Pertama</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nomor_rekening_bank_1') ? "is-invalid" : ""}}"
                            value="{{old('nomor_rekening_bank_1') ? old('nomor_rekening_bank_1') : $profile->nomor_rekening_bank_1}}"
                            name="nomor_rekening_bank_1"
                            placeholder="Nomor Rekening Bank Pertama">
                            <div class="invalid-feedback">
                                {{$errors->first('nomor_rekening_bank_1')}}
                            </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nomor Rekening Bank Kedua</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nomor_rekening_bank_2') ? "is-invalid" : ""}}"
                            value="{{old('nomor_rekening_bank_2') ? old('nomor_rekening_bank_2') : $profile->nomor_rekening_bank_2}}"
                            name="nomor_rekening_bank_2"
                            placeholder="Nomor Rekening Bank Kedua">
                            <div class="invalid-feedback">
                                {{$errors->first('nomor_rekening_bank_2')}}
                            </div>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nomor Rekening Bank Ketiga</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nomor_rekening_bank_3') ? "is-invalid" : ""}}"
                            value="{{old('nomor_rekening_bank_3') ? old('nomor_rekening_bank_3') : $profile->nomor_rekening_bank_3}}"
                            name="nomor_rekening_bank_3"
                            placeholder="Nomor Rekening Bank Ketiga">
                            <div class="invalid-feedback">
                                {{$errors->first('nomor_rekening_bank_3')}}
                            </div>
                    </div>
                </div>
                <hr>

                <label>Deskripsi Profile <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_profile') ? "is-invalid" : ""}}" 
                    name="deskripsi_profile" id="deskripsi_profile">
                    {{old('deskripsi_profile') ? old('deskripsi_profile') : $profile->deskripsi_profile}}
                </textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_profile')}}
                    </div>
                <br>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <input
                            type="submit"
                            class="btn btn-primary"
                            value="Update">

                        <a
                            href="{{route('profile.index')}}"
                            type="button"
                            class="btn btn-warning"
                            value="Kembali"> Kembali
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    @include('backend.profile._scripts')
@endsection