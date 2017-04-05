<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:25
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_searchbar/ps_searchbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17309722958e4bffd70fa05-30497826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f4d8330bb697d80d99ef7cbbfae3ab85c7727a5' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/modules/ps_searchbar/ps_searchbar.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17309722958e4bffd70fa05-30497826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search_controller_url' => 0,
    'search_string' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bffd71dd21_49892984',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bffd71dd21_49892984')) {function content_58e4bffd71dd21_49892984($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
">
		<button type="submit">
			<i class="material-icons search">&#xE8B6;</i>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
