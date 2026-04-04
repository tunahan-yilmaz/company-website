<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // Share $settings with all site views
        View::composer('site.*', function ($view) {
            try {
                $view->with('settings', Setting::first());
            } catch (\Exception $e) {
                $view->with('settings', null);
            }
        });
    }
}
