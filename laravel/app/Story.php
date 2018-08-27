<?php

namespace App;
use App\Chapter;
use App\StoryCategory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //
    protected $table = 'stories';

    public function chapters()
    {
        return $this->hasMany('App\Chapter', 'story_id');
    }

    public function author() {
        return $this->belongsTo('App\Author', 'author_id');
    }

    public function categories() {
        $categories = StoryCategory::select('categories.id', 'categories.title')
                     ->join('categories', 'story_category.category_id', '=', 'categories.id')
                    ->where('story_id', '=', $this->id)
                    ->get();
        return $categories;
    }
     public static function get_list($is_completed = 0, $is_hot = 0, $category = 0, $count = 15, $page = 1) {
        $where = array();

        if ($is_completed) {
            array_push($where, array('status', '=', 1));
        }
        if ($is_hot) {
            array_push($where, array('is_hot', '=', 1));
        }
        if ($category) {
            array_push($where, array('story_category.category_id', '=', $category));
        }

        $stories = self::select(
            'stories.id',
            'stories.title',
            'stories.summary',
            'stories.feature_image',
            'stories.is_hot',
            'stories.view_count',
            'stories.status',
            'stories.created_at',
            'categories.title as category_title',
            'authors.name as author'
        ) ->join('story_category', 'stories.id', '=', 'story_category.story_id')
            ->join('categories', 'story_category.category_id', '=', 'categories.id')
            ->join('authors', 'stories.author_id', '=', 'authors.id')
            ->where($where)
            ->offset(($page - 1) * $count)
            ->limit($count)
            ->get();

        $total = self::join('story_category', 'stories.id', '=', 'story_category.story_id')
            ->join('categories', 'story_category.category_id', '=', 'categories.id')
            ->join('authors', 'stories.author_id', '=', 'authors.id')
            ->where($where)
            ->count();

         $ret = array(
             'data' => $stories,
             'total' => $total
         );
         return $ret;
     }

     public static function admin_get_list($search_keys = '', $is_completed = 0, $is_hot = 0, $category = 0, $count = 15) {
         $where = array();

         if ($is_completed) {
             array_push($where, array('status', '=', 1));
         }
         if ($is_hot) {
             array_push($where, array('is_hot', '=', 1));
         }


         if ($search_keys) {
             array_push($where, array('stories.title', 'LIKE', '%' . $search_keys . '%'));
         }

         if ($category) {
             array_push($where, array('story_category.category_id', '=', $category));
             $stories = self::select(
                 'stories.id',
                 'stories.title',
                 'stories.summary',
                 'stories.feature_image',
                 'stories.is_hot',
                 'stories.view_count',
                 'stories.status',
                 'stories.created_at',
                 'authors.name as author'
             )->join('story_category', 'stories.id', '=', 'story_category.story_id')
                 ->join('authors', 'stories.author_id', '=', 'authors.id')
                 ->where($where)
                 ->paginate($count);
             return $stories;
         } else {
             $stories = self::select(
                 'stories.id',
                 'stories.title',
                 'stories.summary',
                 'stories.feature_image',
                 'stories.is_hot',
                 'stories.view_count',
                 'stories.status',
                 'stories.created_at',
                 'authors.name as author'
             )->where($where)
                 ->join('authors', 'stories.author_id', '=', 'authors.id')
                 ->paginate($count);
             return $stories;
         }
     }

//     public function get_list_chapter_by_
}
