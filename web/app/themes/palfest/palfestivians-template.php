<?php
/**
 * Template Name: Palfestivians Template
 */
?>

<?php 

$args = array( 

	'post_type' => 'profile',
	'posts_per_page' => -1
);

$loop = new WP_Query( $args );
echo '<div class = "row">';
while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class = "col-md-6 col-lg-4 "> <div class = "row"> <div class ="col-lg-6 palfestivians-thumb"> 
<a href="<?php the_permalink(); ?>">
<?php
if ( has_post_thumbnail() ) {
  the_post_thumbnail('thumb');
} ?>
 </a></div> <div class ="col-lg-6 palfestivians-title">
<a href="<?php the_permalink(); ?>">
<?php
  the_title();

  echo '</a></div> </div> </div>';
 


endwhile;
echo '</div>';
 ?>
