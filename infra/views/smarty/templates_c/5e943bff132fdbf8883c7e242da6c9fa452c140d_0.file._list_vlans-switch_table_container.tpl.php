<?php
/* Smarty version 3.1.28, created on 2016-10-27 16:36:58
  from "/var/www/infra/views/partial_commons/_list_vlans-switch_table_container.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5812110aa4e3e0_02344944',
  'file_dependency' => 
  array (
    '5e943bff132fdbf8883c7e242da6c9fa452c140d' => 
    array (
      0 => '/var/www/infra/views/partial_commons/_list_vlans-switch_table_container.tpl',
      1 => 1477554038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5812110aa4e3e0_02344944 ($_smarty_tpl) {
?>


		
		<div>
			<input type="hidden" id="switch_id" name="switch_id" value="<?php echo $_smarty_tpl->tpl_vars['mySwitch']->value->getId();?>
"/>
		</div>

			<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['vlans']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<ul class="vlan">
					<li>
					<fieldset class="form-group">
						<?php if ($_smarty_tpl->tpl_vars['ALLOW_VLAN_DELETION']->value) {?>
							<div class="checkbox">
								<label><input type="checkbox" name="selected_vlans[]" value="<?php echo $_smarty_tpl->tpl_vars['vlans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->getId();?>
"/><?php echo $_smarty_tpl->tpl_vars['vlans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</label>
							</div>
						<?php } else { ?>
							<p><?php echo $_smarty_tpl->tpl_vars['vlans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</p>
						<?php }?>
						<div class="vlan-list-ports"> 
							<?php if (count($_smarty_tpl->tpl_vars['ports']->value[$_smarty_tpl->tpl_vars['vlans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->getId()]) > 0) {?>
									<?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['ports']->value[$_smarty_tpl->tpl_vars['vlans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->getId()]) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
											<?php echo $_smarty_tpl->tpl_vars['ports']->value[$_smarty_tpl->tpl_vars['vlans']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]->getId()][(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)];?>

									<?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
							<?php }?>
						</div>
						</fieldset>
					</li>
					
				</ul>
	
		<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>

<?php }
}
