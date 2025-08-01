<?php
/* Smarty version 4.5.3, created on 2025-08-01 15:49:37
  from 'C:\xampp\htdocs\suitecrm\public\legacy\cache\modules\AOW_WorkFlow\AOS_QuotesDetailViewstage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688cc5f1251453_32607685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '867311f9b879981d6ad9f4062f5065b1e9aa0d2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\cache\\modules\\AOW_WorkFlow\\AOS_QuotesDetailViewstage.tpl',
      1 => 1754056177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688cc5f1251453_32607685 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['stage']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['stage']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['stage']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['stage']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['stage']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['stage']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['stage']['options'][$_smarty_tpl->tpl_vars['fields']->value['stage']['value']];?>

<?php }
}
}
