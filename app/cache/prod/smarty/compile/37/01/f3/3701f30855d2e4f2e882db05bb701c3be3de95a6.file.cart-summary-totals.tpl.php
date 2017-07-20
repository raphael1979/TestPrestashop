<?php /* Smarty version Smarty-3.1.19, created on 2017-07-20 13:41:08
         compiled from "/home/raphael/exercice/amazon/themes/classic/templates/checkout/_partials/cart-summary-totals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:953220500597096d492e494-65579946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3701f30855d2e4f2e882db05bb701c3be3de95a6' => 
    array (
      0 => '/home/raphael/exercice/amazon/themes/classic/templates/checkout/_partials/cart-summary-totals.tpl',
      1 => 1500369154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '953220500597096d492e494-65579946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597096d4935bf3_74089405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597096d4935bf3_74089405')) {function content_597096d4935bf3_74089405($_smarty_tpl) {?>
<div class="card-block cart-summary-totals">

  
    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

  
    <div class="cart-summary-line">
      <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

</div>
<?php }} ?>
