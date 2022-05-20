<?php
/* Smarty version 3.1.42, created on 2022-01-11 11:35:48
  from '/mnt/app/www/resources/views/material/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.42',
  'unifunc' => 'content_61dcfb14e8eaf5_91788462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0e05892eb16a3f47c9fda88de19e554e5f69f83' => 
    array (
      0 => '/mnt/app/www/resources/views/material/table/js_1.tpl',
      1 => 1640286888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61dcfb14e8eaf5_91788462 (Smarty_Internal_Template $_smarty_tpl) {
?>function modify_table_visible(id, key) {
if(document.getElementById(id).checked)
{
table_1.columns( '.' + key ).visible( true );
localStorage.setItem(window.location.href + '-haschecked-' + id, true);
}
else
{
table_1.columns( '.' + key ).visible( false );
localStorage.setItem(window.location.href + '-haschecked-' + id, false);
}
}
<?php }
}
