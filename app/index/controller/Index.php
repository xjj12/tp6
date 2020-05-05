<?php


namespace app\index\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index(){
        echo runtime_path();
        echo app_path();
        echo app('http')->getName();
    }
}
