<?php
get_header();
?>

<?php if( have_rows('flexible_content') ): ?>
	<?php while( have_rows('flexible_content') ): the_row(); ?>
			<?php if( get_row_layout() == 'banner_image'): ?>
				<?php	$banner_image =	get_sub_field('image');
						if(!empty($banner_image)) {
						?>
              <figure class="banner-image-about-us">
                <img src="<?php the_sub_field('image'); ?>" alt="banner image">
              </figure>
						<?php } ?>
			<?php endif; ?>

			<?php if( get_row_layout() == 'banner_description'): ?>
				<?php	$banner_description =	get_sub_field('description');
						if(!empty($banner_description)) {
						?>
              <div class="banner-description-about-us">
                <?php the_sub_field('description'); ?>
              </div>
						<?php } ?>
			<?php endif; ?>

			<?php if( get_row_layout() == 'add_image'): ?>
				<?php	$page_image =	get_sub_field('page_image');
						if(!empty($page_image)) {
						?>
              <figure class="page-image-about-us">
                <img src="<?php the_sub_field('page_image'); ?>" alt="banner image">
              </figure>
						<?php } ?>
			<?php endif; ?>

			<?php if( get_row_layout() == 'add_text'): ?>
				<?php	$add_text =	get_sub_field('text');
						if(!empty($add_text)) {
						?>
              <div class="add-text-about-us">
                <?php the_sub_field('text'); ?>
              </div>
						<?php } ?>
			<?php endif; ?>

			<?php if( get_row_layout() == 'add_title'): ?>
				<?php	$add_title =	get_sub_field('title');
						if(!empty($add_title)) {
						?>
              <h2 class="add-title-about-us">
                <?php the_sub_field('title'); ?>
							</h2>
						<?php } ?>
			<?php endif; ?>

			<?php if( get_row_layout() == 'add_image-text'): ?>
				<div class="image-text-about-us">
					<?php	$single_image =	get_sub_field('image');
							if(!empty($single_image)) {
							?>
								<figure class="single-image-about-us">
									<img src="<?php the_sub_field('image'); ?>" alt="image">
								</figure>
							<?php } ?>
					<?php	$single_text =	get_sub_field('text');
							if(!empty($single_text)) {
							?>
								<div class="single-text-about-us">
									<?php the_sub_field('text'); ?>
								</div>
							<?php } ?>
				</div>
			<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();

