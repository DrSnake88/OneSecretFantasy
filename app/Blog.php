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

    public function getTags() {
        return explode(";", $this->tags);
    }

    public function getRelated() {
        $blogs = Blog::all();
        $matchedBlogs = [];

        foreach ($blogs as $blog) {
            if ($blog->id != $this->id) {
                $tags = $blog->getTags();

                if (array_intersect($this->tags, $tags) != null) {
                    $matchedBlogs[] = $blog;
                }
            }
        }

        return $matchedBlogs;
    }
}
