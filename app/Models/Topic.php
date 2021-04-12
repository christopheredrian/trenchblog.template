<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Topic extends \Canvas\Models\Topic
{
    use HasFactory;

    public static function getTopicsWithCounts()
    {

        return DB::table('canvas_topics AS t')
            ->join('canvas_posts_topics AS cpt', 'cpt.topic_id', '=', 't.id', 'left')
            ->join('canvas_posts AS p', 'p.id', '=', 'cpt.post_id', 'left')
            ->groupBy('t.id')
            ->selectRaw('t.*, COUNT(1) AS total_posts')
            ->get();


    }
}
