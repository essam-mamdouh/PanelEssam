<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';
    protected $Api_namespace = 'App\Http\Controllers\Api';
    protected $Admin_namespace = 'App\Http\Controllers\Admin';
    protected $Site_namespace = 'App\Http\Controllers\Site';

    public const HOME = '/home';


    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapauthApiRoutes();

        $this->mapguestApiRoutes();

        $this->mapWebRoutes();

        $this->mapAdminRoutes();

        $this->mapSiteRoutes();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapauthApiRoutes()
    {
        Route::middleware(['api', 'auth:api', 'lang', 'InitRequest'])
            ->prefix('api')
            ->namespace($this->Api_namespace)
            ->group(base_path('routes/auth-api.php'));
    }

    protected function mapguestApiRoutes()
    {
        Route::middleware(['lang', 'InitRequest'])
            ->prefix('api')
            ->namespace($this->Api_namespace)
            ->group(base_path('routes/guest-api.php'));
    }

    protected function mapAdminRoutes()
    {
        Route::middleware(['web', 'admin', 'lang'])
            ->as('admin.')
            ->prefix('admin')
//            ->namespace($this->Admin_namespace)
            ->group(base_path('routes/admin.php'));
    }

    protected function mapSiteRoutes()
    {
        Route::middleware(["web", 'site', 'lang'])
            ->namespace($this->Site_namespace)
            ->group(base_path('routes/site.php'));
    }

    protected function mapWebRoutes()
    {
        Route::middleware(["web", 'lang'])
            ->namespace("App\Http\Controllers")
            ->group(base_path('routes/web.php'));
    }

}
