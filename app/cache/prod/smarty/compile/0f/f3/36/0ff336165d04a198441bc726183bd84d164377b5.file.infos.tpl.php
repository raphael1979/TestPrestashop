<?php /* Smarty version Smarty-3.1.19, created on 2017-07-20 11:46:29
         compiled from "/home/raphael/exercice/amazon/modules/ps_wirepayment/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38499091459707bf5412cc7-13865247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ff336165d04a198441bc726183bd84d164377b5' => 
    array (
      0 => '/home/raphael/exercice/amazon/modules/ps_wirepayment/views/templates/hook/infos.tpl',
      1 => 1500369158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38499091459707bf5412cc7-13865247',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59707bf5416e27_00518599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59707bf5416e27_00518599')) {function content_59707bf5416e27_00518599($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/ps_wirepayment/logo.png" style="float:left; margin-right:15px;" height="60">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
