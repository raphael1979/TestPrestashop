<?php /* Smarty version Smarty-3.1.19, created on 2017-07-20 13:52:16
         compiled from "/home/raphael/exercice/amazon/admin024mqh0f7/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93719750959709970937547-77325749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0bc1f837c4884cd03dc0d986140a2dbd53081d5' => 
    array (
      0 => '/home/raphael/exercice/amazon/admin024mqh0f7/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1500369157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93719750959709970937547-77325749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5970997093b7a1_81451591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5970997093b7a1_81451591')) {function content_5970997093b7a1_81451591($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>

<?php }} ?>
