<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title><?php
			// Returns the title based on the type of page being viewed -- jeebus this is a mess.
			if (is_single()){ single_post_title(); echo ' | ';  bloginfo( 'name' );
			} elseif (is_home() || is_front_page()){ bloginfo( 'name' ); if(get_bloginfo( 'description' )){ echo ' | ' ; bloginfo( 'description' ); }
			} elseif ( is_page()   ){ single_post_title( '' ); echo ' | '; bloginfo( 'name' );
			} elseif ( is_search() ){ printf( __( 'Search results for "%s"', 'twentyten' ), get_search_query() ); twentyten_the_page_number(); echo ' | '; bloginfo( 'name' );
			} elseif ( is_404()    ){ _e( 'Not Found', 'twentyten' ); echo ' | '; bloginfo( 'name' );
			} else { wp_title( '' ); echo ' | '; bloginfo( 'name' ); twentyten_the_page_number(); }
		?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<link rel="alternate"  href="<?php bloginfo('rss2_url'); ?>"    type="application/rss+xml"  title="RSS 2.0" />
		<link rel="alternate"  href="<?php bloginfo('rss_url'); ?>"     type="text/xml" 			title="RSS .92" />
		<link rel="alternate"  href="<?php bloginfo('atom_url'); ?>"    type="application/atom+xml" title="Atom 0.3" />
		<link rel="pingback"   href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_head(); ?>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if IE 6]>
	    	<script src="<?php bloginfo('template_directory'); ?>/js/pngfix.js"></script>
	    	<script> // DD_belatedPNG.fix('#header li a');</script>
	  	<![endif]-->
	</head>
	
	<body <?php if(is_front_page()): ?>id="home"<?php endif; ?> <?php body_class(); ?>>

		<header role="banner">
			<hgroup>
				<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
					<?php wp_list_pages('title_li=&depth=1'); ?>
				</ul>
			</nav>
		</header>