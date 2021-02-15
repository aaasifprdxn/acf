<?php
//single.php

get_header();
$taxonomy = 'category';
$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
 
if ( ! empty( $post_terms ) ) {
    $terms = wp_list_categories( array(
        'title_li' => '',
        'style'    => 'none',
        'echo'     => false,
        'taxonomy' => $taxonomy,
        'include'  => $post_terms	
    ) ); 
}

$wcatTerms = get_terms('category', array('hide_empty' => 0, 'parent' =>0));
?> 
<aside class="container-side-bar"> 
	<div class="side-bar-heading"><span>categories</span></div>
<?php
  foreach($wcatTerms as $wcatTerm) : 
?>
	 <div class="category-side-bar">
      <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></a>
		</div>
<?php 
   endforeach; 
?>
</aside	>
<div class="container-left-side">
<?php if( have_rows('post_content') ): ?>
	<?php while( have_rows('post_content') ): the_row(); ?>
			<?php if( get_row_layout() == 'heading'): ?>
        <?php	$post_heading =	get_sub_field('post_heading');
        if(!empty($post_heading)) {
          ?>
      <h2 class="title-left-side">
        <?php the_sub_field('post_heading'); ?>
      </h2>
      <div class="detail-post-date-category">
      <span ><?php echo get_the_date(); ?></span>
      <?php echo " | Category : ".$terms; ?>
      </div>
      <?php } ?>
		<?php endif; ?>
		<?php if( get_row_layout() == 'post_text'): ?>
			<?php	$post_text =	get_sub_field('text');
        if(!empty($post_text)) {
					?>
				<div class="new-page-text">
        <?php echo wp_trim_words( get_sub_field('text'), 100 ); ?>
				</div>
					<?php } ?>
				<?php endif; ?>
			<?php if( get_row_layout() == 'post_image'): ?>
					<?php	$single_image =	get_sub_field('image');
							if(!empty($single_image)) {
							?>
								<figure class="new-page-image">
									<img src="<?php the_sub_field('image'); ?>" alt="image">
								</figure>
							<?php } ?>
			<?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


</div>
<div class="content-left-side">
<?php

?>
</div>



<?php
get_footer();?>