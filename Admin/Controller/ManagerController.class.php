<?php

namespace Admin\Controller;
use Tools\AdminController;

class ManagerController extends AdminController{
        function login(){
            if(!empty($_POST)){
                $vry = new \Think\Verify();
                if($vry -> check($_POST['captcha'])){
                    $manager = new \Model\ManagerModel();
                    
                    $info = $manager -> checkNamePwd($_POST['admin_user'],$_POST['admin_psd']);
                    if($info){
                        session('admin_id',$info['mg_id']);
                        session('admin_name',$info['mg_name']);
                        $this ->redirect('Index/index');
                    }else{
                         $error = "用户名或密码错误";
                         $this -> assign("error",$error);
                         $this ->display();
                    }
                }else{
                    $error = "验证码错误";
                    $this -> assign("error",$error);
                    $this ->display();
                }
                
            }else{
                $this -> display();
            }
            
        }
        
        function logout(){
            session(null);
            $this -> redirect('login');
        }
        
        function verifyImg(){
            $cfg = array(
                'imageH'    => 40,
                'imageW'    => 100,
                'length'    => 4,
                'fontSize'  => 15,
                'fontttf'   => '4.ttf',
            );
            $img = new \Think\Verify($cfg);
            $img -> entry();
        }
}
