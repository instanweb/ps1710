<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:25
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_supplierlist/views/templates/_partials/supplier_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168652526558e4bffd8a0412-15647205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f34690ac2c783927e9808c93c04678f026236224' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_supplierlist/views/templates/_partials/supplier_form.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168652526558e4bffd8a0412-15647205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'suppliers' => 0,
    'supplier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffd8b5e59_59768221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffd8b5e59_59768221')) {function content_58e4bffd8b5e59_59768221($_smarty_tpl) {?>

<form action="#">
  <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option value=""><?php echo smartyTranslate(array('s'=>'All suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</option>
    <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
      <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
    <?php } ?>
  </select>
</form>
<?php }} ?>
