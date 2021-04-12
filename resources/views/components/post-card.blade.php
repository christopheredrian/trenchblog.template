<a class="post-card-link" href="{{$href}}">
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
