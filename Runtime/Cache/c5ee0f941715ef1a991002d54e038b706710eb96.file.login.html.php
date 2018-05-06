<?php /* Smarty version Smarty-3.1.6, created on 2017-09-02 16:22:13
         compiled from "/phpstudy/www/myshop/Admin/View/Manager/login.html" */ ?>
<?php /*%%SmartyHeaderCode:111272887759aa6a3567b391-73617955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5ee0f941715ef1a991002d54e038b706710eb96' => 
    array (
      0 => '/phpstudy/www/myshop/Admin/View/Manager/login.html',
      1 => 1504065987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111272887759aa6a3567b391-73617955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59aa6a357223b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa6a357223b')) {function content_59aa6a357223b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />

        <title>用户登录</title>

        <link href="<?php echo @ADMIN_CSS;?>
User_Login.css" type="text/css" rel="stylesheet" />
    </head><body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
                    <form action="<?php echo @__SELF__;?>
" method="post">
                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">
                                    <ul>
                                        <li class="user_main_text">用户名： </li>
                                        <li class="user_main_input">
                                            <input class="TxtUserNameCssClass" id="admin_user" maxlength="20" name="admin_user"> </li></ul>
                                    <ul>
                                        <li class="user_main_text">密&nbsp;&nbsp;&nbsp;&nbsp;码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtPasswordCssClass" id="admin_psd" name="admin_psd" type="password">
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="user_main_text">验证码： </li>
                                        <li class="user_main_input">
                                            <input class="TxtValidateCodeCssClass" id="captcha" name="captcha" type="text">
                                            <img src="<?php echo @__CONTROLLER__;?>
/verifyImg"  
                                                 onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()"
                                                 alt="" />
                                             <div style="font-size:5px;color:red;margin:-5px 0px"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                                        </li>
                                        
                                    </ul>
                                   
                                </div>
                            </li>
                            <li class="user_main_r">

                                <input style="border: medium none; background: url('<?php echo @ADMIN_IMG;?>
user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit">
                            </li>
                             
                        </ul>
                      
                    </form>
		
                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
       <div id="ValidationSummary1" style="display: none; color: red;"></div>
	<div>admin 123456 </div>
    </body>
</html>
<?php }} ?>