<?php
/* Smarty version 3.1.39, created on 2021-11-27 13:24:43
  from '/var/www/html/presta.bielinski.dev/pdf/invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a2238b2f6255_58849227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9add9a316b5e9f37ecd0883783827f6bfb22db12' => 
    array (
      0 => '/var/www/html/presta.bielinski.dev/pdf/invoice.shipping-tab.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a2238b2f6255_58849227 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
