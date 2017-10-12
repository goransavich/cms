<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

	protected $primaryKey = 'comment_id';

	protected $table = 'comments';

	protected $guarded=[];

    public function post()
    {

    	return $this->belongsTo(Post::class, 'comment_id');
    }
}
