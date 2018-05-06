<?php

namespace Model;
use Think\Model;

class RoleModel extends Model{
    function saveAuth($role_id,$auth_id){
        $authids = implode(',',$auth_id);
        $authinfo = D('auth') -> select($authids);
        foreach($authinfo as $k => $v){
            if(!empty($v['auth_c']) && !empty($v['auth_a'])){
                $s.= $v['auth_c']."-".$v['auth_a'].",";
            }
        }
        $s = rtrim($s,',');
        $sql = "update sw_role set role_auth_ids='$authids', role_auth_ac='$s' where role_id = '$role_id'";
        return $this -> execute($sql);
    }
}