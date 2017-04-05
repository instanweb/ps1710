<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:25
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_viewedproduct/views/template/hook/ps_viewedproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170413702558e4bffd910e01-43182849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '353692ea2b7d01fb9f326e1001a68e79fd9a7aa1' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_viewedproduct/views/template/hook/ps_viewedproduct.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170413702558e4bffd910e01-43182849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffd921b49_05123878',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffd921b49_05123878')) {function content_58e4bffd921b49_05123878($_smarty_tpl) {?>
<section class="featured-products clearfix m-t-3">
  <h2><?php echo smartyTranslate(array('s'=>'Viewed products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h2>
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
</section>
<?php }} ?>
