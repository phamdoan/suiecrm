<?php
/* Smarty version 4.5.3, created on 2025-07-31 16:12:42
  from 'C:\xampp\htdocs\suitecrm\public\legacy\include\SugarFields\Fields\Image\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688b79dace97e1_19756314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03005da9e0ee03b54b9e2348240e12802c114c1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\SugarFields\\Fields\\Image\\DetailView.tpl',
      1 => 1738223969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688b79dace97e1_19756314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\Smarty\\plugins\\function.sugarvar.php','function'=>'smarty_function_sugarvar',),));
?>
{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
*}
<span class="sugar_field" id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>">
{if !isset(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
)}
    <img src="" style="max-width: {if !$vardef.width}<?php echo $_smarty_tpl->tpl_vars['vardef']->value['width'];?>
{else}200{/if}px;" height="{if !$vardef.height}<?php echo $_smarty_tpl->tpl_vars['vardef']->value['height'];?>
{else}50{/if}">
{else}
    <img src="index.php?entryPoint=download&id={$fields.<?php echo $_smarty_tpl->tpl_vars['vardef']->value['fileId'];?>
.value|default:''}_<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>{$fields.width.value|default:10}&type=<?php echo (($tmp = $_smarty_tpl->tpl_vars['vardef']->value['linkModule'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" style="max-width: {if isset($vardef.width)}<?php echo $_smarty_tpl->tpl_vars['vardef']->value['width'];?>
{else}200{/if}px;" height="{if isset($vardef.height)}<?php echo $_smarty_tpl->tpl_vars['vardef']->value['height'];?>
{else}50{/if}">
{/if}
</span><?php }
}
