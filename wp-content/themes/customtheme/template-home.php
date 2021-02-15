<?php
/*
Template Name: Home Page Template
*/
get_header();
?>

<?php if( have_rows('banner') ): ?>
	<?php while( have_rows('banner') ): the_row(); ?>
			<?php if( get_row_layout() == 'banner_description'): ?>
				<?php	$description =	get_sub_field('description');
						if(!empty($description)) {
						?>
				<div class="banner-description">
					<?php the_sub_field('description'); ?>
				</div>
				<?php } ?>
			<?php endif; ?>
			<?php if( get_row_layout() == 'banner_image' ): ?>
				<?php	$banner_image =	get_sub_field('image');
						if(!empty($banner_image)) {
						?>
				<figure class="banner-image">
					<img src="<?php the_sub_field('image'); ?>" alt="banner image">
				</figure>
				<?php } ?>
			<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('home_news_section') ): ?>
	<?php while( have_rows('home_news_section') ): the_row(); ?>
			<?php if( get_row_layout() == 'news_categories' ): ?>
				<section class="world-news-section-home-template">
						<?php	$category_title =	get_sub_field('category_title');
						if(!empty($category_title)) {
						?>
					<h2 class="mobile-title-template-home"><?php the_sub_field('category_title');?></h2>
							<?php } ?>
					<?php
					$number_post = get_sub_field('number_of_post'); 
					$cat_id = get_sub_field('news_category');
					$category_name = get_cat_name( $cat_id );
					  $args = array(
    						'post_type' => 'post',
						    'post_status' => 'publish',
 							  'category_name' => $category_name,
    						'posts_per_page' => $number_post,
								);
					$loop = new WP_Query( $args );?>
					<div class="mobile-blog-container">
					<?php
					if ( $loop->have_posts() ) {
							while ( $loop->have_posts()) : $loop->the_post();?>
							<div class="blog-post-styling">
							<?php if( get_field('thumbnail') ): ?>
							<img src="<?php the_field('thumbnail'); ?>">
							<?php endif; ?>
							<span class="publish-date"><?php echo get_the_date(); ?>		<?php
							echo " | Category : ".$category_name;
							?>
							</span>
								<a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 12 ); ?></a>
								<a class="entry-date" href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
						</div>
						
					<?php endwhile; 
					}?>
					</div>
					<?php
					wp_reset_postdata();
					?>
				</section>
			<?php endif; ?>
	<?php endwhile; ?>
<?php endif; 
?>
<?php
get_footer();
