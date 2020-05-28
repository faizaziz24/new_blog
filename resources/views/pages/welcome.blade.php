@extends('main')

@section('title', '| Homepage')

@section('stylesheets')

@endsection

@section('content')
    <!-- start of row -->
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">Thank you so much for your visiting. This is my web test with Laravel. Please read my posting</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
            </div>
        </div>
    </div>
    <!-- end of row -->
    <!-- start of row -->
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post Title</h3>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad impedit debitis nam! Quod magnam adipisci cumque sapiente inventore alias officia, voluptatem sunt odio voluptas tenetur nostrum architecto error deserunt vero!</p>
                <a href="#" class="btn btn-primary">Read More...</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad impedit debitis nam! Quod magnam adipisci cumque sapiente inventore alias officia, voluptatem sunt odio voluptas tenetur nostrum architecto error deserunt vero!</p>
                <a href="#" class="btn btn-primary">Read More...</a>
            </div>
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad impedit debitis nam! Quod magnam adipisci cumque sapiente inventore alias officia, voluptatem sunt odio voluptas tenetur nostrum architecto error deserunt vero!</p>
                <a href="#" class="btn btn-primary">Read More...</a>
            </div>
        </div>            
        <div class="col-md-3 col-md-offset-1">
            <h3>Sidebar</h3>
        </div>
    </div>
    <!-- end of row -->
@endsection

@section('scripts')

@endsection