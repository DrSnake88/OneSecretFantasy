<?php namespace App\Http\Controllers;

use App\Blog;
use App\ForumTopic;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class SitemapController extends Controller {

    public function index()
    {
        $sitemaps = ['blogs', 'forum'];
        return response()->view('sitemap.index', compact('sitemaps'))->header('Content-Type', 'application/xml');
	}

    public function blog()
    {
        $items = Blog::orderBy('created_at', 'DESC')->get();

        foreach ($items as $item) {
            $item->url = env('APP_DOMAIN').'/blogs/'.$item->slug;
        }

        return response()->view('sitemap.sitemap', compact('items'))->header('Content-Type', 'application/xml');
    }

    public function forum()
    {
        $items = ForumTopic::orderBy('created_at', 'DESC')->get();

        foreach ($items as $item) {
            $item->url = env('APP_DOMAIN').'/forums/'.$item->category->slug.'/'.$item->slug;
        }

        return response()->view('sitemap.sitemap', compact('items'))->header('Content-Type', 'application/xml');
    }

}
