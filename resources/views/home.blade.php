@extends('layouts.layout')

@section('pre-content')

    <div class="col-md-12 mb-5">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/1366/600" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1366/600" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/1366/600" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
               data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
               data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Latest Posts</h2>

        </div>
    </div>

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-6 mb-5">
                <a class="post-card-link" href="{{route('posts.getPost', $post->slug)}}">
                    <div class="card">
                        <img class="card-img-top" src="{{$post->featured_image}}"
                             alt="{{$post->featured_image_caption}}">
                        <div class="card-body">
                            <p><small>{{date('F j, Y, g:i a', strtotime($post->published_at))}}</small>
                            </p>
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">
                                {{$post->summary}}
                            </p>
                        </div>
                    </div>
                </a>
            </div>

        @endforeach
    </div>

    <div class="row">
        <div class="col d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
