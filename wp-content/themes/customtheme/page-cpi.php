<?php 
get_header();
?>
<?php //Banner Section ?>
<?php if( have_rows('banner_content') ): ?>
	<?php while( have_rows('banner_content') ): the_row(); ?>
			<?php if( get_row_layout() == 'banner_image'): ?>
				<?php	$banner_image =	get_sub_field('image');
						if(!empty($banner_image)) {
						?>
              <figure class="banner-image-cpi">
                <img src="<?php the_sub_field('image'); ?>" alt="banner image">
              </figure>
						<?php } ?>
			<?php endif; ?>

			<?php if( get_row_layout() == 'heading_1'): ?>
				<?php	$heading1 =	get_sub_field('text');
						if(!empty($heading1)) {
						?>
              <div class="banner-heading1-cpi">
                <?php the_sub_field('text'); ?>
              </div>
						<?php } ?>
			<?php endif; ?>

			<?php if( get_row_layout() == 'heading_2'): ?>
				<?php	$heading2 =	get_sub_field('text');
						if(!empty($heading2)) {
						?>
              <div class="banner-heading2-cpi">
                <?php the_sub_field('text'); ?>
              </div>
						<?php } ?>
			<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>


<?php //core business section ?>
<?php if( have_rows('core_business') ): ?>
	<?php while( have_rows('core_business') ): the_row(); ?>
			<?php if( get_row_layout() == 'icon'): ?>
				<?php	$icon =	get_sub_field('image');
						if(!empty($banner_image)) {
						?>
              <figure class="core-icon-cpi">
                <img src="<?php the_sub_field('image'); ?>" alt="icon image">
              </figure>
						<?php } ?>
			<?php endif; ?>

			<?php if( get_row_layout() == 'main_heading'): ?>
				<?php	$heading1 =	get_sub_field('heading');
						if(!empty($heading1)) {
						?>
              <div class="core-heading1-cpi">
                <?php the_sub_field('heading'); ?>
              </div>
						<?php } ?>
			<?php endif; ?>

			<?php if( get_row_layout() == 'heading_2'): ?>
				<?php	$heading1 =	get_sub_field('heading');
						if(!empty($heading1)) {
						?>
              <div class="core-heading2-cpi">
                <?php the_sub_field('heading'); ?>
              </div>
						<?php } ?>
			<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
?>