<?php

namespace WinXaito\LaravelInstaller\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class InstallationRedirect{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        //Verify routes and redirect
        $route = Route::getRoutes()->match($request);
        if($route->getPrefix() != '_debugbar') {
            if ($route->getPrefix() != '/install' && !file_exists(storage_path('app/.install')))
                return redirect(route('installer.home'));
            elseif ($route->getPrefix() == '/install' && file_exists(storage_path('app/.install')))
                return redirect('/');
        }

        return $next($request);
    }
}
