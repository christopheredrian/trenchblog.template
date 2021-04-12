<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function postsByTag($slug)
    {
        $tag = Tag::query()->where('slug', $slug)->firstOrFail();
        return view('tags.posts', compact('tag'));
    }
}
