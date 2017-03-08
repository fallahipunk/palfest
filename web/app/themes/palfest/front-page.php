
<div id= "front-page">
<?php while (have_posts()) : the_post(); ?>

	  		<?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>
</div>
	  		<div class = "row">
	  		
		  		<div class = "col-md-6 homepage-newsletter">
		  		<?php 
		  			 //switch newsletter form based on language 
					

						$lang = ICL_LANGUAGE_CODE;
						if ($lang =="ar"){
							echo ($lang);
							get_template_part('templates/newsletter', 'ar'); 
						}
						else{
							echo ($lang);
							get_template_part('templates/newsletter', 'en'); 
						}
			
					
				?>

		  		</div>

				<div class = "col-md-6 homepage-mission">
				hello hello
	  			</div>

	  		</div>
