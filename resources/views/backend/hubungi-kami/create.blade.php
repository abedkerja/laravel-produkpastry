@extends('layouts.backend.main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Galeri Omah Pastry</h6>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('galeri.store')}}"
                method="POST">

                @csrf

                <label>Judul Galeri <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('judul_galeri') ? "is-invalid" : ""}}"
                    value="{{old('judul_galeri')}}"
                    name="judul_galeri"
                    placeholder="Masukkan Judul Galeri">
                    <div class="invalid-feedback">
                        {{$errors->first('judul_galeri')}}
                    </div>
                <br>

                <label>Gambar Galeri <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="file"
                    class="form-control {{$errors->first('image_galeri') ? "is-invalid" : ""}}"
                    name="image_galeri">
                    <div class="invalid-feedback">
                        {{$errors->first('image_galeri')}}
                    </div>
                <br>

                <label>Deskripsi Galeri <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_galeri') ? "is-invalid" : ""}}"
                    value="{{old('deskripsi_galeri')}}" name="deskripsi_galeri" id="deskripsi_galeri">
                </textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_galeri')}}
                    </div>
                <br>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <input
                            type="submit"
                            class="btn btn-primary"
                            value="Simpan">

                        <a
                            href="{{route('galeri.index')}}"
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
    @include('backend.galeri._scripts')
@endsection