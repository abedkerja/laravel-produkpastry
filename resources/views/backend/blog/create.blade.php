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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Blog</h6>
            <a href="{{route('blog.index')}}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Ke Halaman Indeks Blog
            </a>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('blog.store')}}"
                method="POST">

                @csrf

                <label>Judul Blog <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('judul_blog') ? "is-invalid" : ""}}"
                    value="{{old('judul_blog')}}"
                    name="judul_blog"
                    placeholder="Masukkan Judul Blog">
                    <div class="invalid-feedback">
                        {{$errors->first('judul_blog')}}
                    </div>
                <br>

                <label>Image Blog<font style="inline-block" color="red">(*)</font></label>
                <input
                    type="file"
                    class="form-control {{$errors->first('image_blog') ? "is-invalid" : ""}}"
                    name="image_blog">
                    <div class="invalid-feedback">
                        {{$errors->first('image_blog')}}
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

                <label>Dibuat Oleh <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('created_by') ? "is-invalid" : ""}}"
                    name="created_by"
                    placeholder="Dibuat Oleh">
                    <div class="invalid-feedback">
                        {{$errors->first('created_by')}}
                    </div>
                <br>

                <label>Deskripsi Blog <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_blog') ? "is-invalid" : ""}}"
                    value="{{old('deskripsi_blog')}}" name="deskripsi_blog" id="deskripsi_blog"></textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_blog')}}
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
    @include('backend.blog._scripts')
@endsection