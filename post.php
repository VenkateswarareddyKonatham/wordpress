<?php
/*
Template Name: Blog page
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
							<div class="container text-center">
<?php the_content(); ?>
							</div>
							</section>		
						
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<?php endif; ?>
			
<section class="body-content pb-5">
							<div class="container">
<div class="bg-white p-4">
		<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('cat=5&posts_per_page=500' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post();
		
		 ?>

		<h2><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>

		<?php endwhile; ?>

		<?php if ($paged > 1) { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
		</nav>

		<?php } else { ?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
		</nav>

		<?php } ?>

		<?php wp_reset_postdata(); ?>
		</div>
	</div>
							</section>
<?php get_footer(); ?>