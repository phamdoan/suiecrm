<?php
/* Smarty version 4.5.3, created on 2025-07-31 21:43:54
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\ACLRoles\EditViewBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688bc77aa703a6_40776786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a0117b00831d3a5927bfcbe291e6e3f3e911224' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\ACLRoles\\EditViewBody.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ACLRoles/EditAllBody.tpl' => 1,
  ),
),false)) {
function content_688bc77aa703a6_40776786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ACLRoles/ACLRoles.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EDIT_VIEW_DIRECTIONS'];?>
</b>
<table width='100%'><tr>
<td width= '100%'  valign='top'>
<div id='category_data'>
<?php $_smarty_tpl->_subTemplateRender('file:modules/ACLRoles/EditAllBody.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
</td></tr>
</table>


<?php }
}
