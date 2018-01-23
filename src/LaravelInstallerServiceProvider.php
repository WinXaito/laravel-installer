<?php

/**
 * @author WinXaito
 */

namespace WinXaito\LaravelInstaller;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LaravelInstallerServiceProvider extends ServiceProvider{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    public function boot(){
        //Load views
        $this->loadViewsFrom(realpath(__DIR__.'/views'), 'LaravelInstaller');

        //Setup routes
        $this->setupRoutes($this->app->router);

        //Publishes
        $this->publishes([
            __DIR__.'/config/installer.php' => config_path('installer.php'),
            __DIR__.'/views' => base_path('resources/views/vendor/winxaito/laravel-installer'),
            __DIR__.'/lang' => base_path('resources/lang/vendor/winxaito/laravel-installer'),
            __DIR__.'/assets' => public_path('vendor/winxaito/laravel-installer'),
        ], 'LaravelInstaller');

        //Middleware
        $this->app['Illuminate\Contracts\Http\Kernel']->pushMiddleware('WinXaito\LaravelInstaller\Middleware\InstallationRedirect');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes(Router $router){
        $router->group(['namespace' => 'WinXaito\LaravelInstaller\Controllers'], function($router){
            require __DIR__.'/routes/web.php';
        });

        $router->middleware('VerifyInstallation', 'WinXaito\LaravelInstaller\Middleware');
    }

    public function register(){
        $this->app->bind('LaravelInstaller',function($app){
            return new LaravelInstaller;
        });
    }
}