<?php
//Main template file.

get_header();
?>

<div>
<span>hello woldrd</span>
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