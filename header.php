<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title><?php if (is_single() || is_page() || is_archive()) { wp_title('',true); } else { bloginfo('name'); echo(' &#8212; '); bloginfo('description'); } ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom.css" type="text/css" media="screen" />
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie7.css" media="screen" />
	<![endif]-->
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6.css" media="screen" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); } ?>
	<?php wp_head(); ?>
</head>
<body class="custom">

<div id="container">

	<div id="masthead">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<h3><?php bloginfo('description'); ?></h3>
	</div>

	<ul id="nav">
		<li <?php if (is_home()) echo('class="current_page_item" '); ?>><a href="<?php bloginfo('url'); ?>">front page</a></li>
		<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
		<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
	</ul>
	
	<div id="header_img">
		<?php if (is_home()) { ?>
		<img src="<?php bloginfo('template_url'); ?>/images/header_1.jpg" width="770px" height="140px" alt="<?php bloginfo('name'); ?> header image 1" title="<?php bloginfo('name'); ?> header image 1" />
		<?php } elseif (is_single()) { ?>
		<img src="<?php bloginfo('template_url'); ?>/images/header_2.jpg" width="770"px height="140px" alt="<?php bloginfo('name'); ?> header image 2" title="<?php bloginfo('name'); ?> header image 2" />
		<?php } elseif (is_page()) { ?>
		<img src="<?php bloginfo('template_url'); ?>/images/header_3.jpg" width="770px" height="140px" alt="<?php bloginfo('name'); ?> header image 3" title="<?php bloginfo('name'); ?> header image 3" />
		<?php } elseif (is_archive()) { ?>
		<img src="<?php bloginfo('template_url'); ?>/images/header_4.jpg" width="770px" height="140px" alt="<?php bloginfo('name'); ?> header image 4" title="<?php bloginfo('name'); ?> header image 4" />
		<?php } else { ?>
		<img src="<?php bloginfo('template_url'); ?>/images/header_5.jpg" width="770px" height="140px" alt="<?php bloginfo('name'); ?> header image 5" title="<?php bloginfo('name'); ?> header image 5" />
		<?php } ?>
	</div>