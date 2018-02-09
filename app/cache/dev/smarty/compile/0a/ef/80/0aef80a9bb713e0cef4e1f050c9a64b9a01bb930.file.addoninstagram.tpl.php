<?php /* Smarty version Smarty-3.1.19, created on 2018-02-04 13:15:45
         compiled from "D:\xampp\htdocs\jms_watch\themes\jms_watch\modules\jmspagebuilder\views\templates\hook\addoninstagram.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61385a770781cbd385-56073836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aef80a9bb713e0cef4e1f050c9a64b9a01bb930' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_watch\\themes\\jms_watch\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram.tpl',
      1 => 1516090205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61385a770781cbd385-56073836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'insta_images' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a770781cbd382_22410029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a770781cbd382_22410029')) {function content_5a770781cbd382_22410029($_smarty_tpl) {?>
<div class="addon-title">
	<h3>
		<?php echo smartyTranslate(array('s'=>'INSTAGRAM','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>

	</h3>
</div>
<div class="instagram-images">
	<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['insta_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
		<a class="grouped_elements" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" alt="<?php echo smartyTranslate(array('s'=>'Instagram Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
"/>
		</a>
	<?php } ?>
</div>
<?php }} ?>
