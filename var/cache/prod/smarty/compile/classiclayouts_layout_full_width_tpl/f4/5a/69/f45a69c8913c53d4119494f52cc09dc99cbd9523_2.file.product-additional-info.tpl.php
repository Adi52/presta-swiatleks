<?php
/* Smarty version 3.1.39, created on 2021-11-27 13:22:21
  from '/var/www/html/presta.bielinski.dev/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a222fd7581a1_26264462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f45a69c8913c53d4119494f52cc09dc99cbd9523' => 
    array (
      0 => '/var/www/html/presta.bielinski.dev/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a222fd7581a1_26264462 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
