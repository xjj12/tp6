<?php


namespace app\admin\controller\order;

use app\BaseController;

class Index extends BaseController{
    public function index(){
        print_r($this->request->param());
    }
    public function list(){
        echo 'list';
    }
}

