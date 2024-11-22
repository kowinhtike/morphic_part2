<?php

use App\Models\Post;
use App\Models\Tag;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

Route::get('/fortags', function () {
    $post = Post::first();
    foreach ($post->tags as $tag) {
        echo $tag->name."<br/>";
    }
    $video = Video::find(1);
    foreach ($video->tags as $tag) {
        echo $tag->name."<hr>";
    }
});

Route::get('/fromtags', function () {
    $tag = Tag::find(3);
    foreach ($tag->posts as $post) {
        echo $post->title;
    }
    foreach ($tag->videos as $video) {
        echo $video->title;
    }
});
