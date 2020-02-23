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

                <label>Nama Bank <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nama_bank') ? "is-invalid" : ""}}"
                    value="{{old('nama_bank') ? old('nama_bank') : $profile->nama_bank}}"
                    name="nama_bank"
                    placeholder="Masukkan Nama Bank">
                    <div class="invalid-feedback">
                        {{$errors->first('nama_bank')}}
                    </div>
                <br>

                <label>Logo Bank <font style="inline-block" color="red">(*)</font></label><br>
                @if($profile->logo_bank)
                    <span>Current image</span><br>
                    <img src="{{asset('storage/'. $profile->logo_bank)}}" width="120px">
                    <br><br>
                @endif
                <input
                    type="file"
                    class="form-control {{$errors->first('logo_bank') ? "is-invalid" : ""}}"
                    name="logo_bank">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                    <div class="invalid-feedback">
                        {{$errors->first('logo_bank')}}
                    </div>
                <br>
                <br>

                <label>Nama Rekening <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nama_rekening') ? "is-invalid" : ""}}"
                    value="{{old('nama_rekening') ? old('nama_rekening') : $profile->nama_rekening}}"
                    name="nama_rekening"
                    placeholder="Masukkan Nama Pembuat Rekening">
                    <div class="invalid-feedback">
                        {{$errors->first('nama_rekening')}}
                    </div>
                <br>

                <label>Nomor Rekening <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nomor_rekening') ? "is-invalid" : ""}}"
                    value="{{old('nomor_rekening') ? old('nomor_rekening') : $profile->nomor_rekening}}"
                    name="nomor_rekening"
                    placeholder="Masukkan Nomor Rekening">
                    <div class="invalid-feedback">
                        {{$errors->first('nomor_rekening')}}
                    </div>
                <br>

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