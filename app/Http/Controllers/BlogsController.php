<?php

namespace App\Http\Controllers;

use Canvas\Events\PostViewed;
use Canvas\Models\Post;
use Canvas\Services\StatsAggregator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function getPosts()
    {

        return view('home', [
            'posts' => Post::query()->latest()->published()->paginate(2),
        ]);
    }


    /**
     * @param $slug
     * @return JsonResponse
     */
    public function getPost($slug): JsonResponse
    {
        $post = Post::with('user', 'tags', 'topic')->firstWhere('slug', $slug);

        // dd($post);

        dd('@getPost (details)');
        if ($post) {
            event(new PostViewed($post));

            return response()->json($post, 200);
        } else {
            return response()->json(null, 404);
        }
    }
}
