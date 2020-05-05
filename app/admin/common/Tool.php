<?php


namespace app\admin\common;


class Tool
{
    private $test;

    public function __construct($test)
    {
        $this->test = $test;
    }

    public function test(){
        $this->test->conf();
    }
}
