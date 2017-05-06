<?php /* Template Name: Mission Statement Template */ ?>


<?php while (have_posts()) : the_post();?>


  <div class="mission-page">
<?php              
if ( has_post_thumbnail()) {

    $featured_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
    ?>
      <div class="mission-wrap" style="background: url('<?php echo $featured_image_url[0]; ?>') no-repeat; background-size: cover;">

   <div class = "palfest-content">
  <?php get_template_part('templates/content', 'page');  ?>
  </div>
  </div>
<?php } 
else{ ?>
<div class = "palfest-content">
	<?php get_template_part('templates/content', 'page'); ?>
	</div>
	<?php } ?>
</div>
<?php endwhile; ?>
