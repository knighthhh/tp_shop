<?php /* Smarty version Smarty-3.1.6, created on 2017-09-02 16:22:37
         compiled from "/phpstudy/www/myshop/Admin/View/Index/left.html" */ ?>
<?php /*%%SmartyHeaderCode:1317342359aa6a4db9f885-08238868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f74990e26564d04cc3d184ae1d224dbb04118bd' => 
    array (
      0 => '/phpstudy/www/myshop/Admin/View/Index/left.html',
      1 => 1486000214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1317342359aa6a4db9f885-08238868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authInfoA' => 0,
    'v' => 0,
    'authInfoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59aa6a4dcc397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa6a4dcc397')) {function content_59aa6a4dcc397($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS;?>
admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 
               background=<?php echo @ADMIN_IMG;?>
menu_bg.jpg border=0>
               <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td height=10></td></tr>
                    </table>
                
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['authInfoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                   
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=<?php echo @ADMIN_IMG;?>
menu_bt.jpg><a 
                                    class=menuparent onclick=expand(<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
) 
                                    href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</a></td></tr>
                        <tr height=4>
                            <td></td></tr>
                    </table>
                   
                    
               
              
                    <table id="child<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                 <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['authInfoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                
                <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_a'];?>
" 
                                   target=right><?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
</a></td>
                        </tr>
                
                         <tr height=4>
                            <td></td>
                        </tr>
                        <?php }?>
                <?php } ?>
                    </table>   
                
            <?php } ?>
                <td width=1 bgcolor=#d1e6f7></td>
            </tr>
            
            
        </table>
    </body>
</html><?php }} ?>