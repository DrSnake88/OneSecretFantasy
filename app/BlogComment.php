<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model {

	//
    protected $fillable = ['comment', 'blog_id', 'email', 'name', 'user_id', 'reply_to_id'];

    protected function user() {
        return $this->belongsTo('App\User');
    }

    protected function blog() {
        return $this->belongsTo('App\Blog');
    }

}
