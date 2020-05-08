<?php

use think\facade\Route;

Route::get('/',function (){
    echo "首页";
});
Route::get('order','order.Index/index')->append(['id'=>1,'uid'=>2]);

Route::get('test/:id','Index/index')->pattern(['id'=>'\d+']);

Route::get(':action/order/index','order.Index/:action');

Route::rule('hello/:name',function(\think\Request $request,$name){
    $method = $request->method();
    return '[' . $method . '] Hello,' . $name;
})->ext('html');

Route::resource('resource','Resource');

Route::group('zhushi',function(){
    Route::rule(':id','Zhushi/test');
});
