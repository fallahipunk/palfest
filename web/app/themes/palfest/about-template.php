<?php /* Template Name: About Template */ ?>

<?php while (have_posts()) : the_post(); ?>
<div class = "about-page">
  <?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>
