@extends('home')
@section('title','Chi tiet')
@section('content')
    <div class="col-12"><h1>Chi tiet</h1></div>
    <div>
    <textarea class="form-control">{{$post->content}}</textarea>
    </div>
    <a href="{{route('blogs.index')}}">Home</a>
@endsection
