<?php
/* Smarty version 3.1.33, created on 2024-12-12 19:27:35
  from '/var/www/html/LEAF_Request_Portal/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_675b7f7712edb2_00770750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0665a2181a0f25e7e68d6fe888f1950c6462ed1d' => 
    array (
      0 => '/var/www/html/LEAF_Request_Portal/templates/login.tpl',
      1 => 1734040697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675b7f7712edb2_00770750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/libs/smarty/plugins/modifier.sanitize.php','function'=>'smarty_modifier_sanitize',),));
if ($_smarty_tpl->tpl_vars['name']->value == '') {?>
    <form name="login" method="post" action="?a=login">
    <font class="alert">STATUS: <?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</font>
    <input name="login" type="submit" title="Click to login" value="Login" class="submit" />
    </form>
<?php } else { ?>
    Welcome, <b><?php echo smarty_modifier_sanitize($_smarty_tpl->tpl_vars['name']->value);?>
</b>! | <a href="?a=logout">Sign out</a>
<?php }
}
}
