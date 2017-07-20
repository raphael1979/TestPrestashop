<?php /* Smarty version Smarty-3.1.19, created on 2017-07-20 15:32:45
         compiled from "/home/raphael/exercice/amazon/admin024mqh0f7/themes/new-theme/template/controllers/addons_catalog/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2009369405970b0fde11856-51535191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0b6f59748f5637ed5139c508c9e9595825f2c9b' => 
    array (
      0 => '/home/raphael/exercice/amazon/admin024mqh0f7/themes/new-theme/template/controllers/addons_catalog/content.tpl',
      1 => 1500369155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2009369405970b0fde11856-51535191',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5970b0fde5f3b1_47667782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5970b0fde5f3b1_47667782')) {function content_5970b0fde5f3b1_47667782($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
