<?php


namespace app\admin\controller;

use app\BaseController;
use app\admin\common\Tool;
use app\admin\common\conf;
use think\facade\View;


class Index extends BaseController
{
    public function index(){
        echo 123;
//        Route::rule('test/:id','Index/index');
//        echo app('http')->getName();
        print_r($_GET);
        print_r($_POST);
    }
    public function test(){
        $conf = new conf();
        $tool = new Tool($conf);
        $tool->test();
        View::assign('name','test');
        return View::fetch('test');
    }
}
