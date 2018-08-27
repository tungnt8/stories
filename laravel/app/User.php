<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function get_list_users($search_keys = '', $count = 15)
    {
        $where = array();
        if($search_keys) {
            array_push($where, array(
                array('full_name', 'like', '%'.$search_keys.'%'),
                array('user_name', 'like', '%'.$search_keys.'%'),
                array('email', 'like', '%'.$search_keys.'%')
            ));
        }


        $users = self::select(
            'id',
            'user_name',
            'email',
            'full_name',
            'avatar',
            'role',
            'created_at',
            'modified_at'
        )
            ->where($where)
            ->paginate($count);

        return $users;
    }

//    public static function create_user() {
//        return true;
//    }
}
