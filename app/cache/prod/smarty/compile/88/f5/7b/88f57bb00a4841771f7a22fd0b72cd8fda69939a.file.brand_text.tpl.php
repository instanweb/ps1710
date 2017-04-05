<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:25
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_text.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197142963558e4bffd22d5d4-57638604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88f57bb00a4841771f7a22fd0b72cd8fda69939a' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_brandlist/views/templates/_partials/brand_text.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197142963558e4bffd22d5d4-57638604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'brands' => 0,
    'text_list_nb' => 0,
    'brand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffd24f998_69455627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffd24f998_69455627')) {function content_58e4bffd24f998_69455627($_smarty_tpl) {?>

<ul>
  <?php  $_smarty_tpl->tpl_vars['brand'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['brand']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brand_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->key => $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brand_list']['iteration']++;
?>
    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['brand_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>
      <li class="facet-label">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>

        </a>
      </li>
    <?php }?>
  <?php } ?>
</ul>
<?php }} ?>
