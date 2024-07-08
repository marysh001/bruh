<?php

namespace App\Observers;
use Illuminate\Support\Str;

class NewsObserver
{
    $news->slug = Str::slug($news->title);
}
