<?php              
if ( has_post_thumbnail()) {

    $featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
    ?>
      <div class="day-wrap" style="background: url('<?php echo $featured_image_url[0]; ?>') no-repeat; background-size: cover;">


<div class = "palfest-content">
<div class = "row">




<div class = "col-md-6">
<h1 class="day-title">
<?php the_title(); ?>
</h1>
<div class="day-content">
 <?php the_content(); ?>
</div> 
</div>






<?php
//detect language of page
$lang = ICL_LANGUAGE_CODE;

// Find connected articles
$connected = new WP_Query( array(
  'connected_type' => 'profiles_to_days',
  'connected_items' => get_queried_object(),
  'nopaging' => true,
) );

// Display connected articles
if ( $connected->have_posts() ) :
?>
<div class = "col-md-6 col-lg-4 related-profiles-in-day-title">

<?php if ($lang =="ar"){ ?>
<strong>المشاركون</strong>

<?php } else{ ?>
<strong>Participants:</strong>
<?php } ?>

<div class ="row">
<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
    <div class = "col-lg-12 related-profiles-in-day-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
<?php endwhile; ?>
</div>

<?php 
// Prevent weirdness
wp_reset_postdata();

endif;


?>
</div>


</div>
</div>

	<?php }

	else{ ?> 

<div class = "palfest-content">
<div class = "row">




<div class = "col-md-6">
<h1 class="day-title">
<?php the_title(); ?>
</h1>
<div class="day-content">
 <?php the_content(); ?>
</div> 
</div>






<?php
//detect language of page
$lang = ICL_LANGUAGE_CODE;

// Find connected articles
$connected = new WP_Query( array(
  'connected_type' => 'profiles_to_days',
  'connected_items' => get_queried_object(),
  'nopaging' => true,
) );

// Display connected articles
if ( $connected->have_posts() ) :
?>
<div class = "col-md-6 col-lg-4 related-profiles-in-day-title">

<?php if ($lang =="ar"){ ?>
<strong>المشاركون</strong>

<?php } else{ ?>
<strong>Participants:</strong>
<?php } ?>

<div class ="row">
<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
    <div class = "col-lg-12 related-profiles-in-day-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
<?php endwhile; ?>
</div>

<?php 
// Prevent weirdness
wp_reset_postdata();

endif;


?>
</div>


</div>
</div>

<?php } ?>