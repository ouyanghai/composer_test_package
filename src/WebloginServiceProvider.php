<?php

namespace Oyan\Weblogin;

use Illuminate\Support\ServiceProvider;

class WebloginServiceProvider extends ServiceProvider{

    protected $defer = true; // 延迟加载服务

    public function boot(){
        $this->loadViewsFrom(__DIR__ . '/views', 'weblogin'); // 视图目录指定
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/'),  // 发布视图目录到resources 下
            __DIR__.'/config/weblogin.php' => config_path('weblogin.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    public function register()
    {
        // 单例绑定服务
        $this->app->singleton('weblogin', function ($app) {
            return new Weblogin();
        });
    }

    public function provides()
    {
        // 因为延迟加载 所以要定义 provides 函数 具体参考laravel 文档
        return ['weblogin'];
    }
}
