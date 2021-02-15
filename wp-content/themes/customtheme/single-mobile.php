<?php
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
?>

<div class="mobile-title">
	 <h1><?php the_title(); ?></h1>
</div>

<div class="detail-post-date-category">
<span ><?php echo get_the_date(); ?></span>
<?php
$the_cat = get_the_category();
$category_name = $the_cat[0]->cat_name;
$category_link = get_category_link( $the_cat[0]->cat_ID );
echo " | Category : ".$terms;
?>
</div>


<?php
if( get_field('photo') ): ?>
  <img src="<?php the_field('photo'); ?>" class="mobile-page-image">
<?php endif; 
the_content();
?>

<table>
	<tbody>
		<tr>
			<td>
				mobile company
			</td>
			<td>
			<?php the_field('mobile_company');	 ?>
			</td>
		</tr>
		<tr>
			<td>
				model number
			</td>
			<td>
			<?php the_field('mobile_model_name'); ?>
			</td>
		</tr>
		<tr>
			<td>
				processor

			</td>
			<td>
			<?php the_field('processor');?>
			</td>
		</tr>
		<tr>
			<td>
				ram
			</td>
			<td>
			<?php the_field('ram');?>
			</td>
		</tr>
		<tr>
			<td>
				price
			</td>
			<td>
			<?php the_field('price'); ?>
			</td>
		</tr>
	</tbody>
</table>

<?php
get_footer();