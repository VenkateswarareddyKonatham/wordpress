<?php
/*
Template Name: Publications page
*/
?>

<?php get_header(); ?>

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
			

<section class="pb-5 PublicationsList body-content">
	<div class="container">
<?php $args = array(
        'post_type' => 'Publications',
        'order' => 'ASC',
        'posts_per_page' => 1500
    );
query_posts( $args );
while (have_posts()) : the_post();?>
                         <div class="card mb-1 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
  <div class="card-header collapsed" data-toggle="collapse" data-target="#<?php echo strtolower(str_replace(' ', '', the_title('', '', false))); ?>" aria-expanded="false">
    <?php the_title(); ?>
	<span class="openFaq float-right"><i class="fas fa-plus"></i></span>
	<span class="closeFaq float-right"><i class="fas fa-minus"></i></span>
  </div>
  <div class="card-body collapse" id="<?php echo strtolower(str_replace(' ', '', the_title('', '', false))); ?>">
  <?php the_content(); ?>
  </div>
</div>
                        <?php
endwhile;
?>
<p class="text-center mt-4"><a href="#" class="">Visleshana Call For Papers</a></p>
	</div>
</section>

<?php get_footer(); ?>