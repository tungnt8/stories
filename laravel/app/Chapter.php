<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    protected $table = 'chapters';

    public function story() {
        return $this->belongsTo('App\Story', 'story_id');
    }
    // is_newset = 0 is that not order by
    public static function get_chapters_by_story_id($story_id = 0, $count = 15, $page = 1, $is_newest = false) {
        $chapters = [];
        $total = 0;
        if ($story_id) {
            $order_by = array('id', 'asc');
            if ($is_newest){
                $order_by = array('id', 'desc');
            }
            $chapters = self::select('id', 'title', 'created_at', 'modified_at')
                ->where('story_id', $story_id)
                ->orderby($order_by[0], $order_by[1])
                ->offset(($page - 1) * $count)
                ->limit($count)
                ->get();

//            $total = DB::select('SELECT FOUND_ROWS()');
        }
        return $chapters;
    }

    public static function admin_get_chapters_by_story_id($story_id = 0, $count = 15, $is_newest = false) {
        $order_by = array('id', 'asc');
        if ($is_newest){
            $order_by = array('id', 'desc');
        }
        $chapters = self::select('id', 'title', 'view_count', 'status','created_at', 'modified_at')
            ->where('story_id', $story_id)
            ->orderby($order_by[0], $order_by[1])
            ->paginate($count);
        $chapters->setPath('chapters?story_id='.$story_id);
        return $chapters;
    }
}
