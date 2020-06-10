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
            <h6 class="m-0 font-weight-bold text-primary">Edit Testimonial Omah Pastry</h6>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('testimonial.update', $testimonials->id)}}"
                method="POST">

                @csrf

                <input
                    type="hidden"
                    value="PUT"
                    name="_method">
                
                <label>Nama Testimonial <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nama_testi') ? "is-invalid" : ""}}"
                    value="{{old('nama_testi') ? old('nama_testi') : $testimonials->nama_testi}}"
                    name="nama_testi"
                    placeholder="Masukkan Nama Testimonial">
                    <div class="invalid-feedback">
                        {{$errors->first('nama_testi')}}
                    </div>
                <br>

                <label>Testimonial Image <font style="inline-block" color="red">(*)</font></label><br>
                @if($testimonials->image_testi)
                    <span>Current image</span><br>
                    <img src="{{asset('storage/'. $testimonials->image_testi)}}" width="120px">
                    <br><br>
                @endif
                <input
                    type="file"
                    class="form-control {{$errors->first('image_testi') ? "is-invalid" : ""}}"
                    name="image_testi">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                    <div class="invalid-feedback">
                        {{$errors->first('image_testi')}}
                    </div>
                <br>
                <br>

                <label>Deskripsi Testimonial <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_testi') ? "is-invalid" : ""}}" 
                    name="deskripsi_testi" id="deskripsi_testi">
                    {{old('deskripsi_testi') ? old('deskripsi_testi') : $testimonials->deskripsi_testi}}
                </textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_testi')}}
                    </div>
                <br>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <input
                            type="submit"
                            class="btn btn-primary"
                            value="Update">

                        <a
                            href="{{route('testimonial.index')}}"
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
    @include('backend.testimonial._scripts')
@endsection