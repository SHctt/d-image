<?php
/* Smarty version 3.1.42, created on 2022-01-11 11:29:51
  from '/mnt/app/www/resources/views/material/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dcf9af49cca7_89010549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39e838f17d2018b430abec561c6ead7a0ee88030' => 
    array (
      0 => '/mnt/app/www/resources/views/material/index.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:live_chat.tpl' => 1,
  ),
),false)) {
function content_61dcf9af49cca7_89010549 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value['appName'];?>
</title>
    <link rel="stylesheet" href="/assets/css/index.min.css">
</head>
<body>
<div class="container">
    <div class="copy-container center-xy">
        <div class="logo">
            <img src="/images/uim-logo-round.png">
        </div>
        <h><?php echo $_smarty_tpl->tpl_vars['config']->value['appName'];?>
</h>
        <br>
        <br>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->isLogin) {?>
        <p>账户 <?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
 的使用状态</p>
        <br>
        <table>
            <tr>
                <th>账户等级</th>
                <th>当前等级到期时间</th>
                <th>已用流量</th>
                <th>剩余流量</th>
            </tr>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->class != 0) {?>
                <th>VIP<?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
</th>
                <?php } else { ?>
                <th>免费</th>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->class_expire != "1989-06-04 00:05:00") {?>
                <th><?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
</th>
                <?php } else { ?>
                <th>不过期</th>
                <?php }?>
                <th><?php echo $_smarty_tpl->tpl_vars['user']->value->usedTraffic();?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
</th>
            </tr>
        </table>
        <br>
        <ul>
            <li><button class="btn white"><a href="/user">用户中心</a></button></li>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->is_admin) {?>
            <li><button class="btn white"><a href="/admin">管理后台</a></button></li>
            <?php }?>
            <li><button class="btn white"><a href="/user/logout">退出登录</a></button></li>
        </ul>
        <?php } else { ?>
            <ul>
                <li><button class="btn white"><a href="/auth/login">登录</a></button></li>
                <li><button class="btn white"><a href="/auth/register">注册</a></button></li>
            </ul>
        <?php }?>
    </div>
</div>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:live_chat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html><?php }
}
