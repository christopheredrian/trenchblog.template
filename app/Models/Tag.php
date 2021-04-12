<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class Tag extends \Canvas\Models\Tag
{
    use HasFactory;


    public static function getTagsWithCounts()
    {

        return DB::table('canvas_tags AS t')
            ->join('canvas_posts_tags AS cpt', 'cpt.tag_id', '=', 't.id', 'left')
            ->join('canvas_posts AS p', 'p.id', '=', 'cpt.post_id', 'left')
            ->groupBy('t.id')
            ->selectRaw('t.*, COUNT(1) AS total_posts')
            ->get();
    }

    /**
     * @return Collection
     */
    public function getActivePosts(): Collection
    {
        return $this->posts()
            ->where('published_at', '>=', date('Y-m-d H:i:s'))
            ->get();
    }
}
