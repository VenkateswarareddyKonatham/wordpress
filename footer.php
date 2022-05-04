<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<?php if (function_exists("ot_get_option") ) { 
    $copyrights =ot_get_option('copyrights');
$footer_title_1 =ot_get_option('footer_title_1');
	$footer_title_2 =ot_get_option('footer_title_2');
	$footer_title_3 =ot_get_option('footer_title_3');
    $footer_title_4 =ot_get_option('footer_title_4');
	$footer_address =ot_get_option('footer_address');
	$footer_email =ot_get_option('footer_email');
	$footer_phone =ot_get_option('footer_phone');
    }?>

<footer>
<section class="footerTop py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<?php if($footer_title_1!=''){ ?>
<h5 class="text-white text-uppercase"><?php echo $footer_title_1; ?></h5>
                      <?php } else{ ?>
<h5 class="text-white text-uppercase">Address</h5>
                      <?php } ?>
<?php if($footer_address!=''){ ?>
<p><?php echo $footer_address; ?></p>
                      <?php } else{ ?>
<p>302, Archana Arcade, 10-3-190, St.<br/> Johns Road, Opposite Railway Reservation Complex, Secunderabad, Andhra Pradesh, 500025, Old Lancer Lines, Railway Colony, Chilakalguda, Secunderabad,<br/> Telangana 500025</p>
                      <?php } ?>
			</div>
			<div class="col-sm-8">
				<div class="row">
<div class="col-sm-4 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
		<?php if($footer_title_2!=''){ ?>
<h5 class="text-white text-uppercase"><?php echo $footer_title_2; ?></h5>
                      <?php } else{ ?>
<h5 class="text-white text-uppercase">&nbsp;</h5>
                      <?php } ?>
		
		<?php
							if ( has_nav_menu( 'footer_menu' ) ) : ?>
					<?php
							wp_nav_menu( array(
								'theme_location' => 'footer_menu',
								'menu_class'     => 'footer_menu',
								'depth'          => 2
							) );
						?>
				<?php endif;
				?>
		</div>
<div class="col-sm-4 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
		<?php if($footer_title_3!=''){ ?>
<h5 class="text-white text-uppercase"><?php echo $footer_title_3; ?></h5>
                      <?php } else{ ?>
<h5 class="text-white text-uppercase">Others</h5>
                      <?php } ?>

					<?php
							if ( has_nav_menu( 'other_links' ) ) : ?>
					<?php
							wp_nav_menu( array(
								'theme_location' => 'other_links',
								'menu_class'     => 'footer_menu',
								'depth'          => 2
							) );
						?>
				<?php endif;
				?>  
		</div>
		<div class="col-sm-4 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
		<?php if($footer_title_4!=''){ ?>
<h5 class="text-white text-uppercase"><?php echo $footer_title_4; ?></h5>
                      <?php } else{ ?>
<h5 class="text-white text-uppercase">GET in touch</h5>
                      <?php } ?>
					  <div class="clearfix"></div>
		<div class="socialMediaLinks pt-1 pb-2"><?php echo do_shortcode('[widgets_on_pages id="1"]'); ?></div>
		<div class="clearfix"></div>
<h6 class="text-white mb-0">Email Address</h6>
<?php if($footer_email!=''){ ?>
<a href="mailto:<?php echo $footer_email; ?>"><?php echo $footer_email; ?></a>
                      <?php } else{ ?>
<a href="mailto:Help@csi-sig-bda.org">Help@csi-sig-bda.org</a>
                      <?php } ?>
<h6 class="text-white mb-0 mt-2">Contact Number</h6>
<?php if($footer_phone!=''){ ?>
<a href="tel:<?php echo $footer_phone; ?>"><?php echo $footer_phone; ?></a>
                      <?php } else{ ?>
<a href="tel:999999999">999 999 999</a>
                      <?php } ?>

		</div>

				</div>
			</div>
		
		
		</div>
	</div> 
</section>
<section class="footerBottom py-1">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 py-2 copyRights text-white text-left wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
				
				<?php if($copyrights!=''){ ?>
<span><?php echo $copyrights; ?></span>
                      <?php } else{ ?>
<span>Copyright &copy; 2018. All Rights Recived. </span>
                      <?php } ?>
 
			</div>
			<div class="col-sm-6 py-2 text-white text-right">
			Powered by Deltamarch Technologies
			</div>
		</div>
	</div>
</section>
</footer>

<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/csi_sig_bda/js/jquery-3.2.1.slim.min.js"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/csi_sig_bda/js/popper.min.js"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/csi_sig_bda/js/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/csi_sig_bda/js/wow.min.js"></script>
<script src="<?php bloginfo( 'url' ); ?>/wp-content/themes/csi_sig_bda/js/custom.js"></script>
<script>
	$(window).scroll(function () {
	var scroll = $(window).scrollTop();
	if (scroll > 150) {
		$("body").addClass("headerFixed");
	} else {
		$("body").removeClass("headerFixed");
	}
});
$(document).ready(function(){
	$(".topBar .close").on("click", function(){
        $('.topBar').hide();
    });
	// $('.menu-item-has-children').click(function(){
		
	// });
});

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
	document.getElementById("mySidenav").style.right = "0";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	document.getElementById("mySidenav").style.right = "-50px";
}
</script>
<!-- The Modal -->
<div class="modal fade" id="Step2">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-0 bg-info border-0 text-white">
      <div class="modal-body text-center">
		   <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="p-5">our selection team will get back to you in two working days</h4>
      </div>
    </div>
  </div>
</div>

</body>
</html>
