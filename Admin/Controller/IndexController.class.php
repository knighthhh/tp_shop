<?php

namespace Admin\Controller;
use Tools\AdminController;

class IndexController extends AdminController{
    function index(){
        $this -> display();
    }
    
    function head(){
        //不显示调试信息
        C('SHOW_PAGE_TRACE',false);
        $this -> display();
    }
    
    function left(){
        $manager = new \Model\ManagerModel();
        $role = new \Model\RoleModel();
        $auth = new \Model\AuthModel();
        $managerInfo = $manager -> find(session('admin_id'));
        $roleInfo = $role -> find($managerInfo['mg_role_id']);
        $auth_ids = $roleInfo['role_auth_ids'];
        
        if($managerInfo['mg_name'] == 'admin'){
             $authInfoA = $auth ->where("auth_level = 0 ") -> select();
             $authInfoB = $auth ->where("auth_level = 1 ") -> select();
        }else{
             $authInfoA = $auth ->where("auth_level = 0 and auth_id in ($auth_ids)") -> select();
             $authInfoB = $auth ->where("auth_level = 1 and auth_id in ($auth_ids)") -> select();
        }
       
        
        $this -> assign("authInfoA",$authInfoA); 
        $this -> assign("authInfoB",$authInfoB); 
        $this -> display();
    }
    
    function right(){
        $this -> display();
    }
}

