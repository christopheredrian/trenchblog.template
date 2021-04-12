@extends('layouts.layout')

@section('style')

    <style>
        .post-body img {
            width: 100%;
        }

        .embedded_image p {
            font-style: italic;
            text-align: center;
        }
    </style>

@endsection

@section('content')

    <div class="row">
        <div class="col">
            <img src="{{$post->featured_image}}" alt="{{$post->featured_image_caption}}" class="img-fluid">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col text-secondary">
            <img style="max-width: 30px" src="{{$post->user->avatar ?: $post->user->default_avatar}}" alt="Author avatar"
                 class="img-fluid rounded-circle"> •
            <span>{{$post->user->name}}</span> •
            <span>{{$post->published_at->diffForHumans()}}</span>
            <span></span>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">

            <div class="mb-4">
                <h2>Mom of a Bokchoy</h2>
            </div>

            <div class="mb-4">
                <x-tag-badge
                    text="hello"
                    href="google.com"
                />
            </div>

            <div class="post-body">
                {!! $post->body !!}
            </div>

            <div>
                Topics:
                @if($post->topic->isEmpty())
                    N/A
                @else
                    @foreach($post->topic as $topic)
                        <a href="{{'..'}}">{{$topic->name}}</a>
                    @endforeach
                @endif

            </div>

        </div>
    </div>


@endsection
