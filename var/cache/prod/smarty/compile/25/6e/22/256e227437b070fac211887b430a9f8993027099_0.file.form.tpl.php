<?php
/* Smarty version 3.1.39, created on 2021-11-27 15:24:46
  from '/var/www/html/presta.bielinski.dev/admin279i9qdya/themes/default/template/controllers/attributes/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a23fae5ae1f2_00183925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256e227437b070fac211887b430a9f8993027099' => 
    array (
      0 => '/var/www/html/presta.bielinski.dev/admin279i9qdya/themes/default/template/controllers/attributes/helpers/form/form.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a23fae5ae1f2_00183925 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33905828761a23fae58d0a2_46028157', "input_row");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186250523661a23fae599f64_37906608', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70200248161a23fae5a47c3_26415896', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_33905828761a23fae58d0a2_46028157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_33905828761a23fae58d0a2_46028157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'color' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'texture' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'current_texture') {?>
		<div class="colorAttributeProperties"<?php if (!$_smarty_tpl->tpl_vars['colorAttributeProperties']->value) {?> style="display: none;"<?php }?>>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'color' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'texture' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'current_texture') {?>
		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'name') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAttributeForm",'id_attribute'=>$_smarty_tpl->tpl_vars['form_id']->value),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
/* {block "field"} */
class Block_186250523661a23fae599f64_37906608 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_186250523661a23fae599f64_37906608',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'current_texture') {?>
		<div class="col-lg-8">
			<?php if ((isset($_smarty_tpl->tpl_vars['imageTextureExists']->value)) && $_smarty_tpl->tpl_vars['imageTextureExists']->value) {?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['imageTexture']->value;?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Texture','d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
" class="img-thumbnail" />
			<?php } else { ?>
				<p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</p>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['imageTextureUrl']->value)) && $_smarty_tpl->tpl_vars['imageTextureUrl']->value && (isset($_smarty_tpl->tpl_vars['imageTextureExists']->value)) && $_smarty_tpl->tpl_vars['imageTextureExists']->value) {?>
			<p>
				<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['imageTextureUrl']->value;?>
">
					<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

				</a>
			</p>
			<?php }?>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "field"} */
/* {block "script"} */
class Block_70200248161a23fae5a47c3_26415896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_70200248161a23fae5a47c3_26415896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	var attributesGroups = {<?php echo $_smarty_tpl->tpl_vars['strAttributesGroups']->value;?>
};

	var displayColorFieldsOption = function() {
		var val = $('#id_attribute_group').val();
		if (attributesGroups[val])
			$('.colorAttributeProperties').show();
		else
			$('.colorAttributeProperties').hide();
	};

	displayColorFieldsOption();

	$('#id_attribute_group').change(displayColorFieldsOption);

	var shop_associations = <?php echo $_smarty_tpl->tpl_vars['fields']->value[0]['form']['shop_associations'];?>
;
	var changeAssociationGroup = function()
	{
		var id_attribute_group = $('#id_attribute_group').val();
		$('.input_shop').each(function(k, item)
		{
			var id_shop = $(item).attr('shop_id');
			if (typeof shop_associations[id_attribute_group] != 'undefined' && $.inArray(id_shop, shop_associations[id_attribute_group]) > -1)
				$(item).attr('disabled', false);
			else
			{
				$(item).attr('disabled', true);
				$(item).attr('checked', false);
			}
		});
	};
	$('#id_attribute_group').change(changeAssociationGroup);
	changeAssociationGroup();
<?php
}
}
/* {/block "script"} */
}
