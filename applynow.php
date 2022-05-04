<?php
/*
Template Name: Apply Now page
*/
?>

<?php get_header(); ?>
<!--<section class="bg-dark innerBanner">
<?php the_post_thumbnail('full'); ?>
</section>-->

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<!--<section class="bg-dark text-white text-uppercase innerPageTitle text-center py-5">
					<div class="container">
					<h1 class="wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.3s"><?php the_title(); ?></h1>
					</div>	 				
						</section>-->
						<section class="py-5 programHighlights d-none">
	<div class="container position-relative beforeNone">
		<div class="row">
			<div class="col-sm-7">
				<div class="p-4 box1 position-relative text-white wow slideInRight" data-wow-duration="0.5s" data-wow-delay="0.3s" >
					<h5>What Will You Get</h5>
					<div class="TickList mt-3">
						<ul>
							<li>Ability to build and deploy AI/ML and Deep Learning applications at your workplace</li>
							<li>Certificate by IIIT-H Machine Learning Lab</li>
							<li>Learn from the best faculty and seasoned industry professionals</li>
							<li>Reinforce learning by applying concepts in industry relevant assignments and projects</li>
						</ul>
					</div>
					<h5>Batch 1, 2 started in Jan 2018.<br/>  Next Batch to be announced soon.<br/> Call Amar 9999-9999</h5>

				</div>
			</div>
		<div class="col-sm-5">
			<div class="p-4 box2 my-5 position-relative bg-white  wow slideInLeft" data-wow-duration="0.5s" data-wow-delay="0.3s" >
				<h5>Payment Terms</h5>
					<div class="TickList2 mt-3">
						<ul>
							<li>No payment while applying</li>
							<li>Once selected, pay 10,000 as Joining Fee</li>
							<li>Pay Full Fee before the due date</li>
							<li>GST and other taxes extra</li>
							<li>0% interest EMI option available</li>
						</ul>
					</div>
					<h5>Program Fee</h5>
					<div class="TickList2 mt-3">
						<ul>
							<li>Fee to be announced</li>
							<li>Fee to be announced</li>
						</ul>
					</div>
			</div>
		</div>
		</div>
	</div>
</section>
						<section class="ErrorContent py-5">
							<div class="container">
<div class="bg-white py-3 px-4"><?php the_content(); ?>  </div> 
							</div>
							</section>		
						
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<?php endif; ?>
			



<?php get_footer(); ?>