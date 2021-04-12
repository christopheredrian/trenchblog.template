@extends('layouts.layout')

@section('content')



    <div class="row">
        <div class="col">
            <h2 class="border-bottom">Topics</h2>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group ml-1 list-unstyled">

                @foreach($topics as $topic)

                    <li>
                        <a href="{{route('topic.posts', $topic->name)}}"
                           class="pl-0 list-group-item d-flex justify-content-between align-items-center border-0">
                            {{$topic->name}}
                            <span class="badge badge-primary badge-pill">{{$topic->total_posts}}</span>
                        </a>
                    </li>

                @endforeach

            </ul>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col">
            <h2 class="border-bottom">Tags</h2>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <ul class="list-group ml-1 list-unstyled">

                @foreach($tags as $tag)

                    <li>
                        <a href="{{route('tags.posts', $tag->name)}}"
                           class="pl-0 list-group-item d-flex justify-content-between align-items-center border-0">
                            {{$tag->name}}
                            <span class="badge badge-primary badge-pill">14</span>
                        </a>
                    </li>

                @endforeach

            </ul>
        </div>
    </div>


@endsection
