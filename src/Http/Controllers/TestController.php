<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/5 0005
 * Time: 11:31
 */

namespace Dht\DjunitLaravel\Http\Controllers;


use Illuminate\Routing\Controller;

class TestController extends Controller
{
public  function  index(){

    return "这是测试dunit的一个测试控制器";
}
}