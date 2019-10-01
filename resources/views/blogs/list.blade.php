@extends('home')
@section('title','DANH SACH BLOG')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>DANH SACH BAI VIET</h1></div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Summary</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($posts)==0)
                        <tr>
                            <th colspan="4">Không có dữ liệu</th>
                        </tr>
                    @else
                        @foreach($posts as $key=>$post)
                            <tr>
                                <th> {{++$key}}<th>
                                <th><a href="{{route('blogs.detail',$post->id)}}">{{$post->title}}</a></th>
                                <th>{{$post->content}}</th>
                                <th><a href="{{route('blogs.edit',['id'=>$post->id])}}" class="btn btn-primary">Edit</a>|
                                    <a href="{{route('blogs.delete',['id'=>$post->id])}}" class="btn btn-danger" onclick="return confirm('Are you want to delete?')">Delete</a></th>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

