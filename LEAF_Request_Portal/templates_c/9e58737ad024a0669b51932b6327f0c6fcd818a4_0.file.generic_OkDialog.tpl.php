<?php
/* Smarty version 3.1.33, created on 2024-12-13 00:27:59
  from '/var/www/html/LEAF_Request_Portal/templates/site_elements/generic_OkDialog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675b7f8f9d4a55_54121299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e58737ad024a0669b51932b6327f0c6fcd818a4' => 
    array (
      0 => '/var/www/html/LEAF_Request_Portal/templates/site_elements/generic_OkDialog.tpl',
      1 => 1734040697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675b7f8f9d4a55_54121299 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ok_xhrDialog" style="background-color: #feffd1; border: 1px solid black; visibility: hidden; display: none">
<div>
    <div id="ok_xhr" style="font-size: 130%; width: 400px; height: 120px; padding: 16px; overflow: auto"></div>
    <div style="text-align: right; padding-right: 6px"><button class="buttonNorm" id="confirm_button_ok" disabled><img src="dynicons/?img=dialog-apply.svg&amp;w=32" alt="" /><span id="confirm_saveBtnText"> Ok</span></button></div><br />
</div>
</div>
<?php }
}
