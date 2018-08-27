<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    public static function get_list($search_key = '') {
        $where = array();
        if ($search_key) {
            array_push($where, array('title', 'LIKE', '%'.$search_key.'%'));
        }
        $categories = self::select('id', 'title', 'created_at', 'modified_at')
            ->where($where)
            ->get();
        return $categories;
    }
}
