<?php /* Smarty version Smarty-3.1.19, created on 2018-01-30 08:07:29
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\modules\jmswishlist\jmswishlist-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99235a7027c1df0ab2-36290466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e28762fff96622bd7127052f943a244680ba450f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\modules\\jmswishlist\\jmswishlist-ajax.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99235a7027c1df0ab2-36290466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a7027c1e89055_34558563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7027c1e89055_34558563')) {function content_5a7027c1e89055_34558563($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
	<dl class="products" style="<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>border-bottom:1px solid #fff;<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
		<dt class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']) {?>last_item<?php } else { ?>item<?php }?>">
			<span class="quantity-formated"><span class="quantity"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
</span>x</span>
			<a class="cart_block_product_name" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" style="font-weight:bold;"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],13,'...'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
			<a class="ajax_cart_block_remove_link" href="javascript:;" onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
, '0');" title="<?php echo smartyTranslate(array('s'=>'remove this product from my wishlist','mod'=>'jmswishlist'),$_smarty_tpl);?>
" rel="nofollow"><img src="icon/delete.gif" width="12" height="12" alt="<?php echo smartyTranslate(array('s'=>'Delete','mod'=>'jmswishlist'),$_smarty_tpl);?>
" class="icon" /></a>
		</dt>
		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])) {?>
		<dd class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']) {?>last_item<?php } else { ?>item<?php }?>" style="font-style:italic;margin:0 0 0 10px;">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite']),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail','d'=>'Shop.Theme'),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['attributes_small'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a>
		</dd>
		<?php }?>
	<?php } ?>
	</dl>
<?php } else { ?>
	<dl class="products" style="font-size:10px;border-bottom:1px solid #fff;">
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value) {?>
		<dt><?php echo smartyTranslate(array('s'=>'You must create a wishlist before adding products','d'=>'Shop.Theme'),$_smarty_tpl);?>
</dt>
	<?php } else { ?>
		<dt><?php echo smartyTranslate(array('s'=>'No products','d'=>'Shop.Theme'),$_smarty_tpl);?>
</dt>
	<?php }?>
	</dl>
<?php }?>
<?php }} ?>
