<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="article" <?php post_class(); ?>>
    <?php if ( is_sticky() ) : ?><div class="post-title"><?php _e( 'Featured', 'simplestyle' ); ?></div><?php endif; ?>
	
	
	
	<?php the_content(); ?>
	
	<div class="clear"></div>
	
	
	<div id="comments"><?php comments_template('', true); ?> </div>
		
	</div>
	<div id="border-bottom"></div>
	
	
	<?php endwhile; ?> 
	<?php endif; ?>
	
		
	<?php get_footer(); ?>