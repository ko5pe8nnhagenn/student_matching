<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model

{
  
  
   protected $fillable =
   [
        'comments',
        'post_id',
        'user_id',
    ];
 


    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function post()
    {
        return $this->hasMany('App\Post');
    }

}



