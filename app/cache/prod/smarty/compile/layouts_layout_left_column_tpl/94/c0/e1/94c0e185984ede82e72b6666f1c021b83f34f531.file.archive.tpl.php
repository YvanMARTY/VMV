<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "/var/www/visite-ma-ville.fr/www/modules/xipblog/views/templates/front/default/archive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12695017445cd433bd67ed13-72245156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c0e185984ede82e72b6666f1c021b83f34f531' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/modules/xipblog/views/templates/front/default/archive.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    'c8c8cc428f2db9f9d9d306718d5440978d6bec66' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/page.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    '283c19b3300ddc27989edd17c4f9e94aee916066' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/layouts/layout-left-column.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    'f2a72c88835096ab38458fe67cb7b4647498e612' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/layouts/layout-both-columns.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    '09259f0857835b45052493c8dc840b1bba2afa97' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/stylesheets.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    '3416e458d00772fccf504ec9305e26c6dca07043' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/javascript.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    'db4d5fa15afda6f4340566d43c085d0e6ccce40d' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/head.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    '7980b3ed6aeb63c7ab92072e7838408f3ff26cc7' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/catalog/_partials/product-activation.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    '2a849026458bed2e6481f1fd9e7d11ea450cb324' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/header.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    '4a2a1a14086bf183f8325438c5799f5dd1d2bfab' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/notifications.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    'b9d984c260d26fa568af6bffdcbcad799a33b2dc' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/breadcrumb.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
    'e5be8953923cdc26e71f74b92791be1c286c4636' => 
    array (
      0 => 'module:xipblog/views/templates/front/default/post-video.tpl',
      1 => 1549187826,
      2 => 'module',
    ),
    '1c1527509a4538e3ed9db97c86362100187b599e' => 
    array (
      0 => 'module:xipblog/views/templates/front/default/post-audio.tpl',
      1 => 1549187826,
      2 => 'module',
    ),
    '313e8b012e7b09a5d95be7dc26c6290f82420914' => 
    array (
      0 => 'module:xipblog/views/templates/front/default/post-gallery.tpl',
      1 => 1549187826,
      2 => 'module',
    ),
    '5ec344e66c6eddfab2140e008da0118640dece07' => 
    array (
      0 => 'module:xipblog/views/templates/front/default/pagination.tpl',
      1 => 1549187826,
      2 => 'module',
    ),
    '336ece62652403730a7596f772752c4da236ed1d' => 
    array (
      0 => '/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/footer.tpl',
      1 => 1549187826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12695017445cd433bd67ed13-72245156',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5cd433be27c326_74159666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd433be27c326_74159666')) {function content_5cd433be27c326_74159666($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/visite-ma-ville.fr/www/vendor/prestashop/smarty/plugins/modifier.date_format.php';
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bd792bf5_91348802($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>sub-page<?php }?>">

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

    <main>
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bd94a762_02678839($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bd97f800_46505595($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
	  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='index') {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

		<div class="blockPosition1">
			<div class="container">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition1'),$_smarty_tpl);?>

			</div>
		</div>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition2'),$_smarty_tpl);?>

		<div class="blockPosition3">
			<div class="container">
				<div class="row">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition3'),$_smarty_tpl);?>

				</div>
			</div>
		</div>
	  <?php }?>
      
        <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bd9f2e27_27689657($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
      
      <div id="wrapper">
		
<div class="breadcrumb_container">
	<div class="container">
  <nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count']+2, ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
      <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
          </a>
          <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
        </li>
      <?php } ?>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<span itemprop="name">Blog</span>
		</li>
    </ol>
  </nav>
    	</div>
</div>

        <div class="inner-wrapper container">
			<div class="row">
			  
				<div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
				  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='product') {?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayLeftColumnProduct'),$_smarty_tpl);?>

				  <?php } else { ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayLeftColumn"),$_smarty_tpl);?>

				  <?php }?>
				</div>
			  

			  
  <div id="content-wrapper" class="left-column col-xs-12 col-sm-8 col-md-9">
    

  <div id="main">

    
      
    

    
      <section id="content" class="page-content card card-block">
        
        
<?php if (isset($_smarty_tpl->tpl_vars['xipblogpost']->value)&&!empty($_smarty_tpl->tpl_vars['xipblogpost']->value)) {?>
<section class="kr_blog_post_area">
	<div class="kr_blog_post_inner">
		<?php  $_smarty_tpl->tpl_vars['xpblgpst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['xpblgpst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xipblogpost']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['xpblgpst']->key => $_smarty_tpl->tpl_vars['xpblgpst']->value) {
$_smarty_tpl->tpl_vars['xpblgpst']->_loop = true;
?>
			<article id="blog_post" class="blog_post blog_post_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format'], ENT_QUOTES, 'UTF-8');?>
 clearfix">
				<div class="blog_post_content">
					<div class="blog_post_content_top">
						<div class="post_thumbnail">
						
							<?php if ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format']=='video') {?>
								<?php $_smarty_tpl->tpl_vars["postvideos"] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['xpblgpst']->value['video']), null, 0);?>
								<?php if (count($_smarty_tpl->tpl_vars['postvideos']->value)>1) {?>
									<?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable('carousel', null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable('', null, 0);?>
								<?php }?>
								<?php /*  Call merged included template "module:xipblog/views/templates/front/default/post-video.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:xipblog/views/templates/front/default/post-video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('postvideos'=>$_smarty_tpl->tpl_vars['postvideos']->value,'width'=>'870','height'=>"482",'class'=>$_smarty_tpl->tpl_vars['class']->value), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bdc1e027_53264205($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:xipblog/views/templates/front/default/post-video.tpl" */?>
							<?php } elseif ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format']=='audio') {?>
								<?php $_smarty_tpl->tpl_vars["postaudio"] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['xpblgpst']->value['audio']), null, 0);?>
								<?php if (count($_smarty_tpl->tpl_vars['postaudio']->value)>1) {?>
									<?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable('carousel', null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable('', null, 0);?>
								<?php }?>
								<?php /*  Call merged included template "module:xipblog/views/templates/front/default/post-audio.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:xipblog/views/templates/front/default/post-audio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('postaudio'=>$_smarty_tpl->tpl_vars['postaudio']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bdcea077_69284218($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:xipblog/views/templates/front/default/post-audio.tpl" */?>
							<?php } elseif ($_smarty_tpl->tpl_vars['xpblgpst']->value['post_format']=='gallery') {?>
								<?php if (count($_smarty_tpl->tpl_vars['xpblgpst']->value['gallery_lists'])>1) {?>
									<?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable('carousel', null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable('', null, 0);?>
								<?php }?>
								<?php /*  Call merged included template "module:xipblog/views/templates/front/default/post-gallery.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:xipblog/views/templates/front/default/post-gallery.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('gallery_lists'=>$_smarty_tpl->tpl_vars['xpblgpst']->value['gallery_lists'],'imagesize'=>"large",'class'=>$_smarty_tpl->tpl_vars['class']->value), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bdda8ff0_57117762($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:xipblog/views/templates/front/default/post-gallery.tpl" */?>
							<?php } else { ?>
								<img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_img_large'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
">
								<div class="blog_mask">
									<div class="blog_mask_content">
										<a class="thumbnail_lightbox" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_img_large'], ENT_QUOTES, 'UTF-8');?>
">
											<i class="icon_plus"></i>
										</a>										
									</div>
								</div>
							<?php }?>
						
						</div>
					</div>
					<div class="post_content">
						<h3 class="post_title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_title'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
						<div class="post_meta clearfix">
							<p class="meta_author">
								<?php echo smartyTranslate(array('s'=>'Posted by ','mod'=>'xipblog'),$_smarty_tpl);?>

								<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_author_arr']['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['post_author_arr']['lastname'], ENT_QUOTES, 'UTF-8');?>
</span>
							</p>
							<p class="meta_date">
								<?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['xpblgpst']->value['post_date'],"%b %dTH, %Y"), ENT_QUOTES, 'UTF-8');?>

							</p>
							<p class="meta_category">
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['category_default_arr']['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['category_default_arr']['name'], ENT_QUOTES, 'UTF-8');?>
</a>
							</p>
						</div>
						<div class="post_description">
							<?php if (isset($_smarty_tpl->tpl_vars['xpblgpst']->value['post_excerpt'])&&!empty($_smarty_tpl->tpl_vars['xpblgpst']->value['post_excerpt'])) {?>
								<p><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['xpblgpst']->value['post_excerpt'],500,'...'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
							<?php } else { ?>
								<p><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['xpblgpst']->value['post_content'],400,'...'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
							<?php }?>
						</div>
						<div class="read_more">
							<a class="more" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['xpblgpst']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Continue','mod'=>'xipblog'),$_smarty_tpl);?>
 <i class="arrow_right"></i></a>
						</div>
					</div>
				</div>
			</article>
		<?php } ?>
	</div>
</section>
<?php }?>
<?php /*  Call merged included template "module:xipblog/views/templates/front/default/pagination.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("module:xipblog/views/templates/front/default/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bdeb90c0_66396974($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "module:xipblog/views/templates/front/default/pagination.tpl" */?>

      </section>
    

    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </div>

  </div>


			  
			</div>
        </div>
      </div>
	  <div class="blockPosition4">
	  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBlockPosition4'),$_smarty_tpl);?>

	  </div>
      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433be25f9f4_92861621($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </main>

    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

	<div class="back-top"><a href= "#" class="back-top-button"></a></div>

  </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bd792bf5_91348802')) {function content_5cd433bd792bf5_91348802($_smarty_tpl) {?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">

  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bd820659_34590186($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bd876950_09281156($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '12695017445cd433bd67ed13-72245156');
content_5cd433bd876950_09281156($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bd820659_34590186')) {function content_5cd433bd820659_34590186($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">

<?php } ?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bd876950_09281156')) {function content_5cd433bd876950_09281156($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "/var/www/visite-ma-ville.fr/www/themes/vmv/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bd94a762_02678839')) {function content_5cd433bd94a762_02678839($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bd97f800_46505595')) {function content_5cd433bd97f800_46505595($_smarty_tpl) {?>

  <nav class="header-nav">
    <div class="container-fluid">
		  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav'),$_smarty_tpl);?>

    </div>
  </nav>



  <div class="header-top scroll_menu">
    <div class="container-fluid">
       <div class="row">
	    <div class=" menu_block col-xs-12 col-md-5 col-lg-5">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayMegamenu'),$_smarty_tpl);?>

        </div>
        <div class="col-xs-12 col-md-2 col-lg-2" id="header_logo">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
        <div class="col-xs-12 col-md-5 col-lg-5 display_top">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

			<div class="setting_top dropdown js-dropdown">
				<span class="icon-setting current" data-toggle="dropdown"></span>
				<div class="content-setting dropdown-menu">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNav1'),$_smarty_tpl);?>

				</div>
			</div>
        </div>
      </div>
    </div>
  </div>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bd9f2e27_27689657')) {function content_5cd433bd9f2e27_27689657($_smarty_tpl) {?>

<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <article class="alert alert-danger" role="alert" data-alert="danger">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <article class="alert alert-warning" role="alert" data-alert="warning">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <article class="alert alert-success" role="alert" data-alert="success">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <article class="alert alert-info" role="alert" data-alert="info">
        <ul>
          <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
            <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      </article>
    <?php }?>
  </div>
</aside>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bda85ac5_47165304')) {function content_5cd433bda85ac5_47165304($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value['count']!=1) {?>
<div class="breadcrumb_container">
	<div class="container">
		<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
		  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
			<?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
			  <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
				  <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
				</a>
				<meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
			  </li>
			<?php } ?>
		  </ol>
		</nav>
	</div>
</div>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "module:xipblog/views/templates/front/default/post-video.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bdc1e027_53264205')) {function content_5cd433bdc1e027_53264205($_smarty_tpl) {?><div class="post_format_items <?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>">
<?php if (isset($_smarty_tpl->tpl_vars['postvideos']->value)&&$_smarty_tpl->tpl_vars['postvideos']->value) {?>
<?php  $_smarty_tpl->tpl_vars['videourl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['videourl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postvideos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['videourl']->key => $_smarty_tpl->tpl_vars['videourl']->value) {
$_smarty_tpl->tpl_vars['videourl']->_loop = true;
?>
	<div class="item post_video ">
	<div class="embed-responsive embed-responsive-16by9 ">
		<iframe class="embed-responsive-item" src="<?php if (isset($_smarty_tpl->tpl_vars['videourl']->value)&&$_smarty_tpl->tpl_vars['videourl']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['videourl']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" width="<?php if (isset($_smarty_tpl->tpl_vars['width']->value)&&$_smarty_tpl->tpl_vars['width']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" height="<?php if (isset($_smarty_tpl->tpl_vars['height']->value)&&$_smarty_tpl->tpl_vars['height']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" frameborder="0"></iframe>
	</div>
	</div>
<?php } ?>
<?php }?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "module:xipblog/views/templates/front/default/post-audio.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bdcea077_69284218')) {function content_5cd433bdcea077_69284218($_smarty_tpl) {?><div class="post_format_items <?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>">
<?php if (isset($_smarty_tpl->tpl_vars['postaudio']->value)&&$_smarty_tpl->tpl_vars['postaudio']->value) {?>
<?php  $_smarty_tpl->tpl_vars['audiourl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['audiourl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['postaudio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['audiourl']->key => $_smarty_tpl->tpl_vars['audiourl']->value) {
$_smarty_tpl->tpl_vars['audiourl']->_loop = true;
?>
	<div class="item post_audio ">
	<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="<?php if (isset($_smarty_tpl->tpl_vars['audiourl']->value)&&$_smarty_tpl->tpl_vars['audiourl']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['audiourl']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" width="<?php if (isset($_smarty_tpl->tpl_vars['width']->value)&&$_smarty_tpl->tpl_vars['width']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" height="<?php if (isset($_smarty_tpl->tpl_vars['height']->value)&&$_smarty_tpl->tpl_vars['height']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['height']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" frameborder="0"></iframe>
	</div>
	</div>
<?php } ?>
<?php }?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "module:xipblog/views/templates/front/default/post-gallery.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bdda8ff0_57117762')) {function content_5cd433bdda8ff0_57117762($_smarty_tpl) {?><div class="post_format_items post_gallery <?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>">
<?php if (isset($_smarty_tpl->tpl_vars['gallery_lists']->value)&&$_smarty_tpl->tpl_vars['gallery_lists']->value) {?>
<?php  $_smarty_tpl->tpl_vars['galleryimg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['galleryimg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['galleryimg']->key => $_smarty_tpl->tpl_vars['galleryimg']->value) {
$_smarty_tpl->tpl_vars['galleryimg']->_loop = true;
?>
	<div class="post_gallery_img item">
		<img class="xipblog_img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['galleryimg']->value[$_smarty_tpl->tpl_vars['imagesize']->value], ENT_QUOTES, 'UTF-8');?>
" alt="">
	</div>
<?php } ?>
<?php }?>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:49
         compiled from "module:xipblog/views/templates/front/default/pagination.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433bdeb90c0_66396974')) {function content_5cd433bdeb90c0_66396974($_smarty_tpl) {?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-05-09 16:05:50
         compiled from "/var/www/visite-ma-ville.fr/www/themes/vmv/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5cd433be25f9f4_92861621')) {function content_5cd433be25f9f4_92861621($_smarty_tpl) {?><div class="container">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

	
</div>
<?php }} ?>
