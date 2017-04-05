<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:25
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191647864758e4bffd2173c6-99094098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15917d96dca1f1ed4947640c5308fe5341674372' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_form.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191647864758e4bffd2173c6-99094098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brands' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffd22b033_14686464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffd22b033_14686464')) {function content_58e4bffd22b033_14686464($_smarty_tpl) {?>

<form action="#">
  <select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
    <option value=""><?php echo smartyTranslate(array('s'=>'All brands','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</option>
    <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
?>
      <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
    <?php } ?>
  </select>
</form>
<?php }} ?>
