<?php /* Smarty version Smarty-3.1.19, created on 2017-07-20 13:41:08
         compiled from "/home/raphael/exercice/amazon/themes/classic/templates/checkout/_partials/cart-detailed-actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1872282825597096d4937207-25567063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b82127c13b0bbcdfb080f721c5148ea87c66b32' => 
    array (
      0 => '/home/raphael/exercice/amazon/themes/classic/templates/checkout/_partials/cart-detailed-actions.tpl',
      1 => 1500369154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872282825597096d4937207-25567063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597096d493e6c5_36267379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597096d493e6c5_36267379')) {function content_597096d493e6c5_36267379($_smarty_tpl) {?>

  <div class="checkout cart-detailed-actions card-block">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
      <div class="alert alert-warning" role="alert">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="text-xs-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
      </div>
    <?php } elseif (empty($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>
      <div class="text-xs-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
      </div>
    <?php } else { ?>
      <div class="text-xs-center">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayExpressCheckout'),$_smarty_tpl);?>

      </div>
    <?php }?>
  </div>

<?php }} ?>
