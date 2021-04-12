<?php

namespace App\Http\Controllers;

use Canvas\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopicsController extends Controller
{
    public function index(Request $request)
    {

        $query = Topic::query();

        if ($q = $request->input('q')) {
            $query->where('name', 'like', "%$q%");
        }

        return view('topics.index', [
            'topics' => $query->get()
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
