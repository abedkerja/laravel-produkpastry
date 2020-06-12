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
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Blog Omah Pastry</h6>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('blog.update', $blog->id)}}"
                method="POST">

                @csrf

                <input
                    type="hidden"
                    value="PUT"
                    name="_method">

                <label>Judul blog <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('judul_blog') ? "is-invalid" : ""}}"
                    value="{{old('judul_blog') ? old('judul_blog') : $blog->judul_blog}}"
                    name="judul_blog"
                    placeholder="Masukkan Judul Blog">
                    <div class="invalid-feedback">
                        {{$errors->first('judul_blog')}}
                    </div>
                <br>

                <label>Blog Image <font style="inline-block" color="red">(*)</font></label><br>
                @if($blog->image_blog)
                    <span>Current image</span><br>
                    <img src="{{asset('storage/'. $blog->image_blog)}}" width="120px">
                    <br><br>
                @endif
                <input
                    type="file"
                    class="form-control {{$errors->first('image_blog') ? "is-invalid" : ""}}"
                    name="image_blog">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                    <div class="invalid-feedback">
                        {{$errors->first('image_blog')}}
                    </div>
                <br>
                <br>

                <label for="">Status</label>
                <select name="status" id="status" class="form-control">
                    <option {{$blog->status == 'PUBLISH' ? 'selected' : ''}}
                    value="PUBLISH">PUBLISH</option>
                    <option {{$blog->status == 'DRAFT' ? 'selected' : ''}}
                        value="DRAFT">DRAFT</option>
                </select>
                <br>

                <label>Author <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('author') ? "is-invalid" : ""}}"
                    value="{{old('author') ? old('author') : $blog->author}}"
                    name="author"
                    placeholder="Masukkan Author">
                    <div class="invalid-feedback">
                        {{$errors->first('author')}}
                    </div>
                <br>

                <label>Dibuat Oleh <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('created_by') ? "is-invalid" : ""}}"
                    value="{{old('created_by') ? old('created_by') : $blog->created_by}}"
                    name="created_by"
                    placeholder="Dibuat Oleh">
                    <div class="invalid-feedback">
                        {{$errors->first('created_by')}}
                    </div>
                <br>

                <label>Deskripsi resep <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_blog') ? "is-invalid" : ""}}" 
                    name="deskripsi_blog" id="deskripsi_blog">
                    {{old('deskripsi_blog') ? old('deskripsi_blog') : $blog->deskripsi_blog}}
                </textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_blog')}}
                    </div>
                <br>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <input
                            type="submit"
                            class="btn btn-primary"
                            value="Update">

                        <a
                            href="{{route('blog.index')}}"
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
    @include('backend.blog._scripts')
@endsection