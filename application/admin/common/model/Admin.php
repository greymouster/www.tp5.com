<?php

namespace app\admin\common\model;

use think\Model;

class Admin extends Model {

    public  function login($name) {
        return $this->where('username',$name)->find();
    }
    //单例模式
    public static function init(){
        return new self;
    }

}
