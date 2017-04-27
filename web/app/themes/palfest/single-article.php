<div class = "row">



<div class = "col-lg-8">
<h1 class="article-title">
<?php the_title(); ?>
</h1>
<div class="article-content">
 <?php the_content(); ?>
</div> 
</div>






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
<div class = "col-lg-4 ">
<div class = " col-lg-12 related-profiles-title">

<?php if ($lang =="ar"){ ?>
<strong>بالفستيون مرتبطون: </strong>

<?php } else{ ?>
<strong>Related Palfestivians:</strong>
<?php } ?>
 </div>


<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
    <div class = "col-lg-12 related-profiles-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
<?php endwhile; ?>

 </div>

<?php 
// Prevent weirdness
wp_reset_postdata();

endif;
?>


</div>