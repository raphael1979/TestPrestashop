<?php /* Smarty version Smarty-3.1.19, created on 2017-07-20 11:28:41
         compiled from "/home/raphael/exercice/amazon/admin024mqh0f7/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:964033990597077c95ae1b4-24562274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d400a7f3e99365c836f53b4b5ee389dbd7a650a' => 
    array (
      0 => '/home/raphael/exercice/amazon/admin024mqh0f7/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1500369156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '964033990597077c95ae1b4-24562274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597077c95b4258_55471004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597077c95b4258_55471004')) {function content_597077c95b4258_55471004($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
