<?php

namespace app\index\controller;
//命名空间think必须小写
use think\Controller;
use think\Request;
use think\Db;
class Index2 extends Controller {
      public function index(){
         //获取get 和post 提交的数据 
         $a = $this->request->param();
         //获取数据的数据
         $data = Db::name("admin")->select();
         
         
         //返回结果集到页面
          $this->assign('data',$data);
          return $this->fetch('ceshi');
      }
}

