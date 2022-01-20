<?php
/* Smarty version 3.1.39, created on 2022-01-18 22:04:44
  from '/var/www/html/admin279i9qdya/themes/new-theme/template/components/layout/information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e72b6c2c7992_70300320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce6181fd59bce2d1780e91077b402c00fc1eef92' => 
    array (
      0 => '/var/www/html/admin279i9qdya/themes/new-theme/template/components/layout/information_messages.tpl',
      1 => 1642450051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e72b6c2c7992_70300320 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['informations']->value)) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
