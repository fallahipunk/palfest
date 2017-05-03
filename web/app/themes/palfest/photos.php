<?php
/**
 * Template Name: Photos Template
 */
?>

<?php while (have_posts()) : the_post(); ?>


 <div class = "photos-content">
  <?php get_template_part('templates/content', 'page'); ?>
 </div>

<?php endwhile; ?>
