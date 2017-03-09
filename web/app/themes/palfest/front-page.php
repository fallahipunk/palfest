
<div id= "front-page">
<?php while (have_posts()) : the_post(); ?>

	  		<?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; 

//detect language of page
$lang = ICL_LANGUAGE_CODE;

?>

</div>
	  		<div class = "row">
	  		
		  		<div class = "col-md-6 homepage-newsletter">
		  		<?php 
		  			 //switch newsletter form based on language 
						if ($lang =="ar"){
							get_template_part('templates/newsletter', 'ar'); 
						}
						else{
							get_template_part('templates/newsletter', 'en'); 
						}
				?>

		  		</div>

				<div class = "col-md-6 homepage-mission">
		  		<?php 
		  			 //switch about excerpt based on language 
						if ($lang =="ar"){
							get_template_part('templates/about_excerpt', 'ar'); 
						}
						else{
							get_template_part('templates/about_excerpt', 'en'); 
						}
				?>

	  			</div>

	  		</div>
