<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicsController extends Controller
{
    public function index()
    {

        return view('topics.index', [
            'topics' => Topic::getTopicsWithCounts(),
            'tags' => Tag::getTagsWithCounts(),
        ]);
    }

    public function postsByTopic($slug)
    {

        $topic = Topic::query()->where('slug', $slug)->firstOrFail();

        return view('topics.posts', [
            'topic' => $topic
        ]);
    }
}
