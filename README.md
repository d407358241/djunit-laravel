# dht/djunit-laravel

方便于laravel框架


Laravel >=5.1 & PHP >=7.1.3

```yml
composer require  "dht/djunit-laravel"
```
#配置方式
5.5 手动配置Laravel对于 Dht\DjunitLaravel\Providers\DJunitServiceProvider::class服务放到config/app.php 中

解释路由
```php
<?php

Route::get('/', 'DJunitController@index');
Route::post('/', 'DJunitController@store')->name('junit.store');

?>
```