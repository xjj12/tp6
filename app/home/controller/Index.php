<?php
declare (strict_types = 1);

namespace app\home\controller;
use think\Db;
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
        $list = Db::table('test')->where('id',1)->fund();
        return json($list)->code(201);
    }
}
