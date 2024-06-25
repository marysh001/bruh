<?php

namespace App\Observers;

use App\Models\News;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class NewsObserver
{
    public function updating(News $news): void
    {
        Log::info('Updating news ' . $news);
    }

    public function saving(News $news): void
    {
        $news->slug = Str::slug($news->title);
    }
}
