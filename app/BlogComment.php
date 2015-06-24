<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model {

	//
    protected $fillable = ['comment', 'email', 'name', 'notify'];

    protected function user() {
        return $this->belongsTo('App\User');
    }

    protected function blog() {
        return $this->belongsTo('App\Blog');
    }

}
