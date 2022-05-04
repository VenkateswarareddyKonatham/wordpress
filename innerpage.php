<?php
/*
Template Name: Inner page
*/
?>

<?php get_header(); ?>
<!--<section class="bg-dark innerBanner">
<?php the_post_thumbnail('full'); ?>
</section>--> 
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<section class="bg-dark text-white text-uppercase innerPageTitle text-center py-5">
					<div class="container">
					<h1 class="wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.3s"><?php the_title(); ?></h1>
					</div>	 				
						</section>
						<section class="body-content py-5">
							<div class="container">
<?php the_content(); ?>
							</div>
							</section>		
						
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<?php endif; ?>
			



<?php get_footer(); ?>