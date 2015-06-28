<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumReply extends Model {

    protected $fillable = ['body'];

    protected function user(){
        return $this->belongsTo('App\User');
    }

    protected function topic(){
        return $this->belongsTo('App\ForumTopic');
    }

}