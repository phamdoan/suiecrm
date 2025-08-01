<?php
/* Smarty version 4.5.3, created on 2025-08-01 15:34:01
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\DynamicFields\templates\Fields\Forms\html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688cc249c2bb83_30267085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1df99d16d57d5fe54854be107c8a96d7032b846' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\DynamicFields\\templates\\Fields\\Forms\\html.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl' => 1,
    'file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl' => 1,
  ),
),false)) {
function content_688cc249c2bb83_30267085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>


<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<tr>
    <td class="mbLBL"><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_HTML_CONTENT"),$_smarty_tpl);?>
:</td>
    <td>
    <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
        <textarea name='htmlarea' id='htmlarea' cols=50 rows=10><?php echo $_smarty_tpl->tpl_vars['HTML_EDITOR']->value;?>
</textarea>
        <input type='hidden' name='ext4' id='ext4' value='<?php echo $_smarty_tpl->tpl_vars['cf']->value['ext4'];?>
'/>
    <?php } else { ?>
        <textarea name='htmlarea' id='htmlarea' cols=50 rows=10 disabled><?php echo $_smarty_tpl->tpl_vars['HTML_EDITOR']->value;?>
</textarea>
        <input type='hidden' name='htmlarea' value='<?php echo $_smarty_tpl->tpl_vars['HTML_EDITOR']->value;?>
'/>
    <?php }?>
        <br>
    </td>
</tr>
<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" language="Javascript">
SUGAR.ajaxLoad = true;
<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
    setTimeout("tinyMCE.execCommand('mceAddControl', false, 'htmlarea');", 500);  
	ModuleBuilder.tabPanel.get("activeTab").closeEvent.subscribe(function(){tinyMCE.execCommand('mceRemoveControl', false, 'htmlarea');});
	setTimeout("document.forms.popup_form.required.value = false;YAHOO.util.Dom.getAncestorByTagName(document.forms.popup_form.required, 'tr').style.display='none';", 500);
<?php }?>

document.popup_form.presave = function(){
    var tiny = tinyMCE.getInstanceById('htmlarea');
    if ( (null != tiny) || ("undefined" != typeof(tiny)) ) {
         document.getElementById('ext4').value = tiny.getContent();
    } else {
         document.getElementById('ext4').value = document.getElementById('htmlarea').value;
    }
    document.getElementById('ext4').style.display = '';
};
<?php echo '</script'; ?>
>
<?php }
}
