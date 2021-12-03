<?php
/* Smarty version 3.1.39, created on 2021-11-27 13:16:07
  from '/var/www/html/presta.bielinski.dev/admin279i9qdya/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a22187ddcbc8_82651513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '013c296b0b2d39ca8dd498dbc31e2061643b5e17' => 
    array (
      0 => '/var/www/html/presta.bielinski.dev/admin279i9qdya/themes/default/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a22187ddcbc8_82651513 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
