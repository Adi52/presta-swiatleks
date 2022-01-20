<?php
/* Smarty version 3.1.39, created on 2022-01-18 22:50:04
  from '/var/www/html/themes/classic/templates/errors/not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e7360c1b3745_54132913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f62f3a84cbaef2d34d41cc623e044de957195bf4' => 
    array (
      0 => '/var/www/html/themes/classic/templates/errors/not-found.tpl',
      1 => 1642450052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e7360c1b3745_54132913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108137834161e7360c1b0608_35749605', 'page_content');
?>

</section>
<?php }
/* {block "error_content"} */
class Block_63636778961e7360c1b0b48_92879387 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['errorContent']->value))) {?>
        <?php echo $_smarty_tpl->tpl_vars['errorContent']->value;?>

      <?php } else { ?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This page could not be found','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Try to search our catalog, you may find what you are looking for!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block "error_content"} */
/* {block 'search'} */
class Block_66592836461e7360c1b23c9_59016841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_169532422061e7360c1b2be7_36679380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_108137834161e7360c1b0608_35749605 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_108137834161e7360c1b0608_35749605',
  ),
  'error_content' => 
  array (
    0 => 'Block_63636778961e7360c1b0b48_92879387',
  ),
  'search' => 
  array (
    0 => 'Block_66592836461e7360c1b23c9_59016841',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_169532422061e7360c1b2be7_36679380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63636778961e7360c1b0b48_92879387', "error_content", $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66592836461e7360c1b23c9_59016841', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169532422061e7360c1b2be7_36679380', 'hook_not_found', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_content'} */
}
