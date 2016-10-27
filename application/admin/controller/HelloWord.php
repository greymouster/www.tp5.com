<?php

namespace app\admin\Controller;
use think\Controller;
//use think\Request;  //不用使用  是因为Controllerh中已经实例化Request对象
use think\Db;

class HelloWord extends Controller{
    public function index(){
       echo $this->request->method();
    }
}