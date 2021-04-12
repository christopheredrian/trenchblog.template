@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col">
            <h2 class="border-bottom">"{{$tag->name}}"</h2>
        </div>

    </div>

    <div class="row mt-3">

        @foreach($tag->posts as $post)
            <div class="col-md-6 mb-5">
                <x-post-card :post="$post" href="{{route('posts.slug', $post->slug)}}"></x-post-card>
            </div>
        @endforeach

    </div>


@endsection
