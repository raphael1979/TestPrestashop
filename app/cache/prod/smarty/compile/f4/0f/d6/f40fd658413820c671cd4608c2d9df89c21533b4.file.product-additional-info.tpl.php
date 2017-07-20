<?php /* Smarty version Smarty-3.1.19, created on 2017-07-20 11:20:12
         compiled from "/home/raphael/exercice/amazon/themes/classic/templates/catalog/_partials/product-additional-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1908397512597075cc494e30-61364284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f40fd658413820c671cd4608c2d9df89c21533b4' => 
    array (
      0 => '/home/raphael/exercice/amazon/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1500369154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1908397512597075cc494e30-61364284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597075cc4960f2_39777193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597075cc4960f2_39777193')) {function content_597075cc4960f2_39777193($_smarty_tpl) {?>
<div class="product-additional-info">
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

</div>
<?php }} ?>
