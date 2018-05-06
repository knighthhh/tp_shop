<?php

namespace Tools;
use Think\Controller;

class AdminController extends Controller{
    function __construct(){
        parent::__construct();
       
        $managerinfo = D('manager') -> find(session('admin_id'));
        $roleinfo = D('role') -> find($managerinfo['mg_role_id']);
        $auth_ac = $roleinfo['role_auth_ac'];
        
        $nowac = CONTROLLER_NAME."-".ACTION_NAME;
        $allow_ac="Manager-login,Manager-logout,Manager-verifyImg,Index-left,Index-right,Index-head,Index-index";
       
        if(strpos($auth_ac,$nowac)===false && strpos($allow_ac,$nowac)===false && session('admin_name')!='admin'){
            exit("没有权限访问");
        }
        
        $yunxu_ac = "Manager-login,Manager-verifyImg";
        $admin_id = session('admin_id');
        if(empty($admin_id) && strpos($yunxu_ac,$nowac)===false){
            $group_url = __MODULE__;
            $js = <<<eof
                    <script type="text/javascript">
                    window.top.location.href="$group_url/Manager/login";
                    </script>
eof;
           echo $js;
        }
    }
}
 