<?php /* Smarty version Smarty-3.1.19, created on 2018-02-04 13:15:44
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonspace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193435a770780156755-68692870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e63a6ed34a4d37d1e4a4eb8048707fe3c90c8b09' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonspace.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193435a770780156755-68692870',
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
  'unifunc' => 'content_5a770780193656_84017192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a770780193656_84017192')) {function content_5a770780193656_84017192($_smarty_tpl) {?>
<div class="jms-empty-space clearfix<?php if (isset($_smarty_tpl->tpl_vars['space_class']->value)&&$_smarty_tpl->tpl_vars['space_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['space_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="margin-bottom:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['spacegap']->value, ENT_QUOTES, 'UTF-8');?>
px;"></div>
<?php }} ?>
