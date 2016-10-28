<?php

namespace  app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;
//use think\View;

class Index  extends Controller{
    public function index(){
        
        return $this->fetch('index');
    }
}
