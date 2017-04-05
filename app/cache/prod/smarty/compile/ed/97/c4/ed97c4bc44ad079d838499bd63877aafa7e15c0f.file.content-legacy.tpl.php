<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:15
         compiled from "/Users/patpbe/Sites/ps1710/admin/themes/default/template/content-legacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54221842358e4bff3931c34-73072770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed97c4bc44ad079d838499bd63877aafa7e15c0f' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/admin/themes/default/template/content-legacy.tpl',
      1 => 1490891120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54221842358e4bff3931c34-73072770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bff395e5a6_10544781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bff395e5a6_10544781')) {function content_58e4bff395e5a6_10544781($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
