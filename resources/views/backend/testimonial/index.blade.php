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
            <h6 class="m-0 font-weight-bold text-primary">Daftar Testimonial</h6>
            <a href="{{route('testimonial.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Data Testimonial
            </a>
        </div>
        <div class="card-body">
            {!! $html->table(['class'=>'table table-striped table-bordered']) !!}
        </div>
    </div>
@endsection

@section('scripts')
    {!! $html->scripts() !!}
@endsection