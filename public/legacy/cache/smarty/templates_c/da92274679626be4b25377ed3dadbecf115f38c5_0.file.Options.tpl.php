<?php
/* Smarty version 4.5.3, created on 2025-07-31 16:11:11
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\SugarFeed\Dashlets\SugarFeedDashlet\Options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688b797f581581_28963015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da92274679626be4b25377ed3dadbecf115f38c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\SugarFeed\\Dashlets\\SugarFeedDashlet\\Options.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688b797f581581_28963015 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


<div>
<form name='configure_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' action="index.php" method="post">
<input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='action' value='ConfigureDashlet'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='configure' value='true'>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="edit view" align="center">
<tr>
    <td scope='row'><?php echo $_smarty_tpl->tpl_vars['titleLBL']->value;?>
</td>
    <td>
    	<input type="text" class="text" name="title" size='20' maxlength='80' value='<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
'>
    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['isRefreshable']->value) {?>
<tr>
    <td scope='row'>
        <?php echo $_smarty_tpl->tpl_vars['autoRefresh']->value;?>

    </td>
    <td>
        <select name='autoRefresh'>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['autoRefreshOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['autoRefreshSelect']->value),$_smarty_tpl);?>

        </select>
    </td>
</tr>
<?php }?>
<tr>
    <td scope='row'><?php echo $_smarty_tpl->tpl_vars['rowsLBL']->value;?>
</td>
    <td>
    	<input type="text" class="text" name="rows" size='3' value='<?php echo $_smarty_tpl->tpl_vars['rows']->value;?>
'>
    </td>
</tr>
<tr>
    <td scope='row'><?php echo $_smarty_tpl->tpl_vars['categoriesLBL']->value;?>
</td>
    <td>
        <select name='categories[]' multiple=true size=6 onchange='getMultiple(this);' id='categories_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
    	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['categories']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedCategories']->value),$_smarty_tpl);?>

    	</select>
    </td>
</tr>
<tr>
  <td align="right" colspan="2">
    <div id='externalApiDiv'>
    </div>
  </td>
</tr>
<tr>
    <td align="right" colspan="2">
        <input type='button' class='button' value='<?php echo $_smarty_tpl->tpl_vars['saveLBL']->value;?>
' id='save_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' onclick='promptAuthentication(); if(SUGAR.dashlets.postForm("configure_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
", SUGAR.mySugar.uncoverPage)) this.form.submit();'>
        <input type='submit' class='button' value='<?php echo $_smarty_tpl->tpl_vars['clearLBL']->value;?>
' onclick='SUGAR.searchForm.clear_form(this.form,["title","autoRefresh","rows"]);return false;'>
   	</td>
</tr>
</table>
<?php echo '<script'; ?>
 language='javascript'>
var externalApiList = <?php echo $_smarty_tpl->tpl_vars['externalApiList']->value;?>
;
var authenticatedExternalApiList = new Array();



function getMultiple(ob){
    var showAll = false;
    var selected = new Array();
    for (var i = 0; i < ob.options.length; i++){
        if (ob.options[ i ].selected){
            selected.push(ob.options[ i ].value);
            if(ob.options[ i ].value == 'ALL'){
                showAll = true;
            }
        }
    }
    var buttonHtml = '';
    if(showAll){
        for (var j = 0; j < externalApiList.length; j++) 
        {
            if(!authenticatedExternalApiList[externalApiList[j]])
            {
	            buttonHtml += '<div id="' + externalApiList[j] + '_div" style="visibility:;"><a href="#" onclick="window.open(\'index.php?module=EAPM&callbackFunction=hideExternalDiv&closeWhenDone=1&action=QuickSave&application='+externalApiList[j]+'\',\'EAPM\');"><?php echo $_smarty_tpl->tpl_vars['authenticateLBL']->value;?>
 '+externalApiList[j]+'</a></div>';
            }
        }
    }else{
        for (var i = 0; i < selected.length; i++){
            for (var j = 0; j < externalApiList.length; j++)
            {
                if(selected[i] == externalApiList[j] && !authenticatedExternalApiList[externalApiList[j]]) 
                {
                    buttonHtml += '<div id="' + externalApiList[j] + '_div" style="visibility:";><a href="#" onclick="window.open(\'index.php?module=EAPM&callbackFunction=hideExternalDiv&closeWhenDone=1&action=QuickSave&application='+externalApiList[j]+'\',\'EAPM\');"><?php echo $_smarty_tpl->tpl_vars['authenticateLBL']->value;?>
 '+externalApiList[j]+'</a></div>';
                }
            }
        }
    }
    document.getElementById('externalApiDiv').innerHTML = buttonHtml;
}

function initExternalOptions(){
    var ob = document.getElementById('categories_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
    getMultiple(ob);
}

function hideExternalDiv(id)
{
    //Hide the div for the external API link, set the authenticated Array list to true
    if(YAHOO.util.Dom.get(id + '_div'))
    {
		YAHOO.util.Dom.get(id + '_div').style.visibility = 'hidden';
		authenticatedExternalApiList[id] = true;
	}
}

function promptAuthentication()
{
    //This is how we know that not all external API links were authenticated

     categoryElement = YAHOO.util.Dom.get('categories_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');  
 
    //Only check for prompt warning if the 'ALL' option was selected
    if(categoryElement.selectedIndex != -1 && categoryElement.options[categoryElement.selectedIndex].value != 'ALL')
    {
       return;
    }
    
	if(authenticatedExternalApiList.length < externalApiList.length)
	{

		if(!confirm("<?php echo $_smarty_tpl->tpl_vars['autenticationPendingLBL']->value;?>
")) 
		
		{
		    //Cancel form submission here
		    e = event ? event : window.event;
		    if (e.preventDefault) e.preventDefault();
		    e.returnValue = false;
		    e.cancelBubble = true;
		    if (e.stopPropagation) e.stopPropagation();
		}
	}
}

YAHOO.util.Event.onDOMReady(initExternalOptions);
<?php echo '</script'; ?>
>

</form>
</div><?php }
}
