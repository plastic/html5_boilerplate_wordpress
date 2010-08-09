    <footer>
		
		<?php if(show_sidebar_at('footer')) { get_sidebar ('footer'); } ?>
		
    	<p class="right"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a> | <?php wp_register('', ' |'); ?> <?php wp_loginout(); ?></a> <?php wp_meta(); ?></p>
    	<p>&copy; Company Name</p>	
    </footer>
  </div>
  <?php wp_footer(); ?>

</body>
</html>