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
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Resep Omah Pastry</h6>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('resep.update', $resep->id)}}"
                method="POST">

                @csrf

                <input
                    type="hidden"resep
                    value="PUT"
                    name="_method">

                <label>Judul Resep <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('judul_resep') ? "is-invalid" : ""}}"
                    value="{{old('judul_resep') ? old('judul_resep') : $resep->judul_resep}}"
                    name="judul_resep"
                    placeholder="Masukkan Judul Resep">
                    <div class="invalid-feedback">
                        {{$errors->first('judul_resep')}}
                    </div>
                <br>

                <label>Resep Image <font style="inline-block" color="red">(*)</font></label><br>
                @if($resep->image_resep)
                    <span>Current image</span><br>
                    <img src="{{asset('storage/'. $resep->image_resep)}}" width="120px">
                    <br><br>
                @endif
                <input
                    type="file"
                    class="form-control {{$errors->first('image_resep') ? "is-invalid" : ""}}"
                    name="image_resep">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                    <div class="invalid-feedback">
                        {{$errors->first('image_resep')}}
                    </div>
                <br>
                <br>

                <label for="">Status</label>
                <select name="status" id="status" class="form-control">
                    <option {{$resep->status == 'PUBLISH' ? 'selected' : ''}}
                    value="PUBLISH">PUBLISH</option>
                    <option {{$resep->status == 'DRAFT' ? 'selected' : ''}}
                        value="DRAFT">DRAFT</option>
                </select>
                <br>

                <label>Author <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('author') ? "is-invalid" : ""}}"
                    value="{{old('author') ? old('author') : $resep->author}}"
                    name="author"
                    placeholder="Masukkan Author">
                    <div class="invalid-feedback">
                        {{$errors->first('author')}}
                    </div>
                <br>

                <label>Deskripsi resep <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_resep') ? "is-invalid" : ""}}" 
                    name="deskripsi_resep" id="deskripsi_resep">
                    {{old('deskripsi_resep') ? old('deskripsi_resep') : $resep->deskripsi_resep}}
                </textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_resep')}}
                    </div>
                <br>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <input
                            type="submit"
                            class="btn btn-primary"
                            value="Update">

                        <a
                            href="{{route('resep.index')}}"
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
    @include('backend.resep._scripts')
@endsection