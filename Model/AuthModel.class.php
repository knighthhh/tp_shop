<?php

namespace Model;
use Think\Model;

class AuthModel extends Model{
    function saveData($four){
            $newid = $this ->add($four);
            if($four['auth_pid']==0){
                $path = $newid;
            }else{
                $pinfo = $this -> find($four['auth_pid']);
                $p_path = $pinfo['auth_path'];
                $path = $p_path."-".$newid;
            }
            
            $level = substr_count($path,'-');
            $sql = "update sw_auth set auth_path = '$path',auth_level = '$level' where auth_id='$newid'";
            return $this ->execute($sql);
        
//        下面是我写的方法
//        if($authinfo['auth_pid']==0){
//            $authinfo['auth_level'] = 0;
//        }else{
//             $authinfo['auth_level'] = 1;
//        }
//      
//       $newid = $this -> add($authinfo);
//       $authinfo = $this -> find($newid);
//       if($authinfo['auth_level']==0){
//           $authinfo['auth_path'] = $newid;
//       }else{
//           $authinfo['auth_path'] = $authinfo['auth_pid']."-".$newid;
//       }
//      return $this ->save($authinfo); 
    }
}

