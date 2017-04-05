<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 12:08:27
         compiled from "/Users/patpbe/Sites/ps1710/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144090154658e4c21b059a46-37917883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd05d8a65a7cf731ab0e06267c550be0804cfb753' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/modules/welcome/views/templates/tooltip.tpl',
      1 => 1490891256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144090154658e4c21b059a46-37917883',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4c21b063d30_02520043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4c21b063d30_02520043')) {function content_58e4c21b063d30_02520043($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
