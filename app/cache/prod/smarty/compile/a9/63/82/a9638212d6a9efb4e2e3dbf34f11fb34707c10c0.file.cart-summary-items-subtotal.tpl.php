<?php /* Smarty version Smarty-3.1.19, created on 2017-07-20 13:41:08
         compiled from "/home/raphael/exercice/amazon/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1547989066597096d49290f0-52635874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9638212d6a9efb4e2e3dbf34f11fb34707c10c0' => 
    array (
      0 => '/home/raphael/exercice/amazon/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1500369154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1547989066597096d49290f0-52635874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597096d492cfe4_50304335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597096d492cfe4_50304335')) {function content_597096d492cfe4_50304335($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
