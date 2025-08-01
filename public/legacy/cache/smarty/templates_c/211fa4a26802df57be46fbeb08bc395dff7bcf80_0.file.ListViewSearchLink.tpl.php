<?php
/* Smarty version 4.5.3, created on 2025-07-31 21:54:34
  from 'C:\xampp\htdocs\suitecrm\public\legacy\include\ListView\ListViewSearchLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688bc9fac68c50_66484964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '211fa4a26802df57be46fbeb08bc395dff7bcf80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\ListView\\ListViewSearchLink.tpl',
      1 => 1738223968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688bc9fac68c50_66484964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>

<?php if (!$_smarty_tpl->tpl_vars['currentModule']->value && (isset($_smarty_tpl->tpl_vars['savedSearchData']->value))) {?>
    <?php $_smarty_tpl->_assignInScope('currentModule', $_smarty_tpl->tpl_vars['savedSearchData']->value['module']);
} elseif (!$_smarty_tpl->tpl_vars['currentModule']->value && (isset($_smarty_tpl->tpl_vars['pageData']->value['bean']))) {?>
    <?php $_smarty_tpl->_assignInScope('currentModule', $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleName']);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['savedSearchData']->value)) && $_smarty_tpl->tpl_vars['savedSearchData']->value['hasOptions']) {?>
    <ul class="action-link action-link-<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
 clickMenu selectActions fancymenu show listViewLinkButton listViewLinkButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
">
        <li class="sugar_action_button">
            <a href="javascript:void(0)" class="parent-dropdown-handler" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVED_FILTER_SHORTCUT'];?>
" onclick="return false;">
                <label class="selected-actions-label"><span class="glyphicon glyphicon-bookmark"></span><span class="selected-actions-label-text"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVED_FILTER_SHORTCUT'];?>
</span></label>
            </a>
            <ul class="subnav">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['savedSearchData']->value['options'], 'option', false, 'id');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                    <li><a href="javascript:void(0)" class="parent-dropdown-action-handler"<?php if ($_smarty_tpl->tpl_vars['id']->value != $_smarty_tpl->tpl_vars['savedSearchData']->value['selected']) {?> onclick="SUGAR.savedViews.shortcutDropdown('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
');"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value;
if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['savedSearchData']->value['selected']) {?>&nbsp;&#10004<?php }?></a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <span><span class="suitepicon suitepicon-action-caret"></span></span>
        </li>
    </ul>
<?php }?>

<ul class="clickMenu selectmenu searchLink SugarActionMenu listViewLinkButton listViewLinkButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
">
    <li class="sugar_action_button">
        <a href="javascript:void(0)" class="glyphicon glyphicon-filter parent-dropdown-handler" onclick="listViewSearchIcon.toggleSearchDialog('latest'); $('#searchDialog .nav-tabs .active').removeClass('active'); $('#searchDialog .nav-tabs li').first().addClass('active'); $('#searchDialog').modal('toggle');" title='<?php echo smarty_function_sugar_translate(array('label'=>"LBL_FILTER_HEADER_TITLE"),$_smarty_tpl);?>
'></a>
    </li>
</ul>
<ul class="searchAppliedAlert hidden clickMenu selectmenu searchAppliedAlertLink SugarActionMenu listViewLinkButton listViewLinkButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
">
    <li class="sugar_action_button desktopOnly">
        <a href="javascript:void(0)" class="glyphicon glyphicon-list-alt clearSearchIcon parent-dropdown-handler" onclick="SUGAR.savedViews.shortcutDropdown('_none', '<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
');"></a>
        <a href="javascript:void(0)" class="glyphicon glyphicon-remove" onclick="SUGAR.savedViews.shortcutDropdown('_none', '<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
');">&Cross;</a>
    </li>
    <li class="sugar_action_button mobileOnly">
        <a href="javascript:void(0)" class="glyphicon glyphicon-list-alt clearSearchIcon parent-dropdown-handler" onclick=""></a>
        <a href="javascript:void(0)" class="glyphicon glyphicon-remove" onclick="SUGAR.savedViews.shortcutDropdown('_none', '<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
');"></a>
    </li>
</ul><?php }
}
