<?php /* Smarty version Smarty-3.1.19, created on 2018-01-26 08:35:09
         compiled from "D:\xampp\htdocs\jms_fluent\admin367i0kovu\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152415a6ae83d6e2d24-42150711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685478a456b2ceee370d97ba72f7c3686c085243' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\admin367i0kovu\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1508746756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152415a6ae83d6e2d24-42150711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6ae83d6eaa28_04773633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6ae83d6eaa28_04773633')) {function content_5a6ae83d6eaa28_04773633($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
