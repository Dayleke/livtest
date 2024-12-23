<?php
/* Smarty version 3.1.33, created on 2024-12-13 00:27:59
  from '/var/www/html/LEAF_Request_Portal/templates/site_elements/generic_confirm_xhrDialog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675b7f8fa8d3c5_94347643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2e2ee8b1a73a62b7ee6a55b69819dd5339675d' => 
    array (
      0 => '/var/www/html/LEAF_Request_Portal/templates/site_elements/generic_confirm_xhrDialog.tpl',
      1 => 1734040697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675b7f8fa8d3c5_94347643 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="confirm_xhrDialog" style="background-color: #feffd1; border: 1px solid black; visibility: hidden; display: none">
<form id="confirm_record" enctype="multipart/form-data" action="javascript:void(0);">
    <div>
        <div id="confirm_loadIndicator" style="visibility: hidden; position: absolute; text-align: center; font-size: 24px; font-weight: bold; background: white; padding: 16px; height: 100px; width: 360px">Loading... <img src="images/largespinner.gif" alt="" /></div>
        <div id="confirm_xhr" style="font-size: 130%; width: 400px; height: 120px; padding: 16px; overflow: auto"></div>
        <div style="position: absolute; left: 10px; font-size: 140%"><button type="button" class="buttonNorm" id="confirm_button_cancelchange" disabled><img src="dynicons/?img=edit-undo.svg&amp;w=32" alt="" /> No</button></div>
        <div style="text-align: right; padding-right: 6px"><button type="button" class="buttonNorm" id="confirm_button_save" disabled><img src="dynicons/?img=dialog-apply.svg&amp;w=32" alt="" /><span id="confirm_saveBtnText"> Yes</span></button></div><br />
    </div>
</form>
</div>
<?php }
}
