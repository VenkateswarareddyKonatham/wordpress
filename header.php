<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js mt-0">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/csi_sig_bda/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'url' ); ?>/wp-content/themes/csi_sig_bda/css/animate.css">
	<link href="<?php bloginfo( 'url' ); ?>/wp-content/themes/csi_sig_bda/fonts/css/fontawesome-all.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if (function_exists("ot_get_option") ) { 
    $topBarText =ot_get_option('topbartext');
	$logo =ot_get_option('logo');
$slogan =ot_get_option('slogan');
	
    }?>
<section class="position-fixed py-3 searchBlock w-100 bg-white collapse" id="searchBlock">
	<span class="searchClose" data-toggle="collapse" data-target="#searchBlock">&times;</span>
	<div class="container py-5 ">
		<h4>Search Here</h4>
		<div class="searchForm">
<?php get_search_form(); ?>
</div>
	</div>
</section>
<header>
	<section class="topBar py-2">
		<div class="container position-relative">
			<span class="close"><i class="far fa-times-circle"></i></span>
<?php if($topBarText!=''){ ?>
<span class="text-red">CSI SIG BDA</span> <?php echo $topBarText; ?>
                      <?php } else{ ?>
<span class="text-red">CSI SIG BDA</span> offers Program Practioner Approach to AI & ML in collaboration with NIT Warangal.
                      <?php } ?>			
		</div>
	</section>
	<section class="bg-white py-3 headersection">
		<div class="container position-relative">
			<div class="row">
				<div class="col-7 col-sm-3">
					<?php if($logo!=''){ ?>

                      <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" class="img-fluid"></a>

                      <?php } else{ ?>

                      <a href="<?php bloginfo('url'); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="<?php bloginfo('name'); ?>" class="img-fluid"></a>
                      <?php } ?>
				</div>
				<div class="col-5 col-sm-9">
					<div class="d-flex flex-row-reverse">
  <div class="pl-2 sloganIcon">
	  <?php if($slogan!=''){ ?>

                      <a href="<?php bloginfo('url'); ?>" class="logoSlogan"><img src="<?php echo $slogan; ?>" alt="<?php bloginfo('name'); ?>" class="img-fluid"></a>

                      <?php } else{ ?>

                      <a href="<?php bloginfo('url'); ?>" class="logoSlogan"><img src="<?php bloginfo('template_url'); ?>/images/slogan.png" alt="<?php bloginfo('name'); ?>" class="img-fluid"></a>
                      <?php } ?>
  </div>
  <div class="px-2 align-self-center ApplyBtn d-none"><a href="<?php bloginfo('url'); ?>/apply-now/" class="btn btn-success roundedBtn px-3">APPLY NOW</a></div>
  <div class="px-2 align-self-center MenuIcon"><a class="MobileMenu" onclick="openNav()"><i class="fas fa-bars"></i></a></div>
  <div class="px-2 align-self-center cursor"><a class="search" data-toggle="collapse" data-target="#searchBlock"><i class="fas fa-search"></i></a></div>
  <div class="px-2 align-self-center MobileMenuContent" id="mySidenav">
	  <span class="close" onclick="closeNav()">&times;</span>
	  
	  <?php
							if ( has_nav_menu( 'primary' ) ) : ?>
					<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'primary-menu'
							) );
						?>
				<?php endif;
				?>
	  </div>
</div>

				</div>
			</div>
		</div>
	</section>
</header>
