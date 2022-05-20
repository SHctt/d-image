<?php
/* Smarty version 3.1.42, created on 2022-01-11 11:35:12
  from '/mnt/app/www/resources/views/material/user/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dcfaf059e787_40432882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9441dd465582dd88c486e9584d5a636347208827' => 
    array (
      0 => '/mnt/app/www/resources/views/material/user/footer.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analytics.tpl' => 1,
  ),
),false)) {
function content_61dcfaf059e787_40432882 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php echo '<script'; ?>
 src="https://cdn.staticfile.org/clipboard.js/2.0.6/clipboard.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.staticfile.org/jquery-validate/1.19.2/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>console.table([['数据库查询', '执行时间'], ['<?php echo count($_smarty_tpl->tpl_vars['queryLog']->value);?>
 次', '<?php echo $_smarty_tpl->tpl_vars['optTime']->value;?>
 ms']])<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
