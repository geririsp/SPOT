<?php
/* Smarty version 3.1.28, created on 2016-10-27 17:53:16
  from "/var/www/SPOT/infra/views/untag_port_popup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_581222ec4960d7_14808343',
  'file_dependency' => 
  array (
    '104a4587620b66a245deb17de451edf47fca1be6' => 
    array (
      0 => '/var/www/SPOT/infra/views/untag_port_popup.tpl',
      1 => 1477554038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581222ec4960d7_14808343 ($_smarty_tpl) {
?>

<p><?php echo $_smarty_tpl->tpl_vars['LBL_0_untag_success_port_id']->value;?>
 <b><?php echo $_smarty_tpl->tpl_vars['port_id']->value;?>
</b> <?php echo $_smarty_tpl->tpl_vars['LBL_0_untag_success_switch']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['mySwitch']->value->getName();?>
 <?php echo $_smarty_tpl->tpl_vars['LBL_0_untag_success']->value;?>
 <b><?php echo $_smarty_tpl->tpl_vars['dest_vlan']->value;?>
</b>.</p>

<?php }
}
