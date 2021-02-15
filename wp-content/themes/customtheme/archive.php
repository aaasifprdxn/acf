<?php
//ARchive page

get_header();
?>

<div>
<span>archive page</span>
</div>
<?php

if ( have_posts() ) {
    while ( have_posts()) : the_post();
    the_title();
    the_content();
    endwhile;
}

?>
<?php
get_sidebar();
get_footer();