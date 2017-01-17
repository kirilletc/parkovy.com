<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' );  ?>">
	
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="designer" content="mayday1022 http://mayday1022.ru">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<title><?php typical_title();?></title>
	<?php wp_head();?>
	
	<!--<script type= "text/javascript">
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	
	</script>
	-->
</head>
<body>
<div id="wptime-plugin-preloader"></div>
<!--<div class="se-pre-con"></div>-->

<div class="main">
	<div id="header" class="header">
		<div class="wrapper">
		<span class="buttonmenu" >
				<i></i>
				<i></i>
				<i></i>
		</span>
		<a href="/" class="logo"><img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt=""/><span><strong style="color: #1ebc87;">Коммерческий Центр Парковый</strong><br>Регистрация медицинских изделий<br>
	Испытания медицинского оборудования</span></a>
		
			<?php $args = array( 
				'container'=> false, 
				'menu_class' => 'top-menu',
				'menu_id' => 'top-menu',
				);
				wp_nav_menu($args); 
			?>
		
		<div class="phone">
		<label><?php echo get_theme_mod('textbox_2', 'Есть вопросы? Звоните - поможем'); ?></label>
		<span class="ringo-phone"><a href="tel:+7 (495) 689-97-38" style="text-decoration: none"><span><?php echo get_theme_mod('textbox_1', '+7 (495) 407-06-22'); ?></span></a></span>
		<a href="#call" class="fancybox hidemob">Перезвоните мне</a>
		
		
		</div>
		
		</div>
	</div>