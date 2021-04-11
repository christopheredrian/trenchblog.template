@extends('layouts.layout')

@section('content')

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-6 mb-5">
                <a class="post-card-link" href="{{route('posts.getPost', $post->id)}}">
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
