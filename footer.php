			<footer>
				<?php if(show_footer_title()) { ?><h3><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h3><?php } ?>
				<?php if(show_sidebar_at('footer')) { get_sidebar ('footer'); } ?>
				<p class="meta"> <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a> | <?php wp_register('', ' |'); ?> <?php wp_loginout(); ?></a> <?php wp_meta(); ?> </p>
				<p class="copyright"> Copyright &copy; <?php echo date('Y').' '; ?> <?php echo get_option('company_name'); ?> All Rights Reserved </p>
				<?php if(get_option('site_credit') !="" ) { ?><p class="credit"><?php echo get_option('site_credit'); ?></p><?php } ?>
				<?php 
					if(get_option('custom_menus') !="" ) 
					{ 
						$custom_menus = explode(",", strip_tags(get_option('custom_menus')));
						foreach($custom_menus as $menu) 
						{
							wp_nav_menu( array('menu' => $menu) );
						}
					} ?>

			</footer>
		</div>
		<?php wp_footer(); ?>
	</div>
</body>
</html>