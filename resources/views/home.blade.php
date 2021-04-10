<x-layout>

    <style>
        .bio-image {
            max-width: 120px;
            position: absolute;
            top: -65px;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
        }

        .bio-wrapper {
            margin-top: 110px !important;
        }

        .main-header {
            font-size: 4.5em;
        }

        .badge-text {
            font-size: 0.8em;
            margin-bottom: 10px;
            padding: 8px;
        }

        body {
            background-color: #eff3fd;
        }

        .container {
            background-color: white;
        }

        .nav-links {
            color: gray !important;
        }

        .nav-links > a {
            color: #747882 !important;
        }

        .post-card-link {
            color: black;
        }

        .post-card-link:hover {
            color: black;
            text-decoration: none;
        }

        .post-card-link > .card:hover {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .page-item {
            margin: 0 5px;
            text-align: center;
        }

        .page-item > a, .page-item > span {
            border-radius: 50% !important;
            background-color: transparent;
        }

        .input-search-wrapper input, .input-search-wrapper .input-group-text {
            background-color: #61d67c;
            border: none;
            color: black;
        }

        .input-search-wrapper input:focus, .input-search-wrapper input:active {
            background-color: #61d67c;
            border: none;
            box-shadow: none;
        }


    </style>


    <div class="container p-0">

        <div class="row no-gutters">
            <div class="col no-gutters">
                <nav class="navbar navbar-light bg-success">
                    <div class="input-group my-1 w-25 ml-auto input-search-wrapper">
                        <input type="text" class="form-control" placeholder="Type a keyword to search ...">
                        <div class="input-group-append">
                            <span class="input-group-text">🔍</span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="px-5">
            <div class="row mb-3">
                <div class="col-md-12  mt-5 mb-5">
                    <h1 class="text-center main-header">
                        🌱 Bokchoy
                    </h1>
                    <h5 class="text-center"><em>(Growing Bokchoy)</em></h5>
                </div>

                <div class="col-md-12">

                    <div class="nav-links text-center border-bottom pb-4 mb-5">
                        <a href="">Home</a> •
                        <a href="">Topics</a> •
                        <a href="">Tags</a> •
                        <a href="">About</a>
                    </div>
                </div>


                <div class="col-md-12">

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

            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <h2 class="mb-4">Latest Posts</h2>

                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-lg-8 mb-5">

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
                </div>

                {{--  Sidebar --}}
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 px-5">
                    <x-sidebar></x-sidebar>
                </div>

            </div>

        </div>


</x-layout>
