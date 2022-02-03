<?php

namespace App;
use App\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = 
    [
            'title',
            'content',
             'user_id',
             'category_id',
             'meeting_place',
             'meeting_time',
     ];
    
        public function getPaginateByLimit(int $limit_count = 5)
    {
          return $this::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    //Userに対するリレーション

//「1対多」の関係なので単数系に
        public function user()
    {
        return $this->belongsTo('App\User');
    }
    
        public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    
        public function comments()
    {
        return $this->belongsTo(\App\Comment::class);
    }   

}




