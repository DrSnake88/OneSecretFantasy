<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaPicture extends Model {

    protected $fillable = ['image', 'title', 'caption', 'tags'];

}
