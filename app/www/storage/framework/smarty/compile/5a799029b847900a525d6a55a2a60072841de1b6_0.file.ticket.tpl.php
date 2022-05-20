<?php
/* Smarty version 3.1.42, created on 2022-01-11 12:49:19
  from '/mnt/app/www/resources/views/material/user/ticket.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dd0c4fcc8cc3_98073581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a799029b847900a525d6a55a2a60072841de1b6' => 
    array (
      0 => '/mnt/app/www/resources/views/material/user/ticket.tpl',
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
function content_61dd0c4fcc8cc3_98073581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">工单</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">
                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>有任何问题请直接右下角的+号提交新问题</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="card-table">
                                <div class="table-responsive table-user">
                                    <?php echo $_smarty_tpl->tpl_vars['render']->value;?>

                                    <table class="table">
                                        <tr>
                                            <!--  <th>ID</th>   -->
                                            <th>发起日期</th>
                                            <th>工单标题</th>
                                            <th>工单状态</th>
                                            <th>操作</th>
                                        </tr>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tickets']->value, 'ticket');
$_smarty_tpl->tpl_vars['ticket']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
$_smarty_tpl->tpl_vars['ticket']->do_else = false;
?>
                                            <tr>
                                                <!--   <td>#<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
</td>  -->
                                                <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value->datetime();?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['ticket']->value->title;?>
</td>
                                                <?php if ($_smarty_tpl->tpl_vars['ticket']->value->status == 1) {?>
                                                    <td>工单服务中</td>
                                                <?php } else { ?>
                                                    <td>工单已结束</td>
                                                <?php }?>
                                                <td>
                                                    <a class="btn btn-brand"
                                                       href="/user/ticket/<?php echo $_smarty_tpl->tpl_vars['ticket']->value->id;?>
/view">查看</a>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                    <?php echo $_smarty_tpl->tpl_vars['render']->value;?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                        <button class="btn btn-block btn-brand waves-attach waves-light" onclick="location.href='/user/ticket/create'">创建新工单</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
