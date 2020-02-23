@extends('layouts.backend.main')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Testimonial</h6>
        </div>

        <div>
            <form
                enctype="multipart/form-data"
                class="bg-white shadow-sm p-3"
                action="{{route('testimonial.store')}}"
                method="POST">

                @csrf

                <label>Nama Testimonial <font style="inline-block" color="red">(*)</font></label>
                <input
                    type="text"
                    class="form-control {{$errors->first('nama_testi') ? "is-invalid" : ""}}"
                    value="{{old('nama_testi')}}"
                    name="nama_testi"
                    placeholder="Masukkan Nama Testi">
                    <div class="invalid-feedback">
                        {{$errors->first('nama_testi')}}
                    </div>
                <br>

                <label>Image Testimonial<font style="inline-block" color="red">(*)</font></label>
                <input
                    type="file"
                    class="form-control {{$errors->first('image_testi') ? "is-invalid" : ""}}"
                    name="image_testi">
                    <div class="invalid-feedback">
                        {{$errors->first('image_testi')}}
                    </div>
                <br>

                <label>Deskripsi Testimonial <font style="inline-block" color="red">(*)</font></label>
                <textarea
                    class="form-control {{$errors->first('deskripsi_testi') ? "is-invalid" : ""}}"
                    value="{{old('deskripsi_testi')}}" name="deskripsi_testi" id="deskripsi_testi"></textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('deskripsi_testi')}}
                    </div>
                <br>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <input
                            type="submit"
                            class="btn btn-primary"
                            value="Simpan">

                        <a
                            href="{{route('testimonial.index')}}"
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
    @include('backend.testimonial._scripts')
@endsection