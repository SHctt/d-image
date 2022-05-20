<?php
/* Smarty version 3.1.42, created on 2022-01-11 12:49:01
  from '/mnt/app/www/resources/views/material/user/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dd0c3dd6da64_56551941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '689281b5edf5ebe436f16d73e1c74fdb0ee0aca0' => 
    array (
      0 => '/mnt/app/www/resources/views/material/user/profile.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_61dd0c3dd6da64_56551941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">账户信息</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-inner">
                                    <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_kill'] === true) {?>
                                        <div class="cardbtn-edit">
                                            <div class="card-heading">我的帐号</div>
                                            <div class="account-flex">
                                                <span>注销账号</span>
                                                <a class="btn btn-flat" href="kill">
                                                    <span class="icon">not_interested</span>&nbsp;
                                                </a>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <p>昵称：<code><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</code></p>
                                    <p>邮箱：<code><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</code></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-doubleinner">
                                    <p class="card-heading">当前生效中的套餐</p>
                                </div>
                                <div class="card-table">
                                    <div class="table-responsive table-user">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                              	<th>#ID</th>
                                              	<th>套餐名称</th>
                                              	<th>已用天数</th>
                                              	<th>下次流量重置时间</th>
                                              	<th>套餐过期时间</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                          	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['boughts']->value, 'bought');
$_smarty_tpl->tpl_vars['bought']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bought']->value) {
$_smarty_tpl->tpl_vars['bought']->do_else = false;
?>
                                          		<?php if ($_smarty_tpl->tpl_vars['bought']->value->valid()) {?>
                                                <tr>
                                                    <td>#<?php echo $_smarty_tpl->tpl_vars['bought']->value->id;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['bought']->value->shop()->name;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['bought']->value->used_days();?>
 天</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['bought']->value->reset_time();?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['bought']->value->exp_time();?>
</td>
                                                </tr>
                                          		<?php }?>
                                          	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-doubleinner">
                                    <p class="card-heading">最近五分钟使用IP</p>
                                    <p>请确认都为自己的IP，如有异常请及时修改连接密码。</p>
                                </div>
                                <div class="card-table">
                                    <div class="table-responsive table-user">
                                        <table class="table table-fixed">
                                            <tr>
                                                <th>IP</th>
                                                <th>归属地</th>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userip']->value, 'location', false, 'single');
$_smarty_tpl->tpl_vars['location']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['single']->value => $_smarty_tpl->tpl_vars['location']->value) {
$_smarty_tpl->tpl_vars['location']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['single']->value;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-doubleinner">
                                    <p class="card-heading">最近十次登录IP</p>
                                    <p>请确认都为自己的IP，如有异常请及时修改密码。</p>
                                </div>
                                <div class="card-table">
                                    <div class="table-responsive table-user">
                                        <table class="table table-fixed">
                                            <tr>
                                                <th>IP</th>
                                                <th>时间</th>
                                                <th>归属</th>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userloginip']->value, 'login');
$_smarty_tpl->tpl_vars['login']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['login']->value) {
$_smarty_tpl->tpl_vars['login']->do_else = false;
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['login']->value->ip;?>
</td>
                                                    <td><?php echo date('Y-m-d h:i:s',$_smarty_tpl->tpl_vars['login']->value->datetime);?>
</td>
                                                    <td><?php echo App\Utils\Tools::getIpInfo($_smarty_tpl->tpl_vars['login']->value->ip);?>
</td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
