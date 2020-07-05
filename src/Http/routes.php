<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/5 0005
 * Time: 11:29
 */

Route::get('/', 'DJunitController@index');
Route::post('/', 'DJunitController@store')->name('junit.store');

// 测试路由
Route::get('test', 'TestController@index');