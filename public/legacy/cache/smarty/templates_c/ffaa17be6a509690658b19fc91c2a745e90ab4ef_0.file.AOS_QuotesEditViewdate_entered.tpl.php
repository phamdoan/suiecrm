<?php
/* Smarty version 4.5.3, created on 2025-08-01 16:11:18
  from 'C:\xampp\htdocs\suitecrm\public\legacy\cache\modules\AOW_WorkFlow\AOS_QuotesEditViewdate_entered.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688ccb0666a574_34122453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffaa17be6a509690658b19fc91c2a745e90ab4ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\cache\\modules\\AOW_WorkFlow\\AOS_QuotesEditViewdate_entered.tpl',
      1 => 1754057478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688ccb0666a574_34122453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),1=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
?>

    
<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn datecalendar">
<input autocomplete="off" type="text" id="aow_actions_param0value1_date" class="datetimecombo_date" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['aow_temp_date']['name']]['value'];?>
" size="11" maxlength="10" title='' tabindex="1" onblur="combo_aow_actions_param0value1.update();" onchange="combo_aow_actions_param0value1.update(); "    >
	<button type="button" id="aow_actions_param0value1_trigger" class="btn calendarstart" onclick="return false;">		
		<span alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"><?php echo smarty_function_sugar_getimage(array('name'=>"calendar"),$_smarty_tpl);?>
 </span>
	</button>
</td>
<td nowrap class="dateTimeComboColumn dateTimeSection">
<div id="aow_actions_param0value1_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="aow_actions_param0value1" name="aow_actions_param[0][value][1]" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['aow_temp_date']['name']]['value'];?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var combo_aow_actions_param0value1 = new Datetimecombo("<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['aow_temp_date']['name']]['value'];?>
", "aow_actions_param0value1", "<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
", "1", '', false, true);
//Render the remaining widget fields
text = combo_aow_actions_param0value1.html('');
document.getElementById('aow_actions_param0value1_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_aow_actions_param0value1.jsscript(''));

addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
',"aow_actions_param0value1_hours", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HOURS'];?>
" ,"aow_actions_param0value1_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "aow_actions_param0value1_minutes", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MINUTES'];?>
" ,"aow_actions_param0value1_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "aow_actions_param0value1_meridiem", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MERIDIEM'];?>
","aow_actions_param0value1_date");

YAHOO.util.Event.onDOMReady(function()
{

	Calendar.setup ({
	onClose : update_aow_actions_param0value1,
	inputField : "aow_actions_param0value1_date",
    form : "",
	ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	button : "aow_actions_param0value1_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
	comboObject: combo_aow_actions_param0value1
	});

	//Call update for first time to round hours and minute values
	combo_aow_actions_param0value1.update(false);

}); 
<?php echo '</script'; ?>
>
<?php }
}
