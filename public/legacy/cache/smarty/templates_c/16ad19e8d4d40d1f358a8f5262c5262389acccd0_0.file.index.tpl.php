<?php
/* Smarty version 4.5.3, created on 2025-07-31 16:07:02
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\Administration\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688b7886005d87_59888706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16ad19e8d4d40d1f358a8f5262c5262389acccd0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\Administration\\index.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688b7886005d87_59888706 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="dashletPanelMenu wizard">
<div class="bd">

		<div class="screen admin-panel">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ADMIN_GROUP_HEADER']->value, 'val1', false, 'j');
$_smarty_tpl->tpl_vars['val1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['j']->value => $_smarty_tpl->tpl_vars['val1']->value) {
$_smarty_tpl->tpl_vars['val1']->do_else = false;
?>

   <?php if ((isset($_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][1]))) {?>
   <p><?php echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][0];
echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][1];?>

   <table class="other view">

   <?php } else { ?>
   <p><?php echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][0];
echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][2];?>

   <table class="other view">
   <?php }?>

    <?php $_smarty_tpl->_assignInScope('i', 0);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VALUES_3_TAB']->value[$_smarty_tpl->tpl_vars['j']->value], 'admin_option', false, 'link_idx');
$_smarty_tpl->tpl_vars['admin_option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['link_idx']->value => $_smarty_tpl->tpl_vars['admin_option']->value) {
$_smarty_tpl->tpl_vars['admin_option']->do_else = false;
?>
        <tr>
            <?php if ((isset($_smarty_tpl->tpl_vars['COLNUM']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value]))) {?>
                <td width="20%" scope="row">
                    <span class="suitepicon suitepicon-admin-<?php echo $_smarty_tpl->tpl_vars['ICONS']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
"></span>
                    <a id='<?php echo $_smarty_tpl->tpl_vars['ID_TAB']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' href='<?php echo $_smarty_tpl->tpl_vars['ITEM_URL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' class="tabDetailViewDL2Link"><?php echo $_smarty_tpl->tpl_vars['ITEM_HEADER_LABEL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
</a>
                </td>
                <td width="30%"><?php echo $_smarty_tpl->tpl_vars['ITEM_DESCRIPTION']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
</td>
            <?php } else { ?>
                <td width="20%" scope="row">&nbsp;</td>
                <td width="30%">&nbsp;</td>
            <?php }?>
        </tr>
    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</table>
<p/>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
</div>

</div>


<?php }
}
