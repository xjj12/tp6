<?php

namespace app\admin\controller;

use app\BaseController;
use think\annotation\Route;
use think\annotation\route\Group;

class Zhushi extends BaseController{

    /**
     * @Route("test")
     */
    public function test(){
        return "test";
    }

    /**
     * @Route("demo")
     */
    public function demo(){
        return "demo";
    }

    /**
     * @param  string $name
     * @return mixed
     * @Route("haha/:name",method="GET")
     */
    public function haha(){
        return 1;
    }
}
