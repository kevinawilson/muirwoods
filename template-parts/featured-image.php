<?php
// If a featured image is set, insert into layout and use Interchange
// to select the optimal image size per named media query.
if ( has_post_thumbnail( $post->ID ) ) : ?>
    <header class="featured-hero" role="banner" data-interchange="[<?php echo the_post_thumbnail_url('featured-small'); ?>, small], [<?php echo the_post_thumbnail_url('featured-medium'); ?>, medium], [<?php echo the_post_thumbnail_url('featured-large'); ?>, large], [<?php echo the_post_thumbnail_url('featured-xlarge'); ?>, xlarge]"> </header>
<?php else:
    $headerURI = get_template_directory_uri() . '/assets/images/blog-background.jpg';?>
    <header class="featured-hero" role="banner" data-interchange="[<?php echo $headerURI ?>, small], [<?php echo $headerURI ?>, medium], [<?php echo $headerURI ?>, large], [<?php echo $headerURI ?>, xlarge]"> </header>
<?php endif;