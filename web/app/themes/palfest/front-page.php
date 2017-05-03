
<div id= "front-page">
<?php while (have_posts()) : the_post(); ?>

	  		<?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; 

//detect language of page
$lang = ICL_LANGUAGE_CODE;

?>

</div>

