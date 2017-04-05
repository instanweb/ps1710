<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:25
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_supplierlist/views/templates/hook/ps_supplierlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157004477058e4bffd8e75c8-46047915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4e9bcc1edf4f603c7c14fea24667321a297f8f8' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_supplierlist/views/templates/hook/ps_supplierlist.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157004477058e4bffd8e75c8-46047915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'page_link' => 0,
    'suppliers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffd90c8f7_11666157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffd90c8f7_11666157')) {function content_58e4bffd90c8f7_11666157($_smarty_tpl) {?>

<div id="search_filters_suppliers">
  <section class="facet">
    <h1 class="h6 text-uppercase facet-label">
      <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
"><?php }?>
        <?php echo smartyTranslate(array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

      <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?></a><?php }?>
    </h1>
    <div>
      <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['supplier_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('suppliers'=>$_smarty_tpl->tpl_vars['suppliers']->value), 0);?>

      <?php } else { ?>
        <p><?php echo smartyTranslate(array('s'=>'No supplier','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</p>
      <?php }?>
    </div>
  </section>
</div>
<?php }} ?>
