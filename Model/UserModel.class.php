<?php

namespace Model;
use Think\Model;

class UserModel extends Model{
    protected $patchValidate = true;
    
    protected $_validate = array(
        array('username','require','用户名必须填写'),
        array('username','','改用户名已经被占用',0,'unique'),
    );
}

