<?php
/* Smarty version 3.1.39, created on 2021-11-27 13:22:27
  from '/var/www/html/presta.bielinski.dev/themes/classic/templates/checkout/_partials/cart-summary-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a22303efacf9_30745205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfda075872095b8270f6190370af37be22e5a4f2' => 
    array (
      0 => '/var/www/html/presta.bielinski.dev/themes/classic/templates/checkout/_partials/cart-summary-top.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a22303efacf9_30745205 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-top js-cart-summary-top">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

</div>
<?php }
}
