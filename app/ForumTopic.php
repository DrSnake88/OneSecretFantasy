<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model {

    protected $fillable = ['name', 'views', 'replies', 'slug', 'category_id', 'user_id'];

    protected function user(){
        return $this->belongsTo('App\User');
    }

    protected function category(){
        return $this->belongsTo('App\ForumCategory');
    }
}
