<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumCategory extends Model {

    protected $fillable = ['name', 'section_id'];

    protected function section(){
        return $this->belongsTo('App\ForumSection');
    }

}
