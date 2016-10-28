<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use think\Db;
//引用模型
use app\admin\common\model\Admin;

/**
 * 登录控制器
 * 接口文档地址
 * http://192.168.30.225/dokuwiki/doku.php?id=start&do=index
 */
class Login extends Controller {
   
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        //渲染模板
        return $this->fetch();
    }

    public function do_login() {
        //是否是ajax提交和post提交
        if (Request::instance()->isAjax() && Request::instance()->isPost()) {
            $username = trim(input('post.name'));
            $password = trim(input('post.password'));
            var_dump(Admin::init()->login($username));
           
        }
    }

}
