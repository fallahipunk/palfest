<div class = "container">
<div class = "row">



<div class = "col-md-6 col-lg-4 profile-image">
<?php

if ( has_post_thumbnail() ) {
	the_post_thumbnail('medium');
} ?>
</div>

<div class = "col-md-6 col-lg-8">
<h1 class="profile-title">
<?php the_title(); ?>
</h1>
<div class="profile-content">
 <?php the_content(); ?>
</div> 
</div>


</div>

<div class = "row">

<?php
//detect language of page
$lang = ICL_LANGUAGE_CODE;

// Find connected pages
$connected = new WP_Query( array(
  'connected_type' => 'profiles_to_articless',
  'connected_items' => get_queried_object(),
  'nopaging' => true,
) );

// Display connected articles
if ( $connected->have_posts() ) :
?>
<div class = "col-md-6 col-lg-4 related-articles-title">

<?php if ($lang =="ar"){ ?>
<strong>المقالات المرتبطة:</strong>

<?php } else{ ?>
<strong>Related Articles:</strong>
<?php } ?>
</div>


<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
    <div class = "col-sm-6 col-md-4 related-articles-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
<?php endwhile; ?>


<?php 
// Prevent weirdness
wp_reset_postdata();

endif;
?>
</div>
<div class = "row">
<?php
// Find connected days
$connected = new WP_Query( array(
  'connected_type' => 'profiles_to_days',
  'connected_items' => get_queried_object(),
  'nopaging' => true,
) );

// Display connected articles
if ( $connected->have_posts() ) :
?>
<div class = "col-md-6 col-lg-4 related-days-title">

<?php if ($lang =="ar"){ ?>
<strong>الفعاليات المشاركة بها:</strong>

<?php } else{ ?>
<strong>Participating in:</strong>
<?php } ?>
</div>


<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
    <div class = "col-sm-6 col-md-4 related-days-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
<?php endwhile; ?>


<?php 
// Prevent weirdness
wp_reset_postdata();

endif;
?>


</div>
</div>