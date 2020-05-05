<?php


namespace app\admin\controller;

use app\BaseController;
use app\admin\common\Tool;
use app\admin\common\conf;
use think\facade\View;

class Index extends BaseController
{
    public function index(){
        echo app('http')->getName();
    }
    public function test(){
        $conf = new conf();
        $tool = new Tool($conf);
        $tool->test();
        View::assign('name','test');
        return View::fetch('test');
    }
}
