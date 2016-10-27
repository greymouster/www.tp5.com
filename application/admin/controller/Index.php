<?php

namespace  app\admin\controller;
use think\Controller;
use think\Request;
use think\Db;

class Index  extends Controller{
    public function index(){
        
        //实例化Request 
        $request = Request::instance();  //使用前必须引入requset对象
        echo $request->url(); //获取当前URL地址  不包含域名
        echo "<br/>";
        echo $this->request->url(); //获取当前的URL地址 不包含域名   这样写 是继承controller 或者use think\Request;
        echo "<br/>";
        echo $this->request->bind("name","张三"); //动态绑定参数
        echo $this->request->name;    //获取动态绑定的参数 其他控制器中可以直接使用
        echo "<br/>";
        echo request()->url();   //为了简洁方便 可以直接使用函数助手   此函数不用继承 也不用引用
        echo "<br/>";
        var_dump(request()->param());  //获取get post 传递的参数
        echo "<br/>";
        echo $request->param('name');  //获取get post 传递的name
        echo "<br/>";
        print_r(input());   //和request()->param();方法一样
        echo "<br/>";
        echo input('name');
        echo "<br/>";
        /*******param方法支持变量的过滤和默认值*******/
        echo $request->param('en_name','JACK','strtolower');   //好像strtolower不起什么效果
        echo "<br/>";
        echo "========================request 其他参数================<br/>";
        echo "请求方法:".$request->method()."<br/>";
        echo "访问ip:".$request->ip()."<br/>";
        echo "是否ajax提交：" .($request->isAjax()?"是":"否")."<br/>";
        echo "当前的域名：".$request->domain()."<br/>";
        echo "当前入口文件：".$request->baseFile()."<br/>";
        echo "包含域名的完整的URL地址：".$request->url(true)."<br/>";
        echo "URL地址的参数信息:".$request->query()."<br/>";
        echo "当前URL地址不包含QUERY_STRING".$request->baseUrl()."<br/>";
        echo "URL地址中的pathinfo信息:".$request->pathinfo().'<br/>';
        echo "URL地址中的后缀信息:".$request->ext()."<br/>";
        echo "==================request请求当前模块/控制器/操作信息<br/>";
        echo  "当前模块:".$request->module()."<br/>";
        echo "当前控制器".$request->controller()."<br/>";
        echo "当前操作方法".$request->action()."<br/>";
        
        
        
        
    }
}
