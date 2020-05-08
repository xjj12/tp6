<?php

namespace app\admin\controller;

use app\BaseController;

class Resource extends BaseController{
    public function index(){
        echo 'index';
    }
    public function create(){
        echo 'create';
    }
    public function save(){
        echo 'save';
    }
    public function read(){
        echo 'read';
    }
    public function edit(){
        echo 'edit';
    }
    public function update(){
        echo 'update';
    }
    public function delete(){
        echo 'delete';
    }
}
