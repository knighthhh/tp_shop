<?php

namespace Admin\Controller;
use Tools\AdminController;

class RoleController extends AdminController{
    
    function showlist(){
        $role = new \Model\RoleModel();
        $info = $role ->select();
        $this -> assign("info",$info);
        $this -> display();
    }
    
    function fenpei($role_id){
        if(!empty($_POST)){
            $role = new \Model\RoleModel();
            $z = $role ->saveAuth($_POST['role_id'],$_POST['auth_id']);
            if($z){
                $this -> redirect("showlist",array(),2,"分配权限成功");
            }else{
                $this -> redirect("fenpei",array('role_id'=>$role_id),2,"分配权限失败");
            }
        }else{
             $auth = new \Model\AuthModel();
            $role = new \Model\RoleModel();
            $roleinfo = $role -> find($role_id);
            $have_ids = explode(',',$roleinfo['role_auth_ids']);
            $authinfoA = $auth ->where("auth_level=0 ") -> select();
            $authinfoB = $auth ->where("auth_level=1 ") -> select();

            $this -> assign("infoA",$authinfoA);
            $this -> assign("infoB",$authinfoB);
            $this -> assign("have_ids",$have_ids);
            $this -> assign("roleinfo",$roleinfo);
            $this -> display();
        }
       
    }
}

