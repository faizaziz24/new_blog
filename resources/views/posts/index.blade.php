@extends('main')

@section('title', '| All Posts')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>    
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th>Last updated</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{ $post->id }}</th>
                            <th>{{ $post->title }}</th>
                            <th>{{ substr($post->body, 0, 100) }}{{ strlen($post->body) > 50 ? "..." : ""}}</th>
                            <th>{{ date('M j, Y H:ia', strtotime($post->created_at)) }}</th>
                            <th>{{ date('M j, Y H:ia', strtotime($post->updated_at)) }}</th>
                            <th><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a> | 
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Edit</a> | 
                                <a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger">Delete</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 
@stop