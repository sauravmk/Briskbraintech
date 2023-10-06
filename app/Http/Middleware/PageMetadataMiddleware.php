<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\PageMetadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class PageMetadataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentRouteName = Route::currentRouteName();

        // Fetch metadata based on the route name
        $pageMetadata = PageMetadata::where('page_name', $currentRouteName)->first();
    
        // Share the data with all views
        view()->share('pageMetadata', $pageMetadata);
    
        return $next($request);
    }
}
