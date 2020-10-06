<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\ChatMessage;
use App\Activity;
use App\Observers\ActivityObserver;
use App\Observers\ChatMessageObserver;
use App\Observers\UserObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        ChatMessage::observe(ChatMessageObserver::class);
        Activity::observe(ActivityObserver::class);
    }
}
