<?php

namespace Talk\Context;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    protected $defer = true;

    /**
     * 在注册后启动服务
     *
     * @return void
     */
    public function boot()
    {
        /*$this->publishes([
            __DIR__.'/path/to/config/courier.php' => config_path('courier.php'),
        ]);*/
    }

    public function register()
    {
        $this->app->singleton('context', function () {
            return Manager::create();
        });
    }

    public function provides()
    {
        return [
            'context',
        ];
    }
}
