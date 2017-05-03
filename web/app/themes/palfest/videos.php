<?php
/**
 * Template Name: Videos Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>
  </div>
  <div class = "videos-content">
  <?php get_template_part('templates/content', 'page'); ?>
	</div>
<?php endwhile; ?>
