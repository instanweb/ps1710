<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:26
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/templates/cms/_partials/sitemap-nested-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107523243458e4bffec71971-04144727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deab13a008f4f911114605b62ce8a4d9691f1dcd' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/templates/cms/_partials/sitemap-nested-list.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107523243458e4bffec71971-04144727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_nested' => 0,
    'links' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffecb4660_39545038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffecb4660_39545038')) {function content_58e4bffecb4660_39545038($_smarty_tpl) {?>

  <ul<?php if (isset($_smarty_tpl->tpl_vars['is_nested']->value)) {?> class="nested"<?php }?>>
    <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
?>
      <li>
        <a id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>
">
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['label'], ENT_QUOTES, 'UTF-8');?>

        </a>
        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['children'])&&count($_smarty_tpl->tpl_vars['link']->value['children'])>0) {?>
          <?php echo $_smarty_tpl->getSubTemplate ('cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('links'=>$_smarty_tpl->tpl_vars['link']->value['children'],'is_nested'=>true), 0);?>

        <?php }?>
      </li>
    <?php } ?>
  </ul>

<?php }} ?>
