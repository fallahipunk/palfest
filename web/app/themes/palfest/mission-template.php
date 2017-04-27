<?php /* Template Name: Mission Statement Template */ ?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <div class = "mission-page">

</div>
<?php endwhile; ?>
