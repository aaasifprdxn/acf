<?php

get_header();
?>
<div class="mobile-blog-container">
<?php
if ( have_posts() ) {
    while ( have_posts()) : the_post();?>
		<div class="blog-post-styling">
		<?php if( get_field('thumbnail') ): ?>
  	<img src="<?php the_field('thumbnail'); ?>">
		<?php endif; ?>
		<span class="publish-date"><?php echo get_the_date(); ?>		<?php
		$the_cat = get_the_category();
		$category_name = $the_cat[0]->cat_name;
		$category_link = get_category_link( $the_cat[0]->cat_ID );
		echo " | Category : ".$category_name;
		?>
		</span>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<a class="entry-date" href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
	</div>
	
<?php endwhile; 
}?>
</div>
<?php
wp_reset_postdata();

get_footer();
?>
