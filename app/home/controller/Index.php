<?php
declare (strict_types = 1);

namespace app\home\controller;

use think\facade\Db;
use think\Request;

class Index
{
    private $request;

    public function __construct(Request $request){
        $this->request = $request;
    }
    public function index()
    {
        return $this->request->method();
    }
    public function test(){
//        $data = ['name'=>'bbb','age'=>12];
//        Db::name('test')->insert($data);
        $list = Db::name('test')->select()->toArray();
        print_r($list);
    }
}
