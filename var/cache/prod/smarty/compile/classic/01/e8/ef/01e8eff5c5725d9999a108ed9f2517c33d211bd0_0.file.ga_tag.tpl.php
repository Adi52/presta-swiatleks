<?php
/* Smarty version 3.1.39, created on 2021-11-27 13:14:35
  from '/var/www/html/presta.bielinski.dev/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a2212ba768d7_36670479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01e8eff5c5725d9999a108ed9f2517c33d211bd0' => 
    array (
      0 => '/var/www/html/presta.bielinski.dev/modules/ps_googleanalytics/views/templates/hook/ga_tag.tpl',
      1 => 1638011839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a2212ba768d7_36670479 (Smarty_Internal_Template $_smarty_tpl) {
if ((!empty($_smarty_tpl->tpl_vars['jsCode']->value))) {?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var MBG = GoogleAnalyticEnhancedECommerce;
            MBG.setCurrency('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isoCode']->value,'htmlall','UTF-8' ));?>
');
            <?php echo $_smarty_tpl->tpl_vars['jsCode']->value;?>

        });
    <?php echo '</script'; ?>
>
    
<?php }
}
}
