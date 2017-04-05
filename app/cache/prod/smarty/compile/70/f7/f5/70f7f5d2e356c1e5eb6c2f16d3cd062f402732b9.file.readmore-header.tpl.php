<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:18
         compiled from "/Users/patpbe/Sites/ps1710/admin/themes/default/template/controllers/modules/readmore-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25723390758e4bff65d5ef5-63735110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70f7f5d2e356c1e5eb6c2f16d3cd062f402732b9' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/admin/themes/default/template/controllers/modules/readmore-header.tpl',
      1 => 1490891120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25723390758e4bff65d5ef5-63735110',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'displayName' => 0,
    'version' => 0,
    'author' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bff65eb445_33049776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bff65eb445_33049776')) {function content_58e4bff65eb445_33049776($_smarty_tpl) {?>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 class="modal-title">
	<div class="module_name">
		<a href="#" class="icon icon-chevron-left" onclick="openModulesList()"></a>
			<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>

			<small class="text-muted"><?php echo smartyTranslate(array('s'=>'v'),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 - <?php echo smartyTranslate(array('s'=>'by'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</small>
	</div>
</h3>
<?php }} ?>
