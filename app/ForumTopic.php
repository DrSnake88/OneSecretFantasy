<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model {

    protected $fillable = ['name', 'user_id', 'views', 'replies', 'category_id', 'slug'];

    protected function user(){
        return $this->belongsTo('App\User');
    }

    protected function category(){
        return $this->belongsTo('App\ForumCategory');
    }
}
