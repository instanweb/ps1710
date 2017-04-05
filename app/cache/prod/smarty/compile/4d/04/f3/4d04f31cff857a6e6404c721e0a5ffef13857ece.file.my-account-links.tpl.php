<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:26
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/templates/customer/_partials/my-account-links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87418641158e4bffee07ca5-85193868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d04f31cff857a6e6404c721e0a5ffef13857ece' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/templates/customer/_partials/my-account-links.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87418641158e4bffee07ca5-85193868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffee1d262_00263093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffee1d262_00263093')) {function content_58e4bffee1d262_00263093($_smarty_tpl) {?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE5CB;</i>
    <span><?php echo smartyTranslate(array('s'=>'Back to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl);?>
</span>
  </a>
  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" class="account-link">
    <i class="material-icons">&#xE88A;</i>
    <span><?php echo smartyTranslate(array('s'=>'Home','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
  </a>

<?php }} ?>
