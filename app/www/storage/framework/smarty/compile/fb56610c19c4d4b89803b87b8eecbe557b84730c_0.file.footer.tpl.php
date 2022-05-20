<?php
/* Smarty version 3.1.42, created on 2022-01-11 11:35:42
  from '/mnt/app/www/resources/views/material/admin/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dcfb0ea62032_03491516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb56610c19c4d4b89803b87b8eecbe557b84730c' => 
    array (
      0 => '/mnt/app/www/resources/views/material/admin/footer.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analytics.tpl' => 1,
  ),
),false)) {
function content_61dcfb0ea62032_03491516 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="ui-footer">
    <div class="container">
        &copy;<?php echo date("Y");?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['appName'];?>
 | Powered by <a href="/staff">SSPANEL</a>
        <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_analytics_code'] === true) {
$_smarty_tpl->_subTemplateRender('file:analytics.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    </div>
</footer>

<!-- js -->
<?php echo '<script'; ?>
 src="https://cdn.staticfile.org/jquery-validate/1.19.3/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.staticfile.org/datatables/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.staticfile.org/datatables/1.10.19/js/dataTables.material.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/material/js/base.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/material/js/project.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
