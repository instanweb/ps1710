<?php /* Smarty version Smarty-3.1.19, created on 2017-04-05 11:59:27
         compiled from "/Users/patpbe/Sites/ps1710/themes/classic/templates/layouts/layout-error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53098664658e4bfff56d245-03973364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdf6d7731a3baba8ea58b76ba5ab0341ab6492bb' => 
    array (
      0 => '/Users/patpbe/Sites/ps1710/themes/classic/templates/layouts/layout-error.tpl',
      1 => 1490891122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53098664658e4bfff56d245-03973364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stylesheets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58e4bfff58f4b1_33510567',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58e4bfff58f4b1_33510567')) {function content_58e4bfff58f4b1_33510567($_smarty_tpl) {?>
<!doctype html>
<html lang="">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    
      <title></title>
      <meta name="description" content="">
      <meta name="keywords" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
      <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '17726720858e4bffdb2f7f6-40945621');
content_58e4bffdb81f89_24742632($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>
    

  </head>

  <body>

    <div id="layout-error">
      
        <p>Hello world! This is HTML5 Boilerplate.</p>
      
    </div>

  </body>

</html>
<?php }} ?>
