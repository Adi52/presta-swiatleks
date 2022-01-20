<?php
/* Smarty version 3.1.39, created on 2022-01-17 22:09:05
  from '/var/www/html/themes/classic/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e5daf1799981_52643486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e95f1a99f52afe910e20b3293e9882a73e4e811' => 
    array (
      0 => '/var/www/html/themes/classic/templates/contact.tpl',
      1 => 1642450052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e5daf1799981_52643486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85503659461e5daf1795776_43711836', 'page_header_container');
?>


<?php if ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-left-column.tpl') {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74341862961e5daf1796e91_76546741', "left_column");
?>

<?php } elseif ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-right-column.tpl') {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22923385761e5daf1798545_83867761', "right_column");
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133645682061e5daf17990c3_41405326', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_85503659461e5daf1795776_43711836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_85503659461e5daf1795776_43711836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block "left_column"} */
class Block_74341862961e5daf1796e91_76546741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_74341862961e5daf1796e91_76546741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_22923385761e5daf1798545_83867761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_22923385761e5daf1798545_83867761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "right_column"} */
/* {block 'page_content'} */
class Block_133645682061e5daf17990c3_41405326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_133645682061e5daf17990c3_41405326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
