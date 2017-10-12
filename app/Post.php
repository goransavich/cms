<?php

namespace App;



use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $primaryKey='post_id'; 

    protected $guarded=[];

    protected $table = 'posts';

    public function user()
    {

    	return $this->belongsTo(User::class, 'user_id');
    }

    public static function archives()
    {

    	return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
         ->groupBy('year', 'month')
         ->orderByRaw('min(created_at) desc')
         ->get()
         ->toArray();
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
