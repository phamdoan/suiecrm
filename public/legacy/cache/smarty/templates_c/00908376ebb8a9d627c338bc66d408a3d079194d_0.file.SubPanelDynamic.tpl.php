<?php
/* Smarty version 4.5.3, created on 2025-07-31 21:43:22
  from 'C:\xampp\htdocs\suitecrm\public\legacy\themes\suite8\include\SubPanel\tpls\SubPanelDynamic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688bc75a640022_08895161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00908376ebb8a9d627c338bc66d408a3d079194d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\themes\\suite8\\include\\SubPanel\\tpls\\SubPanelDynamic.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688bc75a640022_08895161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),));
?>
<table cellpadding="0" cellspacing="0" border="0" class="list view table-responsive subpanel-table" data-empty="<?php echo $_smarty_tpl->tpl_vars['APP']->value['MSG_LIST_VIEW_NO_RESULTS_BASIC'];?>
" data-breakpoints='{ "xs": 754, "sm": 750, "md": 768, "lg": 992}'>
    <thead>
        <tr class="footable-header">
            <?php echo smarty_function_counter(array('start'=>0,'name'=>"colCounter",'print'=>false,'assign'=>"colCounter"),$_smarty_tpl);?>

            <th data-type="html"><!-- extra th for the plus button -->&nbsp;</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HEADER_CELLS']->value, 'header', false, 'colHeader');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['colHeader']->value => $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['colCounter']->value <= 1) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "breakpoints", null);?>1<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['colCounter']->value >= 2 && $_smarty_tpl->tpl_vars['colCounter']->value < 5) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "breakpoints", null);?>xs sm<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['colCounter']->value >= 5 && $_smarty_tpl->tpl_vars['colCounter']->value) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "breakpoints", null);?>xs sm md<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php }?>
                <th data-breakpoints="<?php if ($_smarty_tpl->tpl_vars['breakpoints']->value != 1) {
echo $_smarty_tpl->tpl_vars['breakpoints']->value;
}?>" data-type="html"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</th>
                <?php echo smarty_function_counter(array('name'=>"colCounter",'print'=>false),$_smarty_tpl);?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <th data-type="html"><!-- extra th for the button --></th>
        </tr>        
        <tr id="<?php echo $_smarty_tpl->tpl_vars['SUBPANEL_ID']->value;?>
_search" class="pagination" style="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_SPS']->value;?>
">
            <td align="right" colspan="20">
                <?php echo $_smarty_tpl->tpl_vars['SUBPANEL_SEARCH']->value;?>

            </td>
        </tr>
    </thead>
    <tbody>
    <?php echo smarty_function_counter(array('start'=>0,'name'=>"rowCounter",'print'=>false,'assign'=>"rowCounter"),$_smarty_tpl);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ROWS']->value, 'row', false, 'rowHeader');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rowHeader']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['rowCounter']->value%2 == 0) {?>
                        <?php $_smarty_tpl->_assignInScope('rowClass', "oddListRowS1");?>
        <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('rowClass', "evenListRowS1");?>
        <?php }?>
        <tr class="<?php echo $_smarty_tpl->tpl_vars['rowClass']->value;?>
" >
            <td>&nbsp;</td>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'cell', false, 'colHeader');
$_smarty_tpl->tpl_vars['cell']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['colHeader']->value => $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['cell']->do_else = false;
?>
                <td><?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
</td>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <td>
                <?php if ((isset($_smarty_tpl->tpl_vars['ROWS_BUTTONS']->value[$_smarty_tpl->tpl_vars['rowHeader']->value])) && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['ROWS_BUTTONS']->value[$_smarty_tpl->tpl_vars['rowHeader']->value] )) > 0) {?>
                    <?php echo smarty_function_sugar_action_menu(array('id'=>((string)$_smarty_tpl->tpl_vars['rowHeader']->value),'buttons'=>$_smarty_tpl->tpl_vars['ROWS_BUTTONS']->value[$_smarty_tpl->tpl_vars['rowHeader']->value],'class'=>'','flat'=>false),$_smarty_tpl);?>

                <?php }?>
            </td>
        </tr>
        <?php echo smarty_function_counter(array('name'=>"rowCounter",'print'=>false),$_smarty_tpl);?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
        <tfoot>
                <?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

    </tfoot>
</table><?php }
}
