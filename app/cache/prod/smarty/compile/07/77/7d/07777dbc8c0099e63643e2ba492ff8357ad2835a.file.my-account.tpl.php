<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:25
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198825613558e4bffd4a7fc7-13959657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07777dbc8c0099e63643e2ba492ff8357ad2835a' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198825613558e4bffd4a7fc7-13959657',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffd4b4815_32082425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffd4b4815_32082425')) {function content_58e4bffd4b4815_32082425($_smarty_tpl) {?>

<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="emailsalerts"
   href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
  <span class="link-item">
  <i class="material-icons">&#xE151;</i>
    <?php echo smartyTranslate(array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

  </span>
</a>
<?php }} ?>
