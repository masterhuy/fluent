<?php /* Smarty version Smarty-3.1.19, created on 2018-02-04 13:29:13
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\templates\catalog\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157045a770aa9c78371-60905097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52cd3ef5cac0b24d429d9285ff48f13aad6aefa9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\templates\\catalog\\product.tpl',
      1 => 1516090206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157045a770aa9c78371-60905097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
    'jpb_productlayout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a770aa9cb5288_72707218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a770aa9cb5288_72707218')) {function content_5a770aa9cb5288_72707218($_smarty_tpl) {?> 
<?php if ($_smarty_tpl->tpl_vars['sidebar']->value=='left') {?> 
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-left-column.tpl", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=='right') {?>
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-right-column.tpl", null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['sidebar']->value=='no') {?>	
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable("layouts/layout-full-width.tpl", null, 0);?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jpb_productlayout']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("catalog/".((string)$_smarty_tpl->tpl_vars['jpb_productlayout']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-585b980bd32999fe"></script><?php }} ?>
