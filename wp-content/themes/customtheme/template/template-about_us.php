<?php
/* Template Name: About Us */

get_header();
//getting content from about us page
if ( !empty( get_the_content() ) ) {
	the_content();
}
//goal section
?>
<section class="goal-section-about-us">
	<h2>company Goal</h2>
	<div class="goal-image-text">
		<figure>
			<img src="<?php the_field('company_picture'); ?>" alt="company picture">
		</figure>
		<div class="goal-text-field">
			<?php the_field('goal'); ?>
		</div>
	</div>
</section>

<section class="achievement-section-about-us">
	<h2>achievements</h2>
	<div class="achievement-image-text">
		<figure>
			<img src="<?php the_field('achievement_picture'); ?>" alt="company picture">
		</figure>
		<div class="achievement-text-field">
			<?php the_field('achievements'); ?>
		</div>
	</div>
</section>
<?php
get_footer();
