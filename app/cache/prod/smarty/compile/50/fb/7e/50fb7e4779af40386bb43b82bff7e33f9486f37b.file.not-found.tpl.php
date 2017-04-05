<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:27
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/templates/errors/not-found.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127578577358e4bfff464b24-40862796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50fb7e4779af40386bb43b82bff7e33f9486f37b' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/templates/errors/not-found.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127578577358e4bfff464b24-40862796',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bfff47d0d8_00468459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bfff47d0d8_00468459')) {function content_58e4bfff47d0d8_00468459($_smarty_tpl) {?>
<section id="content" class="page-content page-not-found">
  

    <h4><?php echo smartyTranslate(array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h4>
    <p><?php echo smartyTranslate(array('s'=>'Search again what you are looking for','d'=>'Shop.Theme'),$_smarty_tpl);?>
</p>

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displaySearch'),$_smarty_tpl);?>

    

    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNotFound'),$_smarty_tpl);?>

    

  
</section>
<?php }} ?>
