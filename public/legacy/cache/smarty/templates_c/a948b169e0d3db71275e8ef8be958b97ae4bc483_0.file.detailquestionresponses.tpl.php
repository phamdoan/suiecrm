<?php
/* Smarty version 4.5.3, created on 2025-07-31 15:32:40
  from 'C:\xampp\htdocs\suitecrm\public\legacy\modules\SurveyResponses\tpls\detailquestionresponses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688b7078398c78_10542439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a948b169e0d3db71275e8ef8be958b97ae4bc483' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\modules\\SurveyResponses\\tpls\\detailquestionresponses.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688b7078398c78_10542439 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <table id="questionResponseTable" class="table table-bordered">
        <tr>
            <th></th>
            <th>
                <?php if (!empty($_smarty_tpl->tpl_vars['MOD']->value['LBL_QUESTION'])) {
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_QUESTION'];
}?>
            </th>
            <th>
                <?php if (!empty($_smarty_tpl->tpl_vars['MOD']->value['LBL_RESPONSE'])) {
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RESPONSE'];
}?>
            </th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questionResponses']->value, 'questionResponse');
$_smarty_tpl->tpl_vars['questionResponse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['questionResponse']->value) {
$_smarty_tpl->tpl_vars['questionResponse']->do_else = false;
?>
            <tr>
                <td>Q<?php echo $_smarty_tpl->tpl_vars['questionResponse']->value['sort_order']+1;?>
</td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['questionResponse']->value['questionName'];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['questionResponse']->value['answer'];?>

                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php }
}
