<?php
/* Smarty version 4.5.3, created on 2025-07-31 21:43:27
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\ACLRoles\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688bc75f4dc152_09419584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9274c097e254d99849f06a356c2f621cd70ea62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\ACLRoles\\EditView.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688bc75f4dc152_09419584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),));
?>


<?php echo '<script'; ?>
>

function set_focus(){
	document.getElementById('name').focus();
}

<?php echo '</script'; ?>
>
<div class="role-manager-create">
<?php echo $_smarty_tpl->tpl_vars['TITLE']->value;?>

<form method='POST' name='EditView' action='index.php'>
<TABLE width='100%' border='0' cellpadding=0 cellspacing = 0 class="actionsContainer">
<tbody>
<tr>
<td>
<input type='hidden' name='record' value='<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='isduplicate' value='<?php echo $_smarty_tpl->tpl_vars['ISDUPLICATE']->value;?>
'>
<input type='hidden' name='return_record' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['record'];?>
'>
<input type='hidden' name='return_action' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['action'];?>
'>
<input type='hidden' name='return_module' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['module'];?>
'> &nbsp;	
<?php echo smarty_function_sugar_action_menu(array('id'=>"roleEditActions",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['ACTION_MENU']->value,'flat'=>true),$_smarty_tpl);?>

</td>
</tr>
</tbody>
</table>
<TABLE width='100%' class="edit view"  border='0' cellpadding=0 cellspacing = 0  >
<TR>
<td scope="row" align='right'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAME'];?>
:<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td><td >
<input id='name' name='name' type='text' value='<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['name'];?>
'>
</td><td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
<td scope="row" align='right'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DESCRIPTION'];?>
:</td>
<td ><textarea name='description' cols="80" rows="8"><?php echo $_smarty_tpl->tpl_vars['ROLE']->value['description'];?>
</textarea></td>
</tr>
</table>

</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
addToValidate('EditView', 'name', 'varchar', true, '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAME'];?>
');
<?php echo '</script'; ?>
><?php }
}
