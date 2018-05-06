<?php /* Smarty version Smarty-3.1.6, created on 2017-09-02 16:22:47
         compiled from "/phpstudy/www/myshop/Admin/View/Goods/showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:11083037859aa6a57411bb6-96507947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7339c75e5723d50c3c60891b60eafd8a925f5b65' => 
    array (
      0 => '/phpstudy/www/myshop/Admin/View/Goods/showlist.html',
      1 => 1485921360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11083037859aa6a57411bb6-96507947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59aa6a5751dcb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aa6a5751dcb')) {function content_59aa6a5751dcb($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/phpstudy/www/myshop/ThinkPHP/Library/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo @ADMIN_CSS;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/tianjia">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        
       
        <div class="div_search">
            <span>
                <form action="<?php echo @__CONTROLLER__;?>
/sel" method="POST">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="apple" >苹果apple</option>
                         <option value="nokia">诺基亚nokia</option>
                         <option value="htc">htc</option>
                          <option value="">全部</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>创建时间</td>
                        <td align="center" colspan="2">操作</td>
                    </tr>
                    
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                   
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
---<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
</td>
                        <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_number'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_price'];?>
</td>
                        <td><img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_big_img'];?>
" height="60" width="60"></td>
                        <td><img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_small_img'];?>
" height="40" width="40"></td>
                         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_brand_id'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['goods_create_time'],"%Y-%m-%d %T");?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/upd/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">修改</a></td>
                        <td><a href="#" onclick="del<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
()">删除</a></td>
                            <script>
                                function del<?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
(){
                                   var res = confirm("你确定删除吗");
                                   if(res){
                                      var sql = "delete from sw_goods where goods_id = <?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"
                                      location.href="<?php echo @__CONTROLLER__;?>
/del/goods_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
";
                                   }else{
                                       
                                   }
                                }
                            </script>
                    </tr>
                   <?php } ?>
                    
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>