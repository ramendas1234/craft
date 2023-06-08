<?php

namespace App\Listeners;

use Illuminate\Console\Events\ArtisanStarting;
//use Illuminate\Events\ ;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Log;

class LogSomethingWhenCacheCleard
{
    


    /**
     * Handle user login events.
     */
    public function handleLogWhenCacheClearing($event): void {
        Log::info('Hello Craft cache has been clearing');
    }
 
    /**
     * Handle user logout events.
     */
    public function handleLogWhenArtisanStart(ArtisanStarting $event): void {
        Log::info('Hello Craft artisan has been starting');
    }


    public function subscribe(Dispatcher $events): void
    {
        $events->listen(
            'cache:clearing',
            [LogSomethingWhenCacheCleard::class, 'handleLogWhenCacheClearing']
        );
 
        $events->listen(
            ArtisanStarting::class,
            [LogSomethingWhenCacheCleard::class, 'handleLogWhenArtisanStart']
        );
    }

}
