<?php

namespace NMFCODES\GoogleStaticMap;

use Illuminate\Support\ServiceProvider;
use Laravel\Lumen\Application as LumenApplication;
use Illuminate\Foundation\Application as LaravelApplication;

class GoogleStaticMapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__.'/../config/google-map.php');

        if ($this->app instanceof LaravelApplication) {
            $this->publishes([$source => config_path('google-map.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('google-map');
        }

        $this->mergeConfigFrom($source, 'google-map');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $config = $this->app->config['google-map'];

        $this->app->singleton(GoogleStaticMap::class, function () use ($config) {
            return (new GoogleStaticMap)
                ->setAPIKey($config['api_key'])
                ->setZoom($config['static_map']['zoom'])
                ->setHeight($config['static_map']['height'])
                ->setWidth($config['static_map']['width']);
        });
    }
}
