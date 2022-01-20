<?php
/* Smarty version 3.1.39, created on 2022-01-18 22:04:55
  from '/var/www/html/admin279i9qdya/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e72b7764f081_43367792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f102473f77cb31f745d467b31873c30ca7058028' => 
    array (
      0 => '/var/www/html/admin279i9qdya/themes/default/template/content.tpl',
      1 => 1642450051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e72b7764f081_43367792 (Smarty_Internal_Template $_smarty_tpl) {
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
