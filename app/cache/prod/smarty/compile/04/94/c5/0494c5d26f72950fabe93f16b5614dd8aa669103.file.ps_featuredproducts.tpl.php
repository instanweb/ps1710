<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:25
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86849704858e4bffd506317-10965749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0494c5d26f72950fabe93f16b5614dd8aa669103' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86849704858e4bffd506317-10965749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'allProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffd51d404_40889645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffd51d404_40889645')) {function content_58e4bffd51d404_40889645($_smarty_tpl) {?>
<section class="featured-products clearfix">
  <h1 class="h1 products-section-title text-uppercase">
    <?php echo smartyTranslate(array('s'=>'Popular Products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </h1>
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
  <a class="all-product-link pull-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo smartyTranslate(array('s'=>'All products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
<i class="material-icons">&#xE315;</i>
  </a>
</section>
<?php }} ?>
