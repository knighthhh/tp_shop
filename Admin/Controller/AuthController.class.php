<?php

namespace Admin\Controller;
use Tools\AdminController;

class AuthController extends AdminController{
    function showlist(){
        $auth = new \Model\AuthModel();
        $info = $auth ->order(auth_path) -> select();
        $this -> assign("info",$info);
        $this -> display();
    }
    function tianjia(){
        $auth = new \Model\AuthModel();
        if(!empty($_POST)){
            $z = $auth ->saveData($_POST);
            if($z){
               $this ->redirect("showlist",array(),2,"权限添加成功");
            }else{
               $this ->redirect("tianjia",array(),2,"权限添加失败");
            }
        }else{
            $authinfo = $auth->where('auth_level = 0') -> select();
            $this -> assign("info",$authinfo);
            $this -> display();
        }
       
    }
}
