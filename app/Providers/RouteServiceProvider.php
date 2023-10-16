<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/login';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapTechnologyProviderPanelRoutes();
        $this->mapTechnologySeekerPanelRoutes();
        $this->mapAdvisorPanelRoutes();
        $this->mapManagerPanelRoutes();
        $this->mapAdminPanelRoutes();

    }



    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes(): void
    {
        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));
        });
    }

    /**
     * @return void
     */
    protected function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }

    protected function mapAdminPanelRoutes(): void
    {
        Route::prefix('api/web/v1/admin-panel')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api/web/v1/admin-panel/api.php'));
    }

    protected function mapManagerPanelRoutes(): void
    {
        Route::prefix('api/web/v1/manager-panel')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api/web/v1/manager-panel/api.php'));
    }

    protected function mapTechnologyProviderPanelRoutes(): void
    {
        Route::prefix('api/web/v1/technology-provider-panel')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api/web/v1/technology-provider-panel/api.php'));
    }

    protected function mapTechnologySeekerPanelRoutes(): void
    {
        Route::prefix('api/web/v1/technology-seeker-panel')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api/web/v1/technology-seeker-panel/api.php'));
    }

    protected function mapAdvisorPanelRoutes(): void
    {
        Route::prefix('api/web/v1/advisor-panel')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api/web/v1/advisor-panel/api.php'));
    }
}
