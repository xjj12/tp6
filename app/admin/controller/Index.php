<?php


namespace app\admin\controller;

use app\BaseController;
use app\admin\common\Tool;
use app\admin\common\conf;
use think\facade\View;
use think\annotation\Route;
use think\annotation\InteractsWithRoute;


class Index extends BaseController
{
    public function index($id){
//        Route::rule('test/:id','Index/index');
//        echo app('http')->getName();

        print_r($id);
        print_r($this->request->param());
    }

    public function test(){
        $conf = new conf();
        $tool = new Tool($conf);
        $tool->test();
        View::assign('name','test');
        return View::fetch('test');
    }

    /**
     * @param $name
     * @return mixed
     * @Route("hello/:name")
     */
    public function hello($name){
        return 'aaaaaa';
    }

}
