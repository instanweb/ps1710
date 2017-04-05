<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:15
         compiled from "/Users/patpbe/Sites/ps1710/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106691599158e4bff3978b62-26773203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3c37b8d7ae78ff2ab94083fb26d361535fd5fa9' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/admin/themes/default/template/content.tpl',
      1 => 1490891120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106691599158e4bff3978b62-26773203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bff39860e2_74413304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bff39860e2_74413304')) {function content_58e4bff39860e2_74413304($_smarty_tpl) {?>
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
