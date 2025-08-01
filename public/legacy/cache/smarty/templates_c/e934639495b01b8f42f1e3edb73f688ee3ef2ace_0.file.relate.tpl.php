<?php
/* Smarty version 4.5.3, created on 2025-08-01 15:34:41
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\DynamicFields\templates\Fields\Forms\relate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688cc2718cb2c2_33683833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e934639495b01b8f42f1e3edb73f688ee3ef2ace' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\DynamicFields\\templates\\Fields\\Forms\\relate.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl' => 1,
    'file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl' => 1,
  ),
),false)) {
function content_688cc2718cb2c2_33683833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
$_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_MODULE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value == 0) {?>
		<?php echo smarty_function_html_options(array('name'=>"ext2",'id'=>"ext2",'selected'=>$_smarty_tpl->tpl_vars['vardef']->value['module'],'options'=>$_smarty_tpl->tpl_vars['modules']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<input type='hidden' name='ext2' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['module'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['module'];?>

	<?php }?>
	<input type='hidden' name='ext3' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['id_name'];?>
'>
	</td>
</tr>
<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
