<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
    public function postsByTag($slug)
    {
        /** @var Tag $tag */
        $tag = Tag::query()->where('slug', $slug)->firstOrFail();

        return view('tags.posts',[
            'tag' => $tag,
            'posts' => $tag->getActivePosts(),
        ]);
    }
}
