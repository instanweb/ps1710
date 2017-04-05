<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:25
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_supplierlist/views/templates/_partials/supplier_text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203168921158e4bffd8b82e0-65721857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f21c296912675202ddc75bddb35419582aaed2' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_supplierlist/views/templates/_partials/supplier_text.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203168921158e4bffd8b82e0-65721857',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'suppliers' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffd8e3f03_30014112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffd8e3f03_30014112')) {function content_58e4bffd8e3f03_30014112($_smarty_tpl) {?>

<ul>
  <?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value) {
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']++;
?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
      <li class="facet-label">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      </li>
    <?php }?>
  <?php } ?>
</ul>
<?php }} ?>
