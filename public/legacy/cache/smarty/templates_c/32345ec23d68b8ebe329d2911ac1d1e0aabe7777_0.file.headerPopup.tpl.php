<?php
/* Smarty version 4.5.3, created on 2025-07-31 21:54:33
  from 'C:\xampp\htdocs\suitecrm\public\legacy\include\SearchForm\tpls\headerPopup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_688bc9f9dc8d74_44102577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32345ec23d68b8ebe329d2911ac1d1e0aabe7777' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suitecrm\\public\\legacy\\include\\SearchForm\\tpls\\headerPopup.tpl',
      1 => 1738223968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_688bc9f9dc8d74_44102577 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="searchDialog" class="modal fade modal-search" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FILTER_HEADER_TITLE'];?>
</h4>
                <!-- Nav tabs -->
                <h5 class="searchTabHeader mobileOnly basic active"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_QUICK_FILTER'];?>
</h5>
                <h5 class="searchTabHeader mobileOnly advanced"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADVANCED_SEARCH'];?>
</h5>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="searchTabHandler basic active"><a href="javascript:void(0)"
                                                                 onclick="listViewSearchIcon.toggleSearchDialog('basic'); return false;"
                                                                 aria-controls="searchList" role="tab"
                                                                 data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_QUICK_FILTER'];?>
</a></li>
                    <li class="searchTabHandler advanced"><a href="javascript:void(0)"
                                                             onclick="listViewSearchIcon.toggleSearchDialog('advanced'); return false;"
                                                             aria-controls="searchList" role="tab"
                                                             data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADVANCED_SEARCH'];?>
</a></li>
                </ul>
            </div>
            <div class="modal-body" id="searchList"><?php }
}
