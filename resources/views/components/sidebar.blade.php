<div class="row mb-5">
    <div class="col-md-12">
        <form action="/">
            <div class="input-group mb-3">
                <input type="text" name="q" class="form-control" placeholder="Search Post ..."
                       value="{{request()->get('q')}}">
                <div class="input-group-append cursor-pointer">
                    <span class="input-group-text">🔍</span>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row mb-2 border bio-wrapper">
    <div class="col-md-12 text-center">
        <img style="max-width: 120px" class="rounded-circle img-fluid bio-image"
             src="https://growingbokchoy.s3.amazonaws.com/production/public/canvas/images/zrdVmPvNVZ0ZOf9rg6wOGQc8ToqzowZhjDkgfe9Q.png" alt="Card image cap">
    </div>

    <div class="px-3 text-center mt-4 mb-3 mt-5 pb-2 py-1">
        <h3 class="mt-3">Hey, I'm Donmari ❤️</h3>
        <p class="text-center text-secondary">
            I’m the mom of a vegetable, baby Bokchoy! I’m here to share my motherhood journey as a first time, stay-at-home mom.
        </p>
    </div>

    <div class="col-md-12 text-center mb-4 text-white">
        <a class="btn btn-primary" href="{{route('pages.about')}}">
            Read my bio
        </a>
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
    <a class="post-card-link" href="{{route('posts.slug', $post->slug ?? '')}}">
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
        @foreach($topics as $topic)
            <div class="mb-3 border-bottom pb-2 d-flex justify-content-between">
                <a href="{{route('topics.posts', $topic->name)}}">{{$topic->name}}</a>
                <span>({{$topic->total_posts}})</span>
            </div>
        @endforeach
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
        @foreach($tags as $tag)
            <a class="badge badge-primary badge-text" href="{{route('tags.posts', $tag->slug)}}">{{$tag->name}}</a>
        @endforeach
    </div>
</div>
