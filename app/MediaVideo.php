<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaVideo extends Model {

    protected $fillable = ['video', 'cover', 'title', 'caption', 'tags'];

}
