<?php

namespace SsGroup\BusTracking;

use Illuminate\Support\ServiceProvider;
use SsGroup\BusTracking\App\Http\Middleware\DeveloperMode;
use SsGroup\BusTracking\Repo\Register;

class BusTrackingServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->setupRepository();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/route/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/view','bustracking');
        $this->publishes([__DIR__.'/public' => public_path(config('bus.asset_path'))],'public');
        $this->publishes([__DIR__.'/config' => base_path('config')],'config');
        $this->app['router']->aliasMiddleware(config('bus.middleware_dev_mode'), DeveloperMode::class);
    }

    public function setupRepository()
    {
        $register = new Register();
        foreach ($register->interfaces as $key => $value) {
            $this->app->bind($key, $value);
        }
    }

}
