<?php
/* Smarty version 4.5.3, created on 2025-08-01 15:23:19
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\AOS_Quotes\templates\showPopupWithOutTemplates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688cbfc735a866_13502370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d9394b523816ac06f546c69c95149bfee29730' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\AOS_Quotes\\templates\\showPopupWithOutTemplates.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688cbfc735a866_13502370 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  function showPopup(task) {
    alert('<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_TEMPLATE'];?>
');
  }
<?php echo '</script'; ?>
><?php }
}
