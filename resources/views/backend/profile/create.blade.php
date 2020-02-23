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
                <br>

                <label>Nama Bank <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nama_bank') ? "is-invalid" : ""}}"
                    name="nama_bank"
                    placeholder="Masukkan Nama Bank">
                    <div class="invalid-feedback">
                        {{$errors->first('nama_bank')}}
                    </div>
                <br>

                <label>Logo Bank <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="file"
                    class="form-control {{$errors->first('logo_bank') ? "is-invalid" : ""}}"
                    name="logo_bank">
                    <div class="invalid-feedback">
                        {{$errors->first('logo_bank')}}
                    </div>
                <br>

                <label>Nama Pemilik Rekening <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nama_rekening') ? "is-invalid" : ""}}"
                    name="nama_rekening"
                    placeholder="Masukkan Nama Pemilik Rekening">
                    <div class="invalid-feedback">
                        {{$errors->first('nama_rekening')}}
                    </div>
                <br>

                <label>Nomor Rekening <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nomor_rekening') ? "is-invalid" : ""}}"
                    name="nomor_rekening"
                    placeholder="Masukkan Nomor Rekening">
                    <div class="invalid-feedback">
                        {{$errors->first('nomor_rekening')}}
                    </div>
                <br>

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