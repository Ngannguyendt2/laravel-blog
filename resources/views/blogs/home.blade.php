@extends('home')
@section('title','Home')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Home</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <a class="dropdown-item" href="{{route('blogs.list')}}">List Blogs</a>
            <a class="dropdown-item" href="{{route('blogs.create')}}">Create Blog</a>


        </div>
    </div>
@endsection
