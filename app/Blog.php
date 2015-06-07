<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

	//
    protected $fillable = ['title', 'body', 'excerpt', 'user_id'];

    protected function user() {
        return $this->belongsTo('App\User');
    }

    protected function category() {
        return $this->belongsTo('App\BlogCategory');
    }

}
