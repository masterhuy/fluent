<?php /* Smarty version Smarty-3.1.19, created on 2018-02-05 10:24:21
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\catalog\listing\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82935a7830d51fb306-10902953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b6cba37c3bb826b90c8cc02067b1313fd2fbfff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\catalog\\listing\\category.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82935a7830d51fb306-10902953',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
    'jpb_categorylayout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7830d5249519_01171506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7830d5249519_01171506')) {function content_5a7830d5249519_01171506($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['sidebar']->value=='left') {?> 
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-left-column.tpl", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=='right') {?>
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-right-column.tpl", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=='no') {?>	
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-full-width.tpl", null, 0);?>
<?php }?> 
<?php if ($_smarty_tpl->tpl_vars['jpb_categorylayout']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("catalog/listing/".((string)$_smarty_tpl->tpl_vars['jpb_categorylayout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php }} ?>
