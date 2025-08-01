<?php
/* Smarty version 4.5.3, created on 2025-08-01 15:49:12
  from 'C:\xampp\htdocs\suitecrm\public\legacy\cache\modules\AOW_WorkFlow\AOS_QuotesEditViewkt_danhgia_c.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688cc5d8de3ce7_62768301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbb29f1645a49184e036fef85353b60d3b2c3806' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\cache\\modules\\AOW_WorkFlow\\AOS_QuotesEditViewkt_danhgia_c.tpl',
      1 => 1754056152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688cc5d8de3ce7_62768301 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['fields']->value['kt_danhgia_c']['value']))) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['kt_danhgia_c']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['kt_danhgia_c']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['kt_danhgia_c']['name'];?>
'
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['kt_danhgia_c']['name'];?>
' size='30'
    maxlength='255'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='Đánh giá kỹ thuật'  tabindex='1'      >
<?php }
}
