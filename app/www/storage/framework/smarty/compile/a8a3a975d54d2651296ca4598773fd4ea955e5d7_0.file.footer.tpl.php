<?php
/* Smarty version 3.1.42, created on 2022-01-11 11:29:54
  from '/mnt/app/www/resources/views/material/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dcf9b2b40fc0_28451431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8a3a975d54d2651296ca4598773fd4ea955e5d7' => 
    array (
      0 => '/mnt/app/www/resources/views/material/footer.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analytics.tpl' => 1,
    'file:live_chat.tpl' => 1,
  ),
),false)) {
function content_61dcf9b2b40fc0_28451431 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="https://cdn.staticfile.org/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php if ((isset($_smarty_tpl->tpl_vars['geetest_html']->value))) {?>
    <?php echo '<script'; ?>
 src="//static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="/theme/material/js/base.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/theme/material/js/project.min.js"><?php echo '</script'; ?>
>

</body>
<?php $_smarty_tpl->_subTemplateRender('file:live_chat.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</html><?php }
}
