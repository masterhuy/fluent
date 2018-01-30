<?php /* Smarty version Smarty-3.1.19, created on 2018-01-30 08:09:02
         compiled from "D:\xampp\htdocs\jms_fluent\themes\jms_fluent\modules\jmswishlist\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32335a70281e8024c9-06620209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae8c1d230c14ae18a8a09c5aa07ba524b095df6b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\themes\\jms_fluent\\modules\\jmswishlist\\views\\templates\\hook\\my-account.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32335a70281e8024c9-06620209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a70281e80e044_26212464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a70281e80e044_26212464')) {function content_5a70281e80e044_26212464($_smarty_tpl) {?>

<!-- MODULE WishList -->
<a class=" wishlist_top lnk_wishlist col-lg-4 col-md-6 col-sm-6 col-xs-12" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('jmswishlist','mywishlist',array(),true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','d'=>'Shop.Theme'),$_smarty_tpl);?>
">
  <span class="link-item">
		<i class="fa fa-heart"></i>
		<?php echo smartyTranslate(array('s'=>'My wishlists','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>

	</span>
</a>
<!-- END : MODULE WishList --><?php }} ?>
