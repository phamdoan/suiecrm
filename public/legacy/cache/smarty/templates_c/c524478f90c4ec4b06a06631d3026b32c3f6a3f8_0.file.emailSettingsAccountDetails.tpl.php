<?php
/* Smarty version 4.5.3, created on 2025-07-31 16:11:55
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\Emails\templates\emailSettingsAccountDetails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688b79ab0ea7f5_45001784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c524478f90c4ec4b06a06631d3026b32c3f6a3f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\Emails\\templates\\emailSettingsAccountDetails.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688b79ab0ea7f5_45001784 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['rollover']->value;?>

<table border="0" cellspacing="0" cellpadding="0">
	<tr>
	   <td colspan="2" >
			<table cellpadding="4" cellspacing="0" border="0"  class="view">
    		<tr>
					<th colspan="4" align="left" colspan="4" scope="row" style="padding-bottom: 5px;">
					<h4><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS'];?>
</h4>
					</th>
			</tr>
			<tr>
                <td colspan="4" scope="row" ><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_ACCOUNTS_SUBTITLE'];?>
</td>
            </tr>
            <tr><td>&nbsp;</td></tr>            
			<tr>
					<td><div id="inboundAccountsTable" class="yui-skin-sam"></div></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td> <input title="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ADD_INBOUND_ACCOUNT'];?>
"
	                        type='button' 
	                        class="button"
	                        onClick='SUGAR.email2.accounts.showEditInboundAccountDialogue();'
	                        name="button" id="addButton" value="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ADD_INBOUND_ACCOUNT'];?>
">
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			</table>    
     </td>
    </tr>                
	<tr>
	<td colspan="2">
			<table border="0" cellspacing="0" cellpadding="0"  class="view">
			    <tr>
					<th colspan="4" align="left" colspan="4" scope="row" style="padding-bottom: 5px;">
					<h4><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS'];?>
</h4>
					</th>
				</tr>
				<tr><td colspan="2"  style="text-align:left;" scope="row"><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE'];?>
</td></tr>	
				<tr>
				    <td>&nbsp;</td></tr>
			 	<tr>
					<td valign="top" NOWRAP>
						<div>
        					<table>
                			    <tr>
                				    <td><div id="outboundAccountsTable" class="yui-skin-sam"></div></td>
                				</tr>
                				<tr><td>&nbsp;</td></tr>
                			    <tr>
                				    <td style="padding-bottom: 5px">
                					   <input id="outbound_email_add_button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_FOLDERS_ADD'];?>
" type='button' 
                					   	class="button" onClick='SUGAR.email2.accounts.showAddSmtp();' name="button" value="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ADD_OUTBOUND_ACCOUNT'];?>
">
                					</td>
                				</tr>
                				
                            </table>
                       </div>     
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<div id="testSettingsDiv"></div><?php }
}
