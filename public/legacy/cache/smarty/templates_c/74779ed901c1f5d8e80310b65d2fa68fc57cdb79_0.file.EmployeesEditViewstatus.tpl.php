<?php
/* Smarty version 4.5.3, created on 2025-07-31 21:54:25
  from 'C:\xampp\htdocs\suitecrm\public\legacy\cache\modules\AOW_WorkFlow\EmployeesEditViewstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688bc9f1cacdf6_37960205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74779ed901c1f5d8e80310b65d2fa68fc57cdb79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\cache\\modules\\AOW_WorkFlow\\EmployeesEditViewstatus.tpl',
      1 => 1753991665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688bc9f1cacdf6_37960205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


    <select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
            id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
"
            title=''  tabindex="1"              
            >

        <?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['status']['value']))) {?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['value']),$_smarty_tpl);?>

        <?php } else { ?>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['default']),$_smarty_tpl);?>

        <?php }?>
    </select>


<?php }
}
