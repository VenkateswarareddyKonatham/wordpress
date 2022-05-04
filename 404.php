<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<section class="bg-dark text-white text-uppercase innerPageTitle text-center py-5">
					<div class="container">
					<h1 class="wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">OOPS! THAT PAGE CAN’T BE FOUND.</h1>
					</div>
					</section>
					<section class="py-5 ErrorContent">
<div class="container text-center  bg-white py-5">
<h3><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></h3>
<div class="pt-5 searchBlockError">
<?php get_search_form(); ?>
</div>
					
</div>
					</section>
	
<?php get_footer(); ?>
