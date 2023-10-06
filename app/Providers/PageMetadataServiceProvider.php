<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\PageMetadataMiddleware;

class PageMetadataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app['router']->aliasMiddleware('page.metadata', PageMetadataMiddleware::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind('pageMetadata', function () {
            $routes = Route::getRoutes()->getRoutesByName();
            $pageNames = [];

            foreach ($routes as $name => $route) {
                // Extract the page name from the route name
                $pageName = str_replace(['.', ''], ' ', $name);
                $pageNames[$name] = ucwords($pageName);
            }

            return $pageNames;
        });
    }
}
