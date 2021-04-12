<?php

namespace App\Http\Controllers;

use Canvas\Events\PostViewed;
use Canvas\Models\Post;
use Canvas\Models\Topic;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    {

        /** @var Builder $query */
        $query = Post::query()->latest()->published();

        if ($q = $request->input('q')) {
            $query->where(function (Builder $query) use ($q) {
                $query->where('title', 'like', "%$q%");
            });
        }


        return view('home', [
            'posts' => $query->paginate(2),
        ]);
    }


    /**
     * @param $slug
     * @return Application|Factory|View|JsonResponse
     */
    public function post($slug)
    {
        $post = Post::with('user', 'tags', 'topic')->firstWhere('slug', "$slug");

        if ($post) {
            event(new PostViewed($post));
            return view('posts.details', ['post' => $post]);

        } else {
            return response()->json(null, 404);
        }
    }
}
