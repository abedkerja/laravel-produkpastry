@extends('layouts.backend.main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Profile Omah Pastry</h6>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('profile.store')}}"
                method="POST">

                @csrf

                <label>Nama Usaha <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nama_usaha') ? "is-invalid" : ""}}"
                    value="{{old('nama_usaha')}}"
                    name="nama_usaha"
                    placeholder="Masukkan Nama Usaha">
                    <div class="invalid-feedback">
                        {{$errors->first('nama_usaha')}}
                    </div>
                <br>

                <label>Logo Usaha <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="file"
                    class="form-control {{$errors->first('logo_usaha') ? "is-invalid" : ""}}"
                    name="logo_usaha">
                    <div class="invalid-feedback">
                        {{$errors->first('logo_usaha')}}
                    </div>
                <br>

                <label>Alamat <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('alamat') ? "is-invalid" : ""}}"
                    name="alamat"
                    placeholder="Masukkan Alamat Usaha">
                    <div class="invalid-feedback">
                        {{$errors->first('alamat')}}
                    </div>
                <br>

                <label>Nomor Handphone <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nomor_hp') ? "is-invalid" : ""}}"
                    name="nomor_hp"
                    placeholder="Masukkan Nomor Handphone">
                    <div class="invalid-feedback">
                        {{$errors->first('nomor_hp')}}
                    </div>
                <br><br>
                
                <h5><b>Akun Bank</b></h5>
                <hr>
                
                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Bank Pertama </label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_bank_1') ? "is-invalid" : ""}}"
                            name="nama_bank_1"
                            placeholder="Masukkan Nama Bank Pertama">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_bank_1')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Bank Kedua </label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_bank_2') ? "is-invalid" : ""}}"
                            name="nama_bank_2"
                            placeholder="Masukkan Nama Bank Kedua">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_bank_2')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Bank Ketiga </label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_bank_3') ? "is-invalid" : ""}}"
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
                        <label>Logo Bank Pertama</label>
                        <input
                            type="file"
                            class="form-control {{$errors->first('logo_bank_1') ? "is-invalid" : ""}}"
                            name="logo_bank_1">
                            <div class="invalid-feedback">
                                {{$errors->first('logo_bank_1')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Logo Bank Kedua</label>
                        <input
                            type="file"
                            class="form-control {{$errors->first('logo_bank_2') ? "is-invalid" : ""}}"
                            name="logo_bank_2">
                            <div class="invalid-feedback">
                                {{$errors->first('logo_bank_2')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Logo Bank Ketiga</label>
                        <input
                            type="file"
                            class="form-control {{$errors->first('logo_bank_3') ? "is-invalid" : ""}}"
                            name="logo_bank_3">
                            <div class="invalid-feedback">
                                {{$errors->first('logo_bank_3')}}
                            </div>
                        <br>
                    </div>
                </div>
                
                <h5><b>Akun Rekening</b></h5>
                <hr>

                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Pemilik Rekening Bank 1</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_rekening_bank_1') ? "is-invalid" : ""}}"
                            name="nama_rekening_bank_1"
                            placeholder="Nama Pemilik Rekening Bank Pertama">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_rekening_bank_1')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Pemilik Rekening Bank 2</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_rekening_bank_2') ? "is-invalid" : ""}}"
                            name="nama_rekening_bank_2"
                            placeholder="Nama Pemilik Rekening Bank Kedua">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_rekening_bank_2')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nama Pemilik Rekening Bank 3</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nama_rekening_bank_3') ? "is-invalid" : ""}}"
                            name="nama_rekening_bank_3"
                            placeholder="Nama Pemilik Rekening Bank Ketiga">
                            <div class="invalid-feedback">
                                {{$errors->first('nama_rekening_bank_3')}}
                            </div>
                        <br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nomor Rekening Bank 1</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nomor_rekening_bank_1') ? "is-invalid" : ""}}"
                            name="nomor_rekening_bank_1"
                            placeholder="Masukkan Nomor Rekening Pertama">
                            <div class="invalid-feedback">
                                {{$errors->first('nomor_rekening_bank_1')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nomor Rekening Bank 2</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nomor_rekening_bank_2') ? "is-invalid" : ""}}"
                            name="nomor_rekening_bank_2"
                            placeholder="Masukkan Nomor Rekening Kedua">
                            <div class="invalid-feedback">
                                {{$errors->first('nomor_rekening_bank_2')}}
                            </div>
                        <br>
                    </div>

                    <div class="col-xl-4 col-md-6 mb-4">
                        <label>Nomor Rekening Bank 3</label>
                        <input
                            type="text"
                            class="form-control {{$errors->first('nomor_rekening_bank_3') ? "is-invalid" : ""}}"
                            name="nomor_rekening_bank_3"
                            placeholder="Masukkan Nomor Rekening Bank Ketiga">
                            <div class="invalid-feedback">
                                {{$errors->first('nomor_rekening_bank_3')}}
                            </div>
                        <br>
                    </div>
                </div>
                <hr>

                <label>Deskripsi Profile <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_profile') ? "is-invalid" : ""}}"
                    value="{{old('deskripsi_profile')}}" name="deskripsi_profile" id="deskripsi_profile"></textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_profile')}}
                    </div>
                <br>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <input
                            type="submit"
                            class="btn btn-primary"
                            value="Simpan">

                        <a
                            href="{{route('profile.index')}}"
                            type="button"
                            class="btn btn-warning"
                            value="Kembali"> Batal
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