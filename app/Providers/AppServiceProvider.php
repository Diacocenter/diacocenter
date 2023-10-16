<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer([
            'panel.admin-panel.admin-panel',
            'panel.manager-panel.manager-panel',
            'panel.technology-provider-panel.technology-provider-panel',
            'panel.technology-seeker-panel.technology-seeker-panel',
            'panel.advisor-panel.advisor-panel',
        ], function ($view) {
            $view->with('current_locale', app()->getLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
    }
}
