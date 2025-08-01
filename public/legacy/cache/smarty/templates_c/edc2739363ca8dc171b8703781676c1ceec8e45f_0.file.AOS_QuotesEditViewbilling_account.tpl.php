<?php
/* Smarty version 4.5.3, created on 2025-08-01 16:23:37
  from 'C:\xampp\htdocs\suitecrm\public\legacy\cache\modules\AOW_WorkFlow\AOS_QuotesEditViewbilling_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688ccde9a05af2_78064974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edc2739363ca8dc171b8703781676c1ceec8e45f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\cache\\modules\\AOW_WorkFlow\\AOS_QuotesEditViewbilling_account.tpl',
      1 => 1754058217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688ccde9a05af2_78064974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
?>

<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" class="sqsEnabled" tabindex="1" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['id_name'];?>
" 
	id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['id_name'];?>
" 
	value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account_id']['value'];?>
">
<span class="id-ff multiple selectcrossbtn">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE"),$_smarty_tpl);?>
" class="firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
    "<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['module'];?>
", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['id_name'];?>
","name":"<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
"}}, 
	"single", 
	true
);' >
<?php echo smarty_function_sugar_getimage(array('name'=>"cursor",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
<button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
" tabindex="1" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE"),$_smarty_tpl);?>
"  class="lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL"),$_smarty_tpl);?>
" >
<?php echo smarty_function_sugar_getimage(array('name'=>"cross",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_account']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
<?php }
}
