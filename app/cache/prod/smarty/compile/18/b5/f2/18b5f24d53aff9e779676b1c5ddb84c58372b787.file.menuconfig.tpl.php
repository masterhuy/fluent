<?php /* Smarty version Smarty-3.1.19, created on 2018-01-26 08:40:41
         compiled from "D:\xampp\htdocs\jms_fluent\modules\jmsmegamenu\views\templates\admin\jmsmegamenu_manager\menuconfig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37595a6ae989d4b221-89683307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18b5f24d53aff9e779676b1c5ddb84c58372b787' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_fluent\\modules\\jmsmegamenu\\views\\templates\\admin\\jmsmegamenu_manager\\menuconfig.tpl',
      1 => 1516090199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37595a6ae989d4b221-89683307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'JMSMM_MOUSEEVENT' => 0,
    'JMSMM_DURATION' => 0,
    'JMSMM_LOADBOOTSTRAPCSS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a6ae989d99422_56112217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6ae989d99422_56112217')) {function content_5a6ae989d99422_56112217($_smarty_tpl) {?>
<form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsmegamenuManager'),'html','UTF-8');?>
&configure=jmsmegamenu" method="post">
<div class="menu-config">
<h3>Menu Configuration</h3>
<ul>
    <li>
		<label data-placement="top" data-original-title="Mouse Event Trigger" class="label-tooltip">Menu Trigger</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSMM_MOUSEEVENT']->value=='hover') {?>checked="checked"<?php }?> value="hover" id="mouseevent_on" name="JMSMM_MOUSEEVENT">
			<label for="mouseevent_on">Hover</label>
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSMM_MOUSEEVENT']->value=='click') {?>checked="checked"<?php }?> value="click" id="mouseevent_off" name="JMSMM_MOUSEEVENT">
			<label for="mouseevent_off">Click</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Time for open and close dropdown(milisecond)" class="label-tooltip"> Duration</label>	
		<fieldset class="btn-group">
		<input type="text" name="JMSMM_DURATION" value="<?php echo $_smarty_tpl->tpl_vars['JMSMM_DURATION']->value;?>
" id="open-speed" />
		</fieldset>
	</li>
</ul>
<ul>
    <li>
		<label data-placement="top" data-original-title="Load Bootstrap Css File" class="label-tooltip">Load Bootstrap Css</label>
		<fieldset class="btn-group">
			<span class="switch prestashop-switch">
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSMM_LOADBOOTSTRAPCSS']->value==1) {?>checked="checked"<?php }?> value="1" id="loadbootstrap_on" name="JMSMM_LOADBOOTSTRAPCSS">
			<label for="loadbootstrap_on">Yes</label>
			<input type="radio" <?php if ($_smarty_tpl->tpl_vars['JMSMM_LOADBOOTSTRAPCSS']->value==0) {?>checked="checked"<?php }?> value="0" id="loadbootstrap_off" name="JMSMM_LOADBOOTSTRAPCSS">
			<label for="loadbootstrap_off">No</label>
			<a class="slide-button btn"></a>
			</span>
		</fieldset>	
	</li>
</ul>			
<ul>
    <li>
		<label>&nbsp;</label>	
		<fieldset class="btn-group">
		<button class="btn btn-success" name="submitConfig" id="btn-save-config" value="1" type="submit">
			Save Config
		</button>		
		</fieldset>
	</li>
</ul>
			
</div>
</form><?php }} ?>
