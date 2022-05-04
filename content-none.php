<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
 <section class="bg-dark text-white text-uppercase innerPageTitle text-center py-5">
					<div class="container">
					<h1 class="wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.3s"><?php _e( 'Nothing Found', 'twentyfifteen' ); ?></h1>
					</div>
					</section>
					<section class="py-5 ErrorContent">
<div class="container text-center  bg-white p-4">
<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<h2><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyfifteen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></h2>

		<?php elseif ( is_search() ) : ?>

			<h2><?php _e( 'Sorry, but nothing matched your search terms.<br/> Please try again with some different keywords.', 'twentyfifteen' ); ?></h2>
			<div class="mt-4 searchBlockError mb-2">
				<?php get_search_form(); ?>
				<div>
			

		<?php else : ?>

			<h2><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfifteen' ); ?></h2>
			<div class="mt-4 searchBlockError mb-2">
<?php get_search_form(); ?>
			</div>
			

		<?php endif; ?>

</div>
</section>
