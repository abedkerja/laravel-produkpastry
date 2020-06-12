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

    <div class="row">
        <div class="col-md-6">
            {{-- <form action="{{route('blog.index')}}"> --}}
                {{-- <div class="input-group"> --}}
                    {{-- <input onchange="filterme()" type="checkbox" name="type" value="PUBLISH">PUBLISH --}}
                    {{-- <div class="input-group-append">
                        <input type="submit" value="Filter" class="btn btn-primary">
                    </div> --}}
                {{-- </div> --}}
            {{-- </form> --}}
        </div>
        {{-- <div class="col-md-6">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link {{Request::get('status') == NULL &&
                    Request::path() == 'blog' ? 'active' : ''}}" href="
                    {{route('blog.index')}}">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::get('status') == 'publish' ?
                    'active' : '' }}" href="{{route('blog.index', ['status' =>
                    'publish'])}}">Publish</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::get('status') == 'draft' ? 'active' :
                    '' }}" href="{{route('blog.index', ['status' => 'draft'])}}">Draft</a>
                </li>
            </ul>
        </div> --}}
    </div>

    <hr class="my-3">

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Manage Blog</h6>
            <a href="{{route('blog.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus-circle fa-sm text-white-50"></i> Tambah Blog
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