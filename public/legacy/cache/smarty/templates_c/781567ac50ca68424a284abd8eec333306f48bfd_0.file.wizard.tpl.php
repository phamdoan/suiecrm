<?php
/* Smarty version 4.5.3, created on 2025-08-01 16:36:18
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\Users\tpls\wizard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688cd0e28469c7_00462083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '781567ac50ca68424a284abd8eec333306f48bfd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\Users\\tpls\\wizard.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688cd0e28469c7_00462083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_help.php','function'=>'smarty_function_sugar_help',),2=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html <?php echo $_smarty_tpl->tpl_vars['langHeader']->value;?>
>
<head>
    <link rel="SHORTCUT ICON" href="<?php echo $_smarty_tpl->tpl_vars['FAVICON_URL']->value;?>
">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHARSET'];?>
">
    <title><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_TITLE'];?>
</title>
    
        <?php echo '<script'; ?>
 type='text/javascript'>
            function disableReturnSubmission(e) {
                var key = window.event ? window.event.keyCode : e.which;
                return (key != 13);
            }
        <?php echo '</script'; ?>
>
    
    <?php echo $_smarty_tpl->tpl_vars['SUGAR_JS']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['SUGAR_CSS']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>

</head>
<body class="yui-skin-sam">
<div id="main">
<div id="content">
<table style="width:100%;height:450px;" align="center"><tr valign="top"><td align="center">

<form id="UserWizard" name="UserWizard" enctype='multipart/form-data' method="POST" action="index.php" onkeypress="return disableReturnSubmission(event);">
<input type='hidden' name='action' value='SaveUserWizard'/>
<input type='hidden' name='module' value='Users'/>
<span class='error'><?php echo (($tmp = $_smarty_tpl->tpl_vars['error']->value['main'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</span>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Emails/javascript/vars.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_emails.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/User.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>

<div class="dashletPanelMenu wizard user-wizard">

<div id="bootstrap-container" class="bd">

<div id="welcome" class="screen welcome" style="background-image: url('include/images/initial_page_bg.svg');">
    <div class="container-fluid">
        <div class="row">
            <div class="col panel">
                <h1><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_WELCOME_TITLE'];?>
</h1>
                <div class="open-crm-txt"> Open Source CRM For The World </div>
                <div class="wizard-mainlbl">
                <div class="sub-mainlbl">Maintained by </div>
                <div>
                    <img src=include/images/sa_logo.svg style="height:60px;">
                </div>
                </div>
                <div class="wizard-lbl"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_WELCOME_NOSMTP'];?>
</div>
                <div class="wizard-btn">
                    <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_NEXT_BUTTON'];?>
"
               class="button primary" type="button" name="next_tab1" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_NEXT_BUTTON'];?>
  "
               onclick="SugarWizard.changeScreen('personalinfo',false);" id="next_tab_personalinfo" />
                </div>
            </div>
        </div>
    </div>
</div>

<div id="personalinfo" class="screen personal">
    <div class="container-personal">
        <h2 class="header-title">
            <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_PERSONALINFO'];?>

        </h2>
        <div class="row">
            <div class="col mobile-order">
                <div class="left-side"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FIRST_NAME'];?>
:</div>
                <div><input id='first_name' name='first_name' tabindex='1' size='25' maxlength='25' type="text" value="<?php echo $_smarty_tpl->tpl_vars['FIRST_NAME']->value;?>
"></div>
            </div>
            <div class="col">
                <div class="left-side"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADDRESS_STREET'];?>
:</div>
                <div><input name='address_street' tabindex='8' value="<?php echo $_smarty_tpl->tpl_vars['ADDRESS_STREET']->value;?>
"/></div>
            </div>
            <div class="col mobile-order">
                <div class="left-side"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LAST_NAME'];?>
: <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></span></div>
                <div><span><input id='last_name' name='last_name' tabindex='2' size='25' maxlength='25' type="text" value="<?php echo $_smarty_tpl->tpl_vars['LAST_NAME']->value;?>
"></span></div>
            </div>
            <div class="col">
                <div class="left-side"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CITY'];?>
:</span></div>
               <div><span><input name='address_city' tabindex='8' size='15' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['ADDRESS_CITY']->value;?>
'></span></div>
            </div>
            <div class="col mobile-order">
                <div class="left-side"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL'];?>
: <?php if ($_smarty_tpl->tpl_vars['REQUIRED_EMAIL_ADDRESS']->value) {?><span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span><?php }?></div>
                <div><span><input name='email1' tabindex='3' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['EMAIL1']->value;?>
' id='email1' /></span></div>
            </div>
            <div class="col">
                <div class="left-side"> <span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_POSTAL_CODE'];?>
:</span></div>
                <div><span><input name='address_postalcode' tabindex='9' size='10' maxlength='20' value='<?php echo $_smarty_tpl->tpl_vars['ADDRESS_POSTALCODE']->value;?>
'></span></div>
            </div>
            <div class="col mobile-order">
                <div class="left-side"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OFFICE_PHONE'];?>
:</span></div>
                <div><span><input name='phone_work' type="text" tabindex='4' size='20' maxlength='25' value='<?php echo $_smarty_tpl->tpl_vars['PHONE_WORK']->value;?>
'></span></div>
            </div>
            <div class="col">
                <div class="left-side"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_STATE'];?>
:</span></div>
                <div><span><input name='address_state' tabindex='9' size='15' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['ADDRESS_STATE']->value;?>
'></span></div>
            </div>
            <div class="col mobile-order">
                <div class="left-side"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MOBILE_PHONE'];?>
:</span></div>
                <div><span><input name='phone_mobile' type="text" tabindex='6' size='20' maxlength='25' value='<?php echo $_smarty_tpl->tpl_vars['PHONE_MOBILE']->value;?>
'></span></div>
            </div>
            <div class="col">
                <div class="left-side"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_COUNTRY'];?>
:</span></div>
                <div><span><input name='address_country' tabindex='10' size='10' maxlength='20' value='<?php echo $_smarty_tpl->tpl_vars['ADDRESS_COUNTRY']->value;?>
'></span></div>
            </div>
        </div>
    </div>
    <div class="nav-buttons">
        <?php if ($_smarty_tpl->tpl_vars['SKIP_WELCOME']->value) {?>
            <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_BACK'];?>
"
                   onclick="document.location.href='index.php?module=Configurator&action=AdminWizard&page=smtp';" class="button"
                   type="button" name="cancel" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_BACK_BUTTON'];?>
  " id="wizard_cancel"/>&nbsp;
        <?php } else { ?>
            <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_BACK_BUTTON'];?>
"
                   class="button" type="button" name="next_tab1" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_BACK_BUTTON'];?>
  "
                   onclick="SugarWizard.changeScreen('welcome',true);" id="previous_tab_welcome" />&nbsp;
        <?php }?>
        <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_NEXT_BUTTON'];?>
"
               class="button primary" type="button" name="next_tab1" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_NEXT_BUTTON'];?>
  "
               onclick="SugarWizard.changeScreen('locale',false);" id="next_tab_locale" />
    </div>
</div>

<div id="locale" class="screen">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <div class="edit view">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <th width="100%" align="left" scope="row" colspan="4">
                                <h2><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_LOCALE'];?>
</span></h2></th>
                        </tr>
                        <tr>
                            <td align="left" scope="row" colspan="4" class="firstrow"><i><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_LOCALE_DESC'];?>
</i></td>
                        </tr>
                        <tr>
                            <td scope="row" nowrap="nowrap" style="line-height:4.3em;margin-top:0.5em;"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TIMEZONE'];?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_TIMEZONE_TEXT']),$_smarty_tpl);?>
</td>
                            <td colspan="3"><span><select tabindex='14' name='timezone'><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['TIMEZONEOPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['TIMEZONE_CURRENT']->value),$_smarty_tpl);?>
</select></span></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row" nowrap="nowrap"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT'];?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT_TEXT']),$_smarty_tpl);?>
</td>
                            <td width="33%"><span><select tabindex='14' name='dateformat'><?php echo $_smarty_tpl->tpl_vars['DATEOPTIONS']->value;?>
</select></span></td>
                            <td scope="row" nowrap="nowrap"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT'];?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><span><select tabindex='14' name='timeformat'><?php echo $_smarty_tpl->tpl_vars['TIMEOPTIONS']->value;?>
</select></span></td>
                        </tr>
                        <tr>
                            <td colspan="4"><hr /></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row" nowrap="nowrap"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY'];?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><span>
                                    <select tabindex='14' id='currency_select' name='currency' onchange='setSymbolValue(this.selectedIndex);setSigDigits();'><?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;?>
</select>
                                    <input type="hidden" id="symbol" value="">
                                </span></td>
                            <td width="17%" scope="row" nowrap="nowrap" class="mobile-hide"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row" nowrap="nowrap"><span>
                                    <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_SIG_DIGITS'];?>
:
                                </span></td>
                            <td ><span>
                                    <select id='sigDigits' onchange='setSigDigits(this.value);' name='default_currency_significant_digits'><?php echo $_smarty_tpl->tpl_vars['sigDigits']->value;?>
</select>
                                </span></td>
                            <td width="17%" scope="row" nowrap="nowrap"><span>
                                    <i><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_EXAMPLE_NAME_FORMAT'];?>
:</i>
                                </span></td>
                            <td ><span>
                                    <input type="text" disabled id="sigDigitsExample" name="sigDigitsExample">
                                </span></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row" nowrap="nowrap"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP'];?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><span>
                                    <input tabindex='14' name='dec_sep' id='default_decimal_seperator'
                                           type='text' maxlength='1' size='1' value='<?php echo $_smarty_tpl->tpl_vars['DEC_SEP']->value;?>
'
                                           onkeydown='setSigDigits();' onkeyup='setSigDigits();'>
                                </span></td>
                            <td width="17%" scope="row" nowrap="nowrap"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP'];?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP_TEXT']),$_smarty_tpl);?>
</td>
                            <td><input tabindex='14' name='num_grp_sep' id='default_number_grouping_seperator'
                                       type='text' maxlength='1' size='1' value='<?php echo $_smarty_tpl->tpl_vars['NUM_GRP_SEP']->value;?>
'
                                       onkeydown='setSigDigits();' onkeyup='setSigDigits();'></td>
                        </tr>
                        <tr>
                            <td colspan="4"><hr /></td>
                        </tr>
                        <tr>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'SMARTY_LOCALE_NAME_FORMAT_DESC', null, null);?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_NAME_FORMAT_DESC'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <td nowrap="nowrap" scope="row" valign="top"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_NAME_FORMAT'];?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'SMARTY_LOCALE_NAME_FORMAT_DESC')),$_smarty_tpl);?>
</td>
                            <td><span><select id="default_locale_name_format" tabindex='14' name="default_locale_name_format" selected="<?php echo $_smarty_tpl->tpl_vars['default_locale_name_format']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NAMEOPTIONS']->value;?>
</select></span></td>
                        </tr>
                        <tr>
                            <td nowrap="nowrap" scope="row" valign="top"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_LANGUAGE'];?>
:&nbsp;</td>
                            <td><span><select id="language" tabindex='14' name="language"><?php echo $_smarty_tpl->tpl_vars['language']->value;?>
</select></span></td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="nav-buttons">
        <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_BACK_BUTTON'];?>
"
               class="button" type="button" name="next_tab1" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_BACK_BUTTON'];?>
  "
               onclick="SugarWizard.changeScreen('personalinfo',true);" id="previous_tab_personalinfo" />&nbsp;
        <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_NEXT_BUTTON'];?>
"
               class="button primary" type="button" name="next_tab1" value="  <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_NEXT_BUTTON'];?>
  "
        onclick="SugarWizard.changeScreen('finish',false);" id="next_tab_finish" />
    </div>
</div>

<div id="finish" class="screen wizard-finish">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <div class="edit view">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="user-icon">
                        <tr>
                            <th align="left" scope="row" colspan="4"><h2><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH_TITLE'];?>
</h2></th>
                        </tr>
                        <tr>
                            <td scope="row" style="height: auto;">
                                <h3 class="wizard-finish-lbl"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH1'];?>
</h3>
                                <table cellpadding=0 cellspacing=0><input id='whatnext' name='whatnext' type="hidden" value='finish' />
                                    <?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?>
                                        <tr><td><img src=include/images/icon_start_using.svg style="margin-right: 5px;"></td><td><a onclick='document.UserWizard.whatnext.value="finish";document.UserWizard.submit()' href="#" ><b> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH2'];?>
  </b></a> <div class="img-desc"> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH2DESC'];?>
</div></td></tr>
                                        <tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
                                        <tr><td><img src=include/images/icon_import_data.svg style="margin-right: 5px;"></td><td><a onclick='document.UserWizard.whatnext.value="import";document.UserWizard.submit()' href="#" ><b> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH3'];?>
 </b></a>  <div class="img-desc"> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH4'];?>
 </div></td></tr>
                                        <tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
                                        <tr><td><img src=include/images/icon_create_users.svg style="margin-right: 5px;"></td><td><a onclick='document.UserWizard.whatnext.value="users";document.UserWizard.submit()' href="#"  ><b> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH5'];?>
 </b></a> <div class="img-desc"> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH6'];?>
 </div></td></tr>
                                        <tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
                                        <tr><td><img src=include/images/icon_view_and_manage.svg style="margin-right: 5px;"></td><td><a  onclick='document.UserWizard.whatnext.value="settings";document.UserWizard.submit()' href="#" ><b> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH7'];?>
 </b></a> <div class="img-desc"> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH8'];?>
 </div></td></tr>
                                        <tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
                                        <tr><td><img src=include/images/icon_configure.svg style="margin-right: 5px;"></td><td><a onclick='document.UserWizard.whatnext.value="studio";document.UserWizard.submit()' href="#"  ><b> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH9'];?>
 </b></a> <div class="img-desc"> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH10'];?>
 </div></td></tr>
                                        <tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
                                        <tr><td><img src=include/images/icon_visit_site.svg style="margin-right: 5px;"></td><td><a href="https://community.suitecrm.com" target="_blank"><b> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH11'];?>
 </b></a></b> <div class="img-desc"> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH12'];?>
 </div> </td></tr>
                                        <tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
                                    <?php } else { ?>
                                        <tr><td><img src=include/images/icon_visit_site.svg style="margin-right: 5px;"></td><td><a href="https://suitecrm.com" target="_blank"><b> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH11'];?>
 </b></a></b> <div class="img-desc"> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH12'];?>
</div></td></tr>
                                        <tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
                                        <tr><td><img src=include/images/icon_documentation.svg style="margin-right: 5px;"></td><td><a href="https://docs.suitecrm.com/user/" target="_blank"><b> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH14'];?>
 </b></a></b> <div class="img-desc"> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH15'];?>
</div></td></tr>
                                        <tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
                                        <tr><td><img src=include/images/icon_forums.svg style="margin-right: 5px;"></td><td><a href="https://community.suitecrm.com/" target="_blank"><b> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH18'];?>
 </b></a></b> <div class="img-desc"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH19'];?>
</div></td></tr>
                                        <tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr>
                                    <?php }?>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
    <div class="nav-buttons">
        <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_BACK_BUTTON'];?>
"
               class="button" type="button" name="next_tab1" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_BACK_BUTTON'];?>
"
        onclick="SugarWizard.changeScreen('locale',true);" id="previous_tab_locale" />&nbsp;
        <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH_BUTTON'];?>
" class="button primary"
               type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_FINISH_BUTTON'];?>
"/>&nbsp;
    </div>
</div>

</div>
</div>


<?php echo '<script'; ?>
 type='text/javascript'>
<!--
var SugarWizard = new function()
{
    this.currentScreen = 'welcome';

    this.handleKeyStroke = function(e)
    {
        // get the key pressed
        var key;
        if (window.event) {
            key = window.event.keyCode;
        }
        else if(e.which) {
            key = e.which
        }

        switch(key) {
            case 13:
                primaryButton = YAHOO.util.Selector.query('input.primary',SugarWizard.currentScreen,true);
                primaryButton.click();
                break;
        }
    }

    this.changeScreen = function(screen,skipCheck)
    {
        if ( !skipCheck ) {
            clear_all_errors();
            var form = document.getElementById('UserWizard');
            var isError = false;

            switch(this.currentScreen) {
                case 'personalinfo':
                    if ( document.getElementById('last_name').value == '' ) {
                        add_error_style('UserWizard',form.last_name.name,
                                '<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LAST_NAME'];?>
' );
                        isError = true;
                    }
                
                <?php if ($_smarty_tpl->tpl_vars['REQUIRED_EMAIL_ADDRESS']->value) {?>
                
                    if ( document.getElementById('email1').value == '' ) {
                        document.getElementById('email1').focus();
                        add_error_style('UserWizard',form.email1.name,
                                '<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL'];?>
' );
                        isError = true;
                    }
                
                <?php }?>
                
                    break;
            }
            if (isError == true)
                return false;
        }

        document.getElementById(this.currentScreen).style.display = 'none';
        document.getElementById(screen).style.display = 'block';

        this.currentScreen = screen;
    }
}

$(document).ready(function() {
  $('.screen').each(function() {
    $(this).hide();
  });

  
  <?php if ($_smarty_tpl->tpl_vars['SKIP_WELCOME']->value) {?>
  SugarWizard.changeScreen('personalinfo');
  <?php } else { ?>
  SugarWizard.changeScreen('welcome');
  <?php }?>
  
});

document.onkeypress = SugarWizard.handleKeyStroke;

var mail_smtpport = '<?php echo $_smarty_tpl->tpl_vars['MAIL_SMTPPORT']->value;?>
';
var mail_smtpssl = '<?php echo $_smarty_tpl->tpl_vars['MAIL_SMTPSSL']->value;?>
';

EmailMan = {};

function startOutBoundEmailSettingsTest()
{
    var loader = new YAHOO.util.YUILoader({
        require : ["element","sugarwidgets"],
        loadOptional: true,
        skin: { base: 'blank', defaultSkin: '' },
        onSuccess: testOutboundSettings,
        allowRollup: true,
        base: "include/javascript/yui/build/"
    });
    loader.addModule({
        name :"sugarwidgets",
        type : "js",
        fullpath: "include/javascript/sugarwidgets/SugarYUIWidgets.js",
        varName: "YAHOO.SUGAR",
        requires: ["datatable", "dragdrop", "treeview", "tabview"]
    });
    loader.insert();

}

function testOutboundSettings()
{
    var errorMessage = '';
    var isError = false;
    var fromAddress = document.getElementById("outboundtest_from_address").value;
    var errorMessage = '';
    var isError = false;
    var smtpServer = document.getElementById('mail_smtpserver').value;

    var mailsmtpauthreq = document.getElementById('mail_smtpauth_req');
    if(trim(smtpServer) == '' || trim(mail_smtpport) == '')
    {
        isError = true;
        errorMessage += "<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS'];?>
" + "<br/>";
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
", errorMessage, 'alert');
        return false;
    }

    if(document.getElementById('mail_smtpuser') && trim(document.getElementById('mail_smtpuser').value) == '')
    {
        isError = true;
        errorMessage += "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_ACCOUNTS_SMTPUSER'];?>
" + "<br/>";
    }

    if(document.getElementById('mail_smtppass') && trim(document.getElementById('mail_smtppass').value) == '')
    {
        isError = true;
        errorMessage += "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_ACCOUNTS_SMTPPASS'];?>
" + "<br/>";
    }

    if(isError) {
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
", errorMessage, 'alert');
        return false;
    }

    testOutboundSettingsDialog();
}

function sendTestEmail()
{
    var fromAddress = document.getElementById("outboundtest_from_address").value;

    if (trim(fromAddress) == "")
    {
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
", "{$APP.LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR}", 'alert');
        return;
    }
    else if (!isValidEmail(fromAddress)) {
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_INVALID_REQUIRED_FIELDS'];?>
", "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR'];?>
", 'alert');
        return;
    }

    //Hide the email address window and show a message notifying the user that the test email is being sent.
    EmailMan.testOutboundDialog.hide();
    overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_PERFORMING_TASK'];?>
", "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_ONE_MOMENT'];?>
", 'alert');

    var callbackOutboundTest = {
        success	: function(o) {
            hideOverlay();
            overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];?>
", "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_NOTIFICATION_SENT'];?>
", 'alert');
        }
    };
    var smtpServer = document.getElementById('mail_smtpserver').value;
    if(document.getElementById('mail_smtpuser') && document.getElementById('mail_smtppass'))
    {
        var postDataString = 'mail_sendtype=SMTP&mail_smtpserver=' + smtpServer + "&mail_smtpport=" + mail_smtpport + "&mail_smtpssl=" + mail_smtpssl + "&mail_smtpauth_req=true&mail_smtpuser=" + trim(document.getElementById('mail_smtpuser').value) + "&mail_smtppass=" + trim(document.getElementById('mail_smtppass').value) + "&outboundtest_from_address=" + fromAddress;
    }
    else
    {
        var postDataString = 'mail_sendtype=SMTP&mail_smtpserver=' + smtpServer + "&mail_smtpport=" + mail_smtpport + "&mail_smtpssl=" + mail_smtpssl + "&outboundtest_from_address=" + fromAddress;
    }
    YAHOO.util.Connect.asyncRequest("POST", "index.php?action=testOutboundEmail&module=EmailMan&to_pdf=true&sugar_body_only=true", callbackOutboundTest, postDataString);
}
function testOutboundSettingsDialog() {
    // lazy load dialogue
    if(!EmailMan.testOutboundDialog) {
        EmailMan.testOutboundDialog = new YAHOO.widget.Dialog("testOutboundDialog", {
            modal:true,
            visible:true,
            fixedcenter:true,
            constraintoviewport: true,
            width	: 600,
            shadow	: false
        });
        EmailMan.testOutboundDialog.setHeader("<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];?>
");
        YAHOO.util.Dom.removeClass("testOutboundDialog", "yui-hidden");
    } // end lazy load

    EmailMan.testOutboundDialog.render();
    EmailMan.testOutboundDialog.show();
} // fn

function overlay(reqtitle, body, type) {
    var config = { };
    config.type = type;
    config.title = reqtitle;
    config.msg = body;
    YAHOO.SUGAR.MessageBox.show(config);
}

function hideOverlay() {
    YAHOO.SUGAR.MessageBox.hide();
}
-->
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>


<?php echo '<script'; ?>
 type="text/javascript" language="Javascript">
    
    <?php echo $_smarty_tpl->tpl_vars['getNameJs']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['getNumberJs']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['currencySymbolJs']->value;?>

    setSymbolValue(document.getElementById('currency_select').selectedIndex);
    setSigDigits();

    <?php echo $_smarty_tpl->tpl_vars['confirmReassignJs']->value;?>

<?php echo '</script'; ?>
>
</form>

<div id="testOutboundDialog" class="yui-hidden">
    <div id="testOutbound">
        <form>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
                <tr>
                    <td scope="row">
                        <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR'];?>

                        <span class="required">
						<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>

					</span>
                    </td>
                    <td >
                        <input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="">
                    </td>
                </tr>
                <tr>
                    <td scope="row" colspan="2">
                        <input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SEND'];?>
   " onclick="javascript:sendTestEmail();">&nbsp;
                        <input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
   " onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php }
}
