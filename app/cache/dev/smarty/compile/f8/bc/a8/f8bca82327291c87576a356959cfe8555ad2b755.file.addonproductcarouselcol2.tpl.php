<?php /* Smarty version Smarty-3.1.19, created on 2018-02-07 10:37:51
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addonproductcarouselcol2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126775a7ad6ff74f4d5-77593715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8bca82327291c87576a356959cfe8555ad2b755' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addonproductcarouselcol2.tpl',
      1 => 1517999791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126775a7ad6ff74f4d5-77593715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cols' => 0,
    'cols_md' => 0,
    'cols_sm' => 0,
    'cols_xs' => 0,
    'navigation' => 0,
    'pagination' => 0,
    'autoplay' => 0,
    'addon_title' => 0,
    'products_slides' => 0,
    'products_slide' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7ad6ff7d0370_19448576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7ad6ff7d0370_19448576')) {function content_5a7ad6ff7d0370_19448576($_smarty_tpl) {?>
<script type="text/javascript">
	var p_items_a = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>4<?php }?>;
	var p_itemsDesktop_a = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>4<?php }?>;
	var p_itemsDesktopSmall_a = <?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>3<?php }?>;
	var p_itemsTablet_a = <?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>2<?php }?>;
	var p_itemsMobile_a = <?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>;
	var p_nav_a = <?php if ($_smarty_tpl->tpl_vars['navigation']->value==1) {?>true<?php } else { ?>false<?php }?>;
	var p_pag_a = <?php if ($_smarty_tpl->tpl_vars['pagination']->value==1) {?>true<?php } else { ?>false<?php }?>;
	var auto_play_carousel_a = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value==1) {?>true<?php } else { ?>false<?php }?>;
</script>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }?>	
<div class="product-carousel2">	
	<?php  $_smarty_tpl->tpl_vars['products_slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->key => $_smarty_tpl->tpl_vars['products_slide']->value) {
$_smarty_tpl->tpl_vars['products_slide']->_loop = true;
?>
		<div class="item ajax_block_product">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_slide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

			<?php } ?>
		</div>
		
	<?php } ?>
</div><?php }} ?>
