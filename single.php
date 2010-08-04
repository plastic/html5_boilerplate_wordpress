<?php get_header(); ?>
<div id="contentwrap">
	
	<div id="content">			
    
  	<?php if (have_posts()) : ?>

  	  <?php while (have_posts()) : the_post(); ?>
		    <div class="post" id="post-<?php the_ID(); ?>">
			    <h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
			    <small><?php the_time('m/j/y') ?> | <?php the_time() ?></small>
				  <?php the_content('<p>Continue reading &raquo;</p>'); ?>
				  <div class="navigation">
					  <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
					  <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
				  </div>
  				<p class="postmetadata alt">
    				<small>Category: <?php the_category(', ') ?> | <?php the_tags( 'Tags: ', ', ', ''); ?><br />
    				<?php comments_rss_link('Get the feed'); ?> |  
						
    				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
      				<!-- Both Comments and Pings are open -->
      				<a href="#respond">Comment</a> | <a href="<?php trackback_url(true); ?>" rel="trackback">Trackback</a>
						
    				<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
    				  <!-- Only Pings are Open -->
    				  Comments are closed. Feel free to <a href="<?php trackback_url(true); ?> " rel="trackback">Trackback</a> intsead!
						
    				<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
    				  <!-- Comments are open, Pings are not -->
    				  Pinging is currently disabled.
			
    				<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
    				  <!-- Neither Comments, nor Pings are open -->
    				  Comments and pings are currently closed.			
						
    				<?php } edit_post_link('Moderate','| ',''); ?></small>
				  
    				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  				</p>
  		  </div>
  	    <div id="comments">
    		  <?php comments_template(); ?>
    	  </div>
  	  <?php endwhile; ?>
	 
	  <?php else: ?>
	
	    <p>Sorry, no posts matched your criteria.</p>
	
	  <?php endif; ?>
	
	</div>
	
  <?php get_sidebar(); ?>
  <?php get_sidebar ('right'); ?>

</div>
<?php get_footer(); ?>
