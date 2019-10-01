@extends('home')
@section('title','Them moi blog')
@section('content')
    <div class="col-12"><h1>Them moi blog</h1></div>
    <div>
        <form method="post" action="{{route('blogs.store')}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title">
                </div>
                <div class="form-group col-md-6">
                    <label >Summary</label>
                    <input type="text" class="form-control" placeholder="Summary" name="summary">
                </div>
            </div>
            <div class="form-group">
                <label>Content</label>
                <input type="text" class="form-control"placeholder="Content" name="contented">
            </div>
        <button type="submit" class="btn btn-success">Add</button>
        </form>
        <a href="{{route('blogs.index')}}"class="btn btn-danger">Exit</a>
    </div>
    @endsection
