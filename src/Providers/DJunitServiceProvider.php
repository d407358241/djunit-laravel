<?php
namespace Dht\DjunitLaravel\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/5 0005
 * Time: 11:37
 */
class DJunitServiceProvider extends ServiceProvider
{

    public function register()
    {

       // echo "这是我自己会你得先二";
        $this->registerRoutes();
        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'djunit'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
     //   echo "boot<br>";


    }
    // 参考别人的写法
    // 对于源码熟悉更好一些
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            // 定义访问路由的域名
            // 'domain' => config('telescope.domain', null),
            // 是定义路由的命名空间
            'namespace' => 'Dht\DjunitLaravel\Http\Controllers',
            // 这是前缀
            'prefix' => 'djunit',
            // 这是中间件
            'middleware' => 'web',
        ];
    }
}