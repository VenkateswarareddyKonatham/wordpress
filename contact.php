<?php
/*
Template Name: contact page
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
			

<section>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7613.021692591839!2d78.505983!3d17.435247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb5781759594e28c9!2sComputer+Society+Of+India!5e0!3m2!1sen!2sin!4v1521645562430" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<?php get_footer(); ?>