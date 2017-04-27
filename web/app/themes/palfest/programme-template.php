<?php
/**
 * Template Name: Programme Template
 */
?>

<?php 

$args = array( 

	'post_type' => 'day',
	'posts_per_page' => 10,
	'orderby'   => 'date',
    'order' => 'ASC' 

	);
$loop = new WP_Query( $args );
echo '<div class = "row">';
while ( $loop->have_posts() ) : $loop->the_post();

echo '<div class = "col-sm-6 col-lg-4 programme-day"> <h1>' ;
  the_title();
  echo '</h1> <div class="entry-content">';
  the_content();
  echo '</div>';
  echo '</div>';

endwhile;
echo '</div>';
 ?>
