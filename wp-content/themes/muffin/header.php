<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"  "http://www.w3.org/TR/html4/strict.dtd">
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head profile="http://gmpg.org/xfn/11">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>;chartset=<?php bloginfo('charset'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(); ?></title>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<? wp_nav_menu( array('menu' => 'cart_menu', 'fallback_cb' => false )); ?>

<div id="sidebar">
<?php get_sidebar(); ?>

</div><div class="clear"></div>
<div class="social"><ul class="soc">
<li class="vk"><a href="http://vk.com/muffin_handmade"></a></li> <li class="face"><a href="https://www.facebook.com/handmademuffin"></a></li> <li class="tweet"><a href="https://twitter.com/muffin_handmade"></a></li> <li class="inst"><a href="http://instagram.com/muffin_handmade#"></a></li></ul>  </div>
<div id="header"><a class="title" href="<?php echo esc_url( home_url() ); ?>"><img id="title" src="img/logo.png"></img></a></div>
<a class="who" href="http://diploma/?page_id=228"> Кто мы? </a>
	<div id="nav-container">
	<div id="nav"><div class="menu">
	<?php wp_nav_menu( array('theme_location' => 'header-nav', 'depth' => 0, 'menu_class' => 'nav' )); ?>
   
</div></div></div><div class="clear"></div>
<? dynamic_sidebar('Another Sidebar'); ?>

	
<div id="container">
	
	