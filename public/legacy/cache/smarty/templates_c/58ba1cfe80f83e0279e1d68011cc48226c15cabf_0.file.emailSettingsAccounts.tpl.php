<?php
/* Smarty version 4.5.3, created on 2025-07-31 16:11:55
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\Emails\templates\emailSettingsAccounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688b79ab0923b5_29777228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58ba1cfe80f83e0279e1d68011cc48226c15cabf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\Emails\\templates\\emailSettingsAccounts.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Emails/templates/emailSettingsAccountDetails.tpl' => 1,
  ),
),false)) {
function content_688b79ab0923b5_29777228 (Smarty_Internal_Template $_smarty_tpl) {
?><table cellpadding="4" cellspacing="0" border="0" width="100%" class="view">
	<tr>
		<td NOWRAP>
			<?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsAccountDetails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</td>
	</tr>
    	<tr>
                                	<td align="right">
                                	   <input type="button" class="button" style="margin-left:5px;" value="   <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_DONE_BUTTON_LABEL'];?>
   " onclick="javascript:SUGAR.email2.settings.saveOptionsGeneral(true);">
                                    </td>
                            	</tr>
	

</table>
<?php }
}
