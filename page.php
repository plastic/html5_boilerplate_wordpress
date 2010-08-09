<?php get_header(); ?>
<div id="contentwrap">
	<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<div class="post" id="post-<?php the_ID(); ?>">
  			<h2><?php the_title(); ?></h2>
  			<?php the_content('<p>Continue reading &raquo;</p>'); ?>
  			<?php //if page is split into more than one
  			link_pages('<p class="continued">Pages: ', '</p>', 'number'); ?>
  		</div>
	  <?php endwhile; endif; ?>
		<?php edit_post_link('Edit', '<p>', '</p>'); ?>
  </div>
  <?php get_sidebar(); ?>
  <?php get_sidebar ('right'); ?>
</div>
<?php get_footer(); ?>