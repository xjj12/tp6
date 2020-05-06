<?php

use think\facade\Route;

Route::get('',function (){
    echo "首页";
});
Route::get('test','Index/index');
