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
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Galeri Omah Pastry</h6>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('galeri.update', $galeries->id)}}"
                method="POST">

                @csrf

                <input
                    type="hidden"
                    value="PUT"
                    name="_method">

                <label>Judul Galeri <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('judul_galeri') ? "is-invalid" : ""}}"
                    value="{{old('judul_galeri') ? old('judul_galeri') : $galeries->judul_galeri}}"
                    name="judul_galeri"
                    placeholder="Masukkan Nama Produk">
                    <div class="invalid-feedback">
                        {{$errors->first('judul_galeri')}}
                    </div>
                <br>

                <label>Gambar Galeri <font style="inline-block" color="red">(*)</font></label><br>
                @if($galeries->image_galeri)
                    <span>Current image</span><br>
                    <img src="{{asset('storage/'. $galeries->image_galeri)}}" width="120px">
                    <br><br>
                @endif
                <input
                    type="file"
                    class="form-control {{$errors->first('image_galeri') ? "is-invalid" : ""}}"
                    name="image_galeri">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                    <div class="invalid-feedback">
                        {{$errors->first('image_galeri')}}
                    </div>
                <br>
                <br>

                <label for="">Status</label>
                <select name="status" id="status" class="form-control">
                    <option {{$galeries->status == 'PUBLISH' ? 'selected' : ''}}
                    value="PUBLISH">PUBLISH</option>
                    <option {{$galeries->status == 'DRAFT' ? 'selected' : ''}}
                        value="DRAFT">DRAFT</option>
                </select>
                <br>

                <label>Deskripsi Galeri <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_galeri') ? "is-invalid" : ""}}" 
                    name="deskripsi_galeri" id="deskripsi_galeri">
                    {{old('deskripsi_galeri') ? old('deskripsi_galeri') : $galeries->deskripsi_galeri}}
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
                            value="Update">

                        <a
                            href="{{route('galeri.index')}}"
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
    @include('backend.galeri._scripts')
@endsection