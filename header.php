<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php
		// Returns the title based on the type of page being viewed -- jeebus this is a mess.
		if (is_single()){ single_post_title(); echo ' | ';  bloginfo( 'name' );
		} elseif (is_home() || is_front_page()){ bloginfo( 'name' ); if(get_bloginfo( 'description' )){ echo ' | ' ; bloginfo( 'description' ); }
		} elseif ( is_page() ){ single_post_title( '' ); echo ' | '; bloginfo( 'name' );
		} elseif ( is_search() ){ printf( __( 'Search results for "%s"', '' ), get_search_query() ); echo ' | '; bloginfo( 'name' );
		} elseif ( is_404() ){ _e( 'Not Found', '' ); echo ' | '; bloginfo( 'name' );
		} else { wp_title(''); echo ' | '; bloginfo( 'name' ); }
	?></title>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="alternate"  href="<?php bloginfo('rss2_url'); ?>"    type="application/rss+xml"  title="RSS 2.0" />
	<link rel="alternate"  href="<?php bloginfo('rss_url'); ?>"     type="text/xml" 			title="RSS .92" />
	<link rel="alternate"  href="<?php bloginfo('atom_url'); ?>"    type="application/atom+xml" title="Atom 0.3" />
	<link rel="pingback"   href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body <?php if(is_front_page()): ?>id="home"<?php endif; ?> <?php body_class(); ?>>
	<div id="container">
		<header role="banner">
			<hgroup>
				<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</hgroup>

			<nav id="primary">
				<?php wp_nav_menu( array('menu' => 'Primary Navigation' )); ?>
			</nav>

			<nav id="utility">
				<?php 
					// If you have navigation created called "Utility Navigation", uncomment this for it to show up
					// wp_nav_menu( array('menu' => 'Utility Navigation' )); 
				?>
				<?php if(show_search_form()){ include (TEMPLATEPATH . "/searchform.php"); } ?>
			</nav>
		</header>
		
