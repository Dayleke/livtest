<?php
/* Smarty version 3.1.33, created on 2024-12-12 19:27:36
  from '/var/www/html/LEAF_Request_Portal/templates/menu_help.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675b7f780daaa8_13269461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '733cb7aead5ee72d04bea97e56572e66f1a53f3a' => 
    array (
      0 => '/var/www/html/LEAF_Request_Portal/templates/menu_help.tpl',
      1 => 1734040697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675b7f780daaa8_13269461 (Smarty_Internal_Template $_smarty_tpl) {
?>For Help contact your primary admin
<div id="help-primary-admin" style="font-weight:bold;">Searching...</div>
<?php echo '<script'; ?>
 type="text/javascript">
    let observPrimaryAdmin = new IntersectionObserver(function(entities) {
        if(entities[0].isIntersecting) {
            observPrimaryAdmin.disconnect();
            $.ajax({
                url: "api/system/primaryadmin",
                dataType: "json",
                success: function(response) {
                    const fullName = ((response['Fname'] || '') + ' ' + (response['Lname'] || '')).trim();
                    const userName = response["userName"] || '';
                    const nameDisplay = fullName || userName;
                    const email = response['Email'] || '';

                    const adminInfo = email !== '' ?
                        '<div>Primary Admin:</div>' + nameDisplay + ' - <br/><a href="mailto:' + email+ '">' + email + '</a>' :
                        'Primary Admin has not been set.';

                    $('#help-primary-admin').html('<div id="help_admin_info">' + adminInfo + '</div>');
                }
            });
        }
    }, {
        threshold: 1.0
    });
    observPrimaryAdmin.observe(document.querySelector('#help-primary-admin'));
<?php echo '</script'; ?>
><?php }
}
