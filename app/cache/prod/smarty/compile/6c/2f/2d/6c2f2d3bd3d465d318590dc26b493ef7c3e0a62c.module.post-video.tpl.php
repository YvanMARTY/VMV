<?php /* Smarty version Smarty-3.1.19, created on 2019-02-06 18:41:04
         compiled from "module:xipblogdisplayposts/views/templates/front/post-video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13208468555c5b1c300c3196-74442468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2f2d3bd3d465d318590dc26b493ef7c3e0a62c' => 
    array (
      0 => 'module:xipblogdisplayposts/views/templates/front/post-video.tpl',
      1 => 1549187826,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '13208468555c5b1c300c3196-74442468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'videos' => 0,
    'videourl' => 0,
    'width' => 0,
    'height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c5b1c3012ce98_71772512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5b1c3012ce98_71772512')) {function content_5c5b1c3012ce98_71772512($_smarty_tpl) {?><div class="post_format_items <?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>">
	<?php if ((isset($_smarty_tpl->tpl_vars['videos']->value)&&!empty($_smarty_tpl->tpl_vars['videos']->value))) {?>
		<?php  $_smarty_tpl->tpl_vars['videourl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['videourl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['videourl']->key => $_smarty_tpl->tpl_vars['videourl']->value) {
$_smarty_tpl->tpl_vars['videourl']->_loop = true;
?>
			<div class="item post_video">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="<?php if (isset($_smarty_tpl->tpl_vars['videourl']->value)&&$_smarty_tpl->tpl_vars['videourl']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['videourl']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" width="<?php if (isset($_smarty_tpl->tpl_vars['width']->value)&&$_smarty_tpl->tpl_vars['width']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" height="<?php if (isset($_smarty_tpl->tpl_vars['height']->value)&&$_smarty_tpl->tpl_vars['height']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>"></iframe>
				</div>
			</div>
		<?php } ?>
	<?php }?>
</div><?php }} ?>