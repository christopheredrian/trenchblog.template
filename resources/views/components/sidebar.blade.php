<div class="row mb-5">
    <div class="col-md-12">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search Post ...">
            <div class="input-group-append">
                <span class="input-group-text">🔍</span>
            </div>
        </div>
    </div>
</div>

<div class="row mb-2 border bio-wrapper">
    <div class="col-md-12 text-center">
        <img style="max-width: 120px" class="rounded-circle img-fluid bio-image"
             src="https://avatars.githubusercontent.com/u/9636858?v=4" alt="Card image cap">
    </div>

    <div class="px-3 text-center mt-4 mb-3 mt-5 pb-2">
        <h3 class="mt-3">Donmari Espiritu</h3>
        <p class="text-center text-secondary">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt
            repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias
            minus.
        </p>
    </div>

    <div class="col-md-12 text-center mb-4">
        <button class="btn btn-primary">
            Read my bio
        </button>
    </div>
</div>

<div class="row">

</div>

{{--  Popular Posts  --}}

<div class="row mt-5">
    <div class="col-md-12 border-bottom mb-3 pb-3">
        Popular Posts
    </div>
</div>


@foreach($popular_posts as $post)
    <a class="post-card-link" href="{{route('posts.getPost', $post->slug ?? '')}}">
        <div class="row mb-3">
            <div class="col-md-4">
                <img class="img-fluid" src="{{$post->featured_image}}"
                     alt="{{$post->featured_image_caption}}">
            </div>
            <div class="col-md-8">
                <p><strong>{{$post->title}}</strong></p>
                <span class="text-secondary">
                                {{date('F j, Y, g:i a', strtotime($post->created_at))}}
                </span>
            </div>
        </div>
    </a>

@endforeach


{{--  Topics  --}}
<div class="row mt-5">
    <div class="col-md-12">
        <div class="border-bottom mb-3 pb-3">
            Topics
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-12">
        <div class="mb-3 border-bottom pb-2 d-flex justify-content-between">
            <a href="">Agriculture</a>
            <span>(30)</span>
        </div>
        <div class="mb-3 border-bottom pb-2 d-flex justify-content-between">
            <a href="">Gardening</a>
            <span>(3)</span>
        </div>
        <div class="mb-3 border-bottom pb-2 d-flex justify-content-between">
            <a href="">Urban Gardening</a>
            <span>(2)</span>
        </div>
    </div>
</div>


{{--  Tags  --}}

<div class="row mt-5">
    <div class="col-md-12">
        <div class="border-bottom mb-3 pb-3">
            Tags
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-12">
        <a class="badge badge-primary badge-text" href="#">Bokchoy</a>
        <a class="badge badge-primary badge-text" href="#">Asparagus</a>
        <a class="badge badge-primary badge-text" href="#">Tomato</a>
        <a class="badge badge-primary badge-text" href="#">Potato</a>
        <a class="badge badge-primary badge-text" href="#">Mushroom</a>
        <a class="badge badge-primary badge-text" href="#">Banana</a>
    </div>
</div>
