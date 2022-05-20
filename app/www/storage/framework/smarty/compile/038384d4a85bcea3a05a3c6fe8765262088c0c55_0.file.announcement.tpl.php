<?php
/* Smarty version 3.1.42, created on 2022-01-11 12:49:59
  from '/mnt/app/www/resources/views/material/user/announcement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dd0c77624451_06448273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '038384d4a85bcea3a05a3c6fe8765262088c0c55' => 
    array (
      0 => '/mnt/app/www/resources/views/material/user/announcement.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_61dd0c77624451_06448273 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">站点公告</h1>
        </div>
    </div>
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="ui-card-wrap">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-main">
                            <div class="card-inner margin-bottom-no">
                                <p class="card-heading">公告</p>
                                <div class="card-table">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th>ID</th>
                                                <th>日期</th>
                                                <th>内容</th>
                                            </tr>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anns']->value, 'ann');
$_smarty_tpl->tpl_vars['ann']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ann']->value) {
$_smarty_tpl->tpl_vars['ann']->do_else = false;
?>
                                                <tr>
                                                    <td>#<?php echo $_smarty_tpl->tpl_vars['ann']->value->id;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ann']->value->date;?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['ann']->value->content;?>
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
                    <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </section>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
