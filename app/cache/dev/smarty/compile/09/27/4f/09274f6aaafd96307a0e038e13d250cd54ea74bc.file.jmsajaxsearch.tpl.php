<?php /* Smarty version Smarty-3.1.19, created on 2018-02-02 07:41:56
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmsajaxsearch\views\templates\hook\jmsajaxsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199795a74164457eb64-76523046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09274f6aaafd96307a0e038e13d250cd54ea74bc' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmsajaxsearch\\views\\templates\\hook\\jmsajaxsearch.tpl',
      1 => 1516243109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199795a74164457eb64-76523046',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jpb_homepage' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7416445923e7_57851115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7416445923e7_57851115')) {function content_5a7416445923e7_57851115($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==6) {?>
	<div class="btn-group compact-hidden jms_ajax_search" id="jms_ajax_search">
	<div class="search-box">
	<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
		<span class="search-frm"></span>
	</a>
		
			<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl);?>
" class="form-control ajax_search" />
			</form>
			<div id="search_result">
			</div>
		</div>	
	</div>
<?php } else { ?>
<div class="btn-group compact-hidden jms_ajax_search" id="jms_ajax_search">
	<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
		<span class="search-frm"></span>
	</a>
		<div class="dropdown-menu search-box" role="menu">	
			<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl);?>
" class="form-control ajax_search"  />
			
			 <button type="submit" name="submit_search" class="button-search pe pe-7s-search">
				
		    </button></form>
			<div id="search_result">
			</div>
		</div>	
	</div>
<?php }?>
<?php }} ?>
