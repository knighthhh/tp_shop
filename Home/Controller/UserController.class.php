<?php

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
     function login(){
        $this -> display();
    }
    
    function register(){
        $user = new \Model\UserModel();
        if(!empty($_POST)){
            
            $info = $user -> create();
          
            if($info){
                  $info['user_hobby'] = implode(',',$info['user_hobby']);
                     $z = $user -> add($info);
                $this -> redirect("Index/index",array(),2,"注册成功");
            }else{
     
              $this -> assign("errorinfo",$user -> getError());
             
            }
        }
        $this -> display(); 
       
       
    }
}
