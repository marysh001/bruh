<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri:'news/create-test', function () {
$news = new News();

$news->title = 'Test news title';
$news->body = 'Test news body';

$news->save(); 
return $news;
});

Route::get(uri:'news/{id}/hide', function ($id) {
$news = News::findOrFail($id);
$news->hidden = true;
$news->save();

return 'News hidden';
});
