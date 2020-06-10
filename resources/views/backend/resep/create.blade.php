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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Resep</h6>
            <a href="{{route('resep.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Ke Halaman Indeks Resep
            </a>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('resep.store')}}"
                method="POST">

                @csrf

                <label>Judul Resep <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('judul_resep') ? "is-invalid" : ""}}"
                    value="{{old('judul_resep')}}"
                    name="judul_resep"
                    placeholder="Masukkan Judul Resep">
                    <div class="invalid-feedback">
                        {{$errors->first('judul_resep')}}
                    </div>
                <br>

                <label>Image Resep<font style="inline-block" color="red">(*)</font></label>
                <input
                    type="file"
                    class="form-control {{$errors->first('image_resep') ? "is-invalid" : ""}}"
                    name="image_resep">
                    <div class="invalid-feedback">
                        {{$errors->first('image_resep')}}
                    </div>
                <br>

                <label>Author <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('author') ? "is-invalid" : ""}}"
                    name="author"
                    placeholder="Author">
                    <div class="invalid-feedback">
                        {{$errors->first('author')}}
                    </div>
                <br>

                <label>Deskripsi Resep <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_resep') ? "is-invalid" : ""}}"
                    value="{{old('deskripsi_resep')}}" name="deskripsi_resep" id="deskripsi_resep"></textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_resep')}}
                    </div>
                <br>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button
                            class="btn btn-primary"
                            name="save_action"
                            value="PUBLISH"> Publish
                        </button>

                        <button
                            class="btn btn-info"
                            name="save_action"
                            value="DRAFT"> Save As Draft
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    @include('backend.resep._scripts')
@endsection