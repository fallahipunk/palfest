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
if ( has_post_thumbnail()) {

    $featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
    ?>
      <div class="day-wrap" style="background: url('<?php echo $featured_image_url[0]; ?>') no-repeat; background-size: cover;">

<div class = "container">
<?php 

p2p_type( 'profiles_to_days' )->each_connected( $loop );
echo '<div class = "row">';
while ( $loop->have_posts() ) : $loop->the_post();
?>
<a href="<?php the_permalink(); ?>">
<?
echo '<div class = "col-sm-6 col-lg-4 programme-day"> <h1>' ;
  the_title();
  echo '</h1> <div class="entry-content">';
  the_content();
  echo '</a></div>';
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
</div>
<?php }else{
 ?>
<div class = "container">
<?php 

p2p_type( 'profiles_to_days' )->each_connected( $loop );
echo '<div class = "row">';
while ( $loop->have_posts() ) : $loop->the_post();
?>
<a href="<?php the_permalink(); ?>">
<?
echo '<div class = "col-sm-6 col-lg-4 programme-day"> <h1>' ;
  the_title();
  echo '</h1> <div class="entry-content">';
  the_content();
  echo '</a></div>';
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


<?php } ?>



