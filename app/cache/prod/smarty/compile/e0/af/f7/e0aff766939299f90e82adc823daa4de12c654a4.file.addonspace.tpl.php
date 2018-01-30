<?php /* Smarty version Smarty-3.1.19, created on 2018-01-26 08:26:13
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\modules\jmspagebuilder\views\templates\hook\addonspace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215335a6ae6258554c0-84575988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0aff766939299f90e82adc823daa4de12c654a4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\modules\\jmspagebuilder\\views\\templates\\hook\\addonspace.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215335a6ae6258554c0-84575988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'space_class' => 0,
    'spacegap' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6ae6258a36c4_67188215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6ae6258a36c4_67188215')) {function content_5a6ae6258a36c4_67188215($_smarty_tpl) {?>
<div class="jms-empty-space clearfix<?php if (isset($_smarty_tpl->tpl_vars['space_class']->value)&&$_smarty_tpl->tpl_vars['space_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['space_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="margin-bottom:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['spacegap']->value, ENT_QUOTES, 'UTF-8');?>
px;"></div>
<?php }} ?>
