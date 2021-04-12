<?php

namespace App\View\Components;

use App\Models\Tag;
use App\Models\Topic;
use Canvas\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        $popular_posts = Post::query()
            ->join('canvas_visits', 'canvas_visits.post_id', '=', 'canvas_posts.id', 'inner')
            ->selectRaw("canvas_posts.*, COUNT(1) AS total_views")
            ->whereNotNull('canvas_posts.published_at')
            ->groupBy('canvas_posts.id')
            ->orderBy('total_views', 'desc')
            ->limit(5)
            ->get();


        return view('components.sidebar', [
            'popular_posts' => $popular_posts,
            'topics' => Topic::getTopicsWithCounts(),
            'tags' => Tag::getTagsWithCounts(),
        ]);
    }

    private function getPopularPosts(){

    }
}
