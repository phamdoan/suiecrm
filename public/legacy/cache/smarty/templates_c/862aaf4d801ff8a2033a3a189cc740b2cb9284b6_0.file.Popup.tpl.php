<?php
/* Smarty version 4.5.3, created on 2025-08-01 16:26:31
  from 'C:\xampp\htdocs\suitecrm\public\legacy\cache\themes\suite8\modules\Users\Popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688cce97340485_44869455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '862aaf4d801ff8a2033a3a189cc740b2cb9284b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\cache\\themes\\suite8\\modules\\Users\\Popup.tpl',
      1 => 1754058391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688cce97340485_44869455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),4=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),5=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_evalcolumn_old.php','function'=>'smarty_function_sugar_evalcolumn_old',),6=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_currency_format.php','function'=>'smarty_function_sugar_currency_format',),7=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.multienum_to_array.php','function'=>'smarty_function_multienum_to_array',),8=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_field.php','function'=>'smarty_function_sugar_field',),));
?>

<?php $_smarty_tpl->_assignInScope('alt_start', $_smarty_tpl->tpl_vars['navStrings']->value['start']);
$_smarty_tpl->_assignInScope('alt_next', $_smarty_tpl->tpl_vars['navStrings']->value['next']);
$_smarty_tpl->_assignInScope('alt_prev', $_smarty_tpl->tpl_vars['navStrings']->value['previous']);
$_smarty_tpl->_assignInScope('alt_end', $_smarty_tpl->tpl_vars['navStrings']->value['end']);?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/sugar_3.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/popup_helper.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['STYLE_JS']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
	<?php echo $_smarty_tpl->tpl_vars['ASSOCIATED_JAVASCRIPT_DATA']->value;?>



function clearAll() {
   for(i=0; i < document.popup_query_form.length; i++) {
       if(/select/i.test(document.popup_query_form.elements[i].type)) {
          for(x=0; x < document.popup_query_form.elements[i].options.length; x++) {
             document.popup_query_form.elements[i].options[x].removeAttribute('selected');
          }
       }
   }
}

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['SEARCH_FORM_HEADER']->value;?>

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="edit view">
<tr>
<td>
<form action="index.php" method="post" name="popup_query_form" id="popup_query_form">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td>
<?php echo $_smarty_tpl->tpl_vars['searchForm']->value;?>

</td></tr>
<tr>
<td>
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" />
<input type="hidden" name="action" value="Popup" />
<input type="hidden" name="query" value="true" />
<input type="hidden" name="metadata" value="<?php echo $_smarty_tpl->tpl_vars['metadata']->value;?>
" />
<input type="hidden" name="func_name" value="" />
<input type="hidden" name="request_data" value="<?php echo $_smarty_tpl->tpl_vars['request_data']->value;?>
" />
<input type="hidden" name="populate_parent" value="false" />
<input type="hidden" name="hide_clear_button" value="true" />
<input type="hidden" name="record_id" value="" />
<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>

<input type="submit" name="button" class="button" id="search_form_submit"
	title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
"
	value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_LABEL'];?>
" />
<input type="reset" onclick="SUGAR.searchForm.clear_form(this.form); return false;" class="button" id="search_form_clear"
	title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
"
	value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
"/>
</td>
<td align='right'></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<?php echo $_smarty_tpl->tpl_vars['jsLang']->value;?>

<?php echo $_smarty_tpl->tpl_vars['LIST_HEADER']->value;?>

<?php if ($_smarty_tpl->tpl_vars['should_process']->value) {?>
	<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
		<thead>
		<tr height='20'>
			<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>
				<th nowrap="nowrap" width="43px" class="selectCol td_alt"></th>
				<th class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</th>
			<?php }?>
			<?php echo smarty_function_counter(array('start'=>0,'name'=>"colCounter",'print'=>false,'assign'=>"colCounter"),$_smarty_tpl);?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayColumns']->value, 'params', false, 'colHeader');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['colHeader']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['colCounter']->value == '0') {?><th scope='col'  data-toggle="true">
				<?php } else { ?><th scope='col'  data-hide="phone,tablet"><?php }?>
					<div style='white-space: normal; width:100%; text-align:<?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['align'] ?? null)===null||$tmp==='' ? 'left' ?? null : $tmp);?>
'>
	                <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['sortable'] ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['orderBy'];
echo mb_strtolower((string) (($tmp = $_smarty_tpl->tpl_vars['params']->value['orderBy'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value ?? null : $tmp), 'UTF-8');?>
" onclick='sListView.save_checks(0, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
");' class='listViewThLinkS1 sortsvg'><?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['params']->value['label'],'module'=>$_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir']),$_smarty_tpl);?>
&nbsp;&nbsp;
						<?php if (mb_strtolower((string) (($tmp = $_smarty_tpl->tpl_vars['params']->value['orderBy'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value ?? null : $tmp), 'UTF-8') == $_smarty_tpl->tpl_vars['pageData']->value['ordering']['orderBy']) {?>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['ordering']['sortOrder'] == 'ASC') {?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "arrowAlt", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SORT_DESC'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<?php echo smarty_function_sugar_getimage(array('name'=>"sort_descend"),$_smarty_tpl);?>

							<?php } else { ?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "arrowAlt", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SORT_ASC'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "imageName", null);?>arrow_up.<?php echo $_smarty_tpl->tpl_vars['arrowExt']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
								<?php echo smarty_function_sugar_getimage(array('name'=>"sort_ascend"),$_smarty_tpl);?>

							<?php }?>
						<?php } else { ?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "arrowAlt", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SORT'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "imageName", null);?>arrow.<?php echo $_smarty_tpl->tpl_vars['arrowExt']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php echo smarty_function_sugar_getimage(array('name'=>"sort"),$_smarty_tpl);?>

						<?php }?>
					<?php } else { ?>
						<?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['params']->value['label'],'module'=>$_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir']),$_smarty_tpl);?>

					<?php }?>
					</div>
				</th>
				<?php echo smarty_function_counter(array('name'=>"colCounter"),$_smarty_tpl);?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if (!empty($_smarty_tpl->tpl_vars['quickViewLinks']->value)) {?>
			<th class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</th>
			<?php }?>
		</tr>
		<tr class='pagination'  role='presentation'>
			<td colspan='<?php echo $_smarty_tpl->tpl_vars['colCount']->value+1;?>
' align='right'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%'>
					<tr>
						<td align='left' >
							<div>
								<?php echo smarty_function_sugar_action_menu(array('id'=>$_smarty_tpl->tpl_vars['link_select_id']->value,'params'=>$_smarty_tpl->tpl_vars['selectLink']->value),$_smarty_tpl);?>

							</div>
						</td>
						<td align='right' nowrap='nowrap'>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['startPage']) {?>
								<button type='button' id='popupViewStartButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['start'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(0, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
");'<?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['startPage'];?>
"' <?php }?>>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_first"),$_smarty_tpl);?>

								</button>
							<?php } else { ?>
								<button type='button' id='popupViewStartButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['start'];?>
' class='button' disabled>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_first"),$_smarty_tpl);?>

								</button>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['prevPage']) {?>
								<button type='button' id='popupViewPrevButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['previous'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(<?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['prev'];?>
, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['prevPage'];?>
"'<?php }?>>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_previous"),$_smarty_tpl);?>

								</button>
							<?php } else { ?>
								<button type='button' id='popupViewPrevButton' class='button' disabled title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['previous'];?>
'>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_previous"),$_smarty_tpl);?>

								</button>
							<?php }?>
							<span class='pageNumbers'>(<?php if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'] == 0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['current']+1;
}?> - <?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'];?>
 <?php echo $_smarty_tpl->tpl_vars['navStrings']->value['of'];?>
 <?php if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['totalCounted']) {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'];
} else {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'];
if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'] != $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total']) {?>+<?php }
}?>)</span>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['nextPage']) {?>
								<button type='button' id='popupViewNextButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['next'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(<?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['next'];?>
, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['nextPage'];?>
"'<?php }?>>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_next"),$_smarty_tpl);?>

								</button>
							<?php } else { ?>
								<button type='button' id='popupViewNextButton' class='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['next'];?>
' disabled>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_next"),$_smarty_tpl);?>

								</button>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['endPage'] && $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'] != $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage']) {?>
								<button type='button' id='popupViewEndButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['end'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks("end", "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['endPage'];?>
"'<?php }?>>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_last"),$_smarty_tpl);?>

								</button>
							<?php } elseif (!$_smarty_tpl->tpl_vars['pageData']->value['offsets']['totalCounted'] || $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'] == $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage']) {?>
								<button type='button' id='popupViewEndButton' class='button' disabled title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['end'];?>
'>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_last"),$_smarty_tpl);?>

								</button>
							<?php }?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'rowData', false, 'id', 'rowIteration', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['rowData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['rowData']->value) {
$_smarty_tpl->tpl_vars['rowData']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rowIteration']->value['iteration']++;
?>
			<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_rowIteration']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_rowIteration']->value['iteration'] : null))) {?>
				<?php $_smarty_tpl->_assignInScope('_rowColor', $_smarty_tpl->tpl_vars['rowColor']->value[0]);?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('_rowColor', $_smarty_tpl->tpl_vars['rowColor']->value[1]);?>
			<?php }?>
			<tr height='20' class='<?php echo $_smarty_tpl->tpl_vars['_rowColor']->value;?>
S1'>
				<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>
				<td width='1%' nowrap='nowrap'>
						<input onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
'>
				</td>
				<td width='1%' nowrap='nowrap'>
						<?php echo (($tmp = $_smarty_tpl->tpl_vars['pageData']->value['additionalDetails'][$_smarty_tpl->tpl_vars['id']->value] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

				</td>
				<?php }?>
				<?php echo smarty_function_counter(array('start'=>0,'name'=>"colCounter",'print'=>false,'assign'=>"colCounter"),$_smarty_tpl);?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displayColumns']->value, 'params', false, 'col');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
					<td scope='row' align='<?php echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['align'] ?? null)===null||$tmp==='' ? 'left' ?? null : $tmp);?>
' valign=top class='<?php echo $_smarty_tpl->tpl_vars['_rowColor']->value;?>
S1' bgcolor='<?php echo $_smarty_tpl->tpl_vars['_bgColor']->value;?>
'>
						<?php if ($_smarty_tpl->tpl_vars['params']->value['link'] && !$_smarty_tpl->tpl_vars['params']->value['customCode']) {?>

							<<?php echo (($tmp = $_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['params']->value['ACLTag']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value]['MAIN'] ?? null : $tmp);?>
 href='javascript:void(0)' onclick="send_back('<?php if ($_smarty_tpl->tpl_vars['params']->value['dynamic_module']) {
echo $_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['params']->value['dynamic_module']];
} else {
echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['module'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'] ?? null : $tmp);
}?>','<?php echo (($tmp = $_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['params']->value['id']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['rowData']->value['ID'] ?? null : $tmp);?>
');"><?php echo $_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['col']->value];?>
</<?php echo (($tmp = $_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['params']->value['ACLTag']] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value]['MAIN'] ?? null : $tmp);?>
>

						<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['customCode']) {?>
							<?php echo smarty_function_sugar_evalcolumn_old(array('var'=>$_smarty_tpl->tpl_vars['params']->value['customCode'],'rowData'=>$_smarty_tpl->tpl_vars['rowData']->value),$_smarty_tpl);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['currency_format']) {?>
							<?php echo smarty_function_sugar_currency_format(array('var'=>$_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['col']->value],'round'=>(($tmp = $_smarty_tpl->tpl_vars['params']->value['currency_format']['round'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'decimals'=>(($tmp = $_smarty_tpl->tpl_vars['params']->value['currency_format']['decimals'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'symbol'=>(($tmp = $_smarty_tpl->tpl_vars['params']->value['currency_format']['symbol'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'convert'=>(($tmp = $_smarty_tpl->tpl_vars['params']->value['currency_format']['convert'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'currency_symbol'=>(($tmp = $_smarty_tpl->tpl_vars['params']->value['currency_format']['currency_symbol'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)),$_smarty_tpl);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'bool') {?>
								<input type='checkbox' disabled=disabled class='checkbox'
								<?php if (!empty($_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['col']->value])) {?>
									checked=checked
								<?php }?>
								/>
                        <?php } elseif ($_smarty_tpl->tpl_vars['params']->value['type'] == 'multienum') {?>
								<?php echo smarty_function_counter(array('name'=>"oCount",'assign'=>"oCount",'start'=>0),$_smarty_tpl);?>

								<?php echo smarty_function_multienum_to_array(array('string'=>$_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['col']->value],'assign'=>"vals"),$_smarty_tpl);?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vals']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
									<?php echo smarty_function_counter(array('name'=>"oCount"),$_smarty_tpl);?>

									<?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['params']->value['options'],'select'=>$_smarty_tpl->tpl_vars['item']->value),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['oCount']->value != count($_smarty_tpl->tpl_vars['vals']->value)) {?>,<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php } else { ?>
                            <?php echo smarty_function_sugar_field(array('parentFieldArray'=>$_smarty_tpl->tpl_vars['rowData']->value,'vardef'=>$_smarty_tpl->tpl_vars['params']->value,'displayType'=>'ListView','field'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

						<?php }?>
					</td>
					<?php echo smarty_function_counter(array('name'=>"colCounter"),$_smarty_tpl);?>

				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
		<tfoot>
		<tr class='pagination' role='presentation'>
			<td colspan='<?php echo $_smarty_tpl->tpl_vars['colCount']->value+1;?>
' align='right'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%'>
					<tr>
						<td align='left' >
							<div>
								<?php echo smarty_function_sugar_action_menu(array('id'=>$_smarty_tpl->tpl_vars['link_select_id']->value,'params'=>$_smarty_tpl->tpl_vars['selectLink']->value),$_smarty_tpl);?>

							</div>
						</td>
						<td  align='right' nowrap='nowrap'>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['startPage']) {?>
								<button type='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['start'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(0, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
");'<?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['startPage'];?>
"' <?php }?>>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_first"),$_smarty_tpl);?>

								</button>
							<?php } else { ?>
								<button type='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['start'];?>
' class='button' disabled>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_first"),$_smarty_tpl);?>

								</button>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['prevPage']) {?>
								<button type='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['previous'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(<?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['prev'];?>
, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['prevPage'];?>
"'<?php }?>>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_previous"),$_smarty_tpl);?>

								</button>
							<?php } else { ?>
								<button type='button' class='button' disabled title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['previous'];?>
'>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_previous"),$_smarty_tpl);?>

								</button>
							<?php }?>
							<span class='pageNumbers'>(<?php if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'] == 0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['current']+1;
}?> - <?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'];?>
 <?php echo $_smarty_tpl->tpl_vars['navStrings']->value['of'];?>
 <?php if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['totalCounted']) {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'];
} else {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'];
if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'] != $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total']) {?>+<?php }
}?>)</span>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['nextPage']) {?>
								<button type='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['next'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(<?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['next'];?>
, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['nextPage'];?>
"'<?php }?>>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_next"),$_smarty_tpl);?>

								</button>
							<?php } else { ?>
								<button type='button' class='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['next'];?>
' disabled>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_next"),$_smarty_tpl);?>

								</button>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['endPage'] && $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'] != $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage']) {?>
								<button type='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['end'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(<?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['end'];?>
, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href="<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['endPage'];?>
"'<?php }?>>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_last"),$_smarty_tpl);?>

								</button>
							<?php } elseif (!$_smarty_tpl->tpl_vars['pageData']->value['offsets']['totalCounted'] || $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'] == $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage']) {?>
								<button type='button' class='button' disabled title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['end'];?>
'>
									<?php echo smarty_function_sugar_getimage(array('name'=>"paginate_last"),$_smarty_tpl);?>

								</button>
							<?php }?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		</tfoot>
	</table>
	<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>
	<?php echo '<script'; ?>
>
	function lvg_dtails(id){return SUGAR.util.getAdditionalDetails( '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
',id, 'adspan_'+id);}
	<?php echo '</script'; ?>
>
	<?php }
} else { ?>
	<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_POPULATE_ONLY'];?>

<?php }?>

<?php }
}
