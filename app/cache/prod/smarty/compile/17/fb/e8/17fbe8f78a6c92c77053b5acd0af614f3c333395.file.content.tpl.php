<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 12:08:26
         compiled from "/Users/patpbe/Sites/ps1710/admin997gv5sa7/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120404009858e4c21aa02b54-24032574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17fbe8f78a6c92c77053b5acd0af614f3c333395' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/admin997gv5sa7/themes/default/template/content.tpl',
      1 => 1490891120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120404009858e4c21aa02b54-24032574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4c21aa10669_25235037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4c21aa10669_25235037')) {function content_58e4c21aa10669_25235037($_smarty_tpl) {?>
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
