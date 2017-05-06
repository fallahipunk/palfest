<?php
/**
 * Template Name: Programme Template
 */
?>
<div class = "container">
<?php 

$args = array( 

	'post_type' => 'day',
	'posts_per_page' => 10,
	'orderby'   => 'date',
    'order' => 'ASC' 

	);
$loop = new WP_Query( $args );
p2p_type( 'profiles_to_days' )->each_connected( $loop );
echo '<div class = "row">';
while ( $loop->have_posts() ) : $loop->the_post();

echo '<div class = "col-sm-6 col-lg-4 programme-day"> <h1>' ;
  the_title();
  echo '</h1> <div class="entry-content">';
  the_content();
  echo '</div>';
    foreach ( $post->connected as $post ) : setup_postdata( $post );?>
    
    <div class = "programme-participant"><p>
    <a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a>
    </p>
    </div>
   
    <?php
    endforeach;
  
    wp_reset_postdata();
  echo '</div>';

endwhile;
echo '</div>';
 ?>
 </div>
