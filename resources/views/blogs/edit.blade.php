@extends('home')
@section('title','Chinh sua bai viet')
@section('content')
    <div class="col-12"><h1>Chinh sua bai viet</h1></div>
    <div>
        <form method="post" action="{{route('blogs.update',['id'=>$post->id])}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{$post->title}}">
                </div>
                <div class="form-group col-md-6">
                    <label >Summary</label>
                    <input type="text" class="form-control" placeholder="Summary" name="summary" value="{{$post->summary}}">
                </div>
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" class="form-control"placeholder="Content" name="contented" value="{{$post->content}}">
            </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
        <a href="{{route('blogs.index')}}"class="btn btn-danger">Exit</a>
    </div>
@endsection
