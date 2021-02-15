



<?php



get_header();
?>
<form class="js-form-filter">
<select>
<?php
$wcatTerms = get_terms('sport_cat', array('hide_empty' => 0, 'parent' =>0)); 
   foreach($wcatTerms as $wcatTerm) : 
   ?>
   <option class="js-filter-item" value="<?= $wcatTerm->term_id; ?>">
		<?= $wcatTerm->name; ?>
	 
	 </option>

<?php 
   endforeach;
	 ?> 
</select>
</form>
<div class="js-filter">
<main>
<?php
$args = array (
	'post_type' => 'sport',
);

$query = new WP_Query($args);
if($query->have_posts()) :
	while($query->have_posts()) : $query->the_post();?>
	<div id="demo">
	<a href=""><?php the_title(); ?>
	<?php the_content(); ?>
	</div>
	<?php
	endwhile;
endif;
?>
</main>
</div>
<?php
  get_footer();
?>