<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > Blog
Breadcrumbs::register('forum', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Forum', route('forum.index'));
});

// Home > Blog > [Category]
Breadcrumbs::register('forum_category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('forum');
    $breadcrumbs->push($category->name, route('forum.show', $category->name));
});

// Home > Blog > [Category] > [Page]
Breadcrumbs::register('forum_topic', function($breadcrumbs, $topic)
{
    $category = \App\ForumCategory::find($topic->category_id);
    $breadcrumbs->parent('forum_category', $category);
    $breadcrumbs->push($topic->name, route('forum.topic', $topic->slug));
});