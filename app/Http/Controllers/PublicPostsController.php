<?php

namespace App\Http\Controllers;

use Canvas\Events\PostViewed;
use Canvas\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class PublicPostsController extends Controller
{
    public function getPosts()
    {

        $posts = Post::query()->latest()->published()->paginate(2);

        return view('home', [
            'posts' => $posts,
        ]);
    }


    /**
     * @param $slug
     * @return Application|Factory|View|JsonResponse
     */
    public function getPost($slug)
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
