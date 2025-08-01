<?php
/* Smarty version 4.5.3, created on 2025-08-01 16:29:29
  from 'C:\xampp\htdocs\suitecrm\public\legacy\cache\modules\AOW_WorkFlow\AOS_QuotesEditViewstage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688ccf49201695_20302444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '460622b714b491a4079bca4d61de8dc83955d628' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\cache\\modules\\AOW_WorkFlow\\AOS_QuotesEditViewstage.tpl',
      1 => 1754058569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688ccf49201695_20302444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


    <select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['stage']['name'];?>
"
            id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['stage']['name'];?>
"
            title=''  tabindex="1"              
            >

        <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['stage']['value']))) {?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['stage']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['stage']['value']),$_smarty_tpl);?>

        <?php } else { ?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['stage']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['stage']['default']),$_smarty_tpl);?>

        <?php }?>
    </select>


<?php }
}
