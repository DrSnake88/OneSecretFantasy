<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumReply extends Model {

    protected $fillable = ['body', 'topic_id', 'user_id'];

    protected function user(){
        return $this->belongsTo('App\User');
    }

    protected function topic(){
        return $this->belongsTo('App\ForumTopic');
    }

}
