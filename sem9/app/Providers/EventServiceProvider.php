<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\NewsProcessed;
use App\Listeners\SendPodcastNotification;
use Illuminate\Support\Facades\Event;


class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
      Event::listen(
      NewsProcessed::class,
      SendNewsNotification::class,
      );
      Event::listen(NewsObserver::class);
    }
}
