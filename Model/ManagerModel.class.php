<?php

namespace Model;
use Think\Model;

class ManagerModel extends Model{
    function checkNamePwd($name,$pwd){
        $res = $this -> where("mg_name = '$name'") -> find();
        if($res){
            if($res['mg_pwd'] == $pwd){
                 return $res;
            }
        }
        return null;
    }
}
