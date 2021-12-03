<?php
/* Smarty version 3.1.39, created on 2021-11-27 13:13:17
  from '/var/www/html/presta.bielinski.dev/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61a220ddde2bf0_19012560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c963084a0e6b72e7c6481d99370bcf0e35c4f53d' => 
    array (
      0 => '/var/www/html/presta.bielinski.dev/themes/classic/templates/page.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61a220ddde2bf0_19012560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125191449061a220dddddca2_23701065', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_202684482461a220dddde999_09718922 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_141121711961a220dddde2e1_59155056 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202684482461a220dddde999_09718922', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11919308661a220ddde07c7_36857499 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_37478539061a220ddde0ee3_08586925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_59735360661a220ddde02e9_83223065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11919308661a220ddde07c7_36857499', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37478539061a220ddde0ee3_08586925', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_23057173061a220ddde1e57_42288601 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_119430578861a220ddde19d4_51765838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23057173061a220ddde1e57_42288601', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_125191449061a220dddddca2_23701065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125191449061a220dddddca2_23701065',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_141121711961a220dddde2e1_59155056',
  ),
  'page_title' => 
  array (
    0 => 'Block_202684482461a220dddde999_09718922',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_59735360661a220ddde02e9_83223065',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11919308661a220ddde07c7_36857499',
  ),
  'page_content' => 
  array (
    0 => 'Block_37478539061a220ddde0ee3_08586925',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_119430578861a220ddde19d4_51765838',
  ),
  'page_footer' => 
  array (
    0 => 'Block_23057173061a220ddde1e57_42288601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141121711961a220dddde2e1_59155056', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59735360661a220ddde02e9_83223065', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119430578861a220ddde19d4_51765838', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
