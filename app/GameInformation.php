<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GameInformation extends Model {

    protected $fillable = ['title', 'body', 'tags'];

}
