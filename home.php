<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
<?php if (function_exists("ot_get_option") ) { 
    $banner_1 =ot_get_option('banner_1');
	$banner_1_text =ot_get_option('banner_1_text');
$banner_2 =ot_get_option('banner_2');
	$banner_2_text =ot_get_option('banner_2_text');
	$banner_3 =ot_get_option('banner_3');
	$banner_3_text =ot_get_option('banner_3_text');
$main_title =ot_get_option('main_title');
$offer_1_title =ot_get_option('offer_1_title');
$offer_1_description =ot_get_option('offer_1_description');
$offer_1_image =ot_get_option('offer_1_image');
$offer_2_title =ot_get_option('offer_2_title');
$offer_2_description =ot_get_option('offer_2_description');
$offer_2_image =ot_get_option('offer_2_image');
$offer_3_title =ot_get_option('offer_3_title');
$offer_3_description =ot_get_option('offer_3_description');
$offer_3_image =ot_get_option('offer_3_image');
	
	
    }?>
<section class="bg-dark position-relative">
<div id="carouselExampleIndicators" class="carousel slide homeSlider" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
		<?php if($banner_1!=''){ ?>
<img class="d-block w-100" src="<?php echo $banner_1; ?>" alt="First slide">
                      <?php } else{ ?>

      <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/images/banner1.jpg" alt="First slide">
                      <?php } ?>
      
   <div class="position-absolute sliderTxt text-center text-white">
	<div class="container">
		<?php if($banner_1_text!=''){ ?>
<h1 class="text-uppercase"> <?php echo $banner_1_text; ?></h1>
                      <?php } else{ ?>
<h1 class="text-uppercase">Computer Society of India, Special<br/> Interest Group, Big Data Analytics</h1>
                      <?php } ?>			
	</div>
</div>
    </div>
    <div class="carousel-item">
      	<?php if($banner_2!=''){ ?>
<img class="d-block w-100" src="<?php echo $banner_2; ?>" alt="First slide">
                      <?php } else{ ?>

      <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/images/banner2.jpg" alt="First slide">
                      <?php } ?>
      
   <div class="position-absolute sliderTxt text-center text-white">
	<div class="container">
		<?php if($banner_2_text!=''){ ?>
<h1 class="text-uppercase"> <?php echo $banner_2_text; ?></h1>
                      <?php } else{ ?>
<h1 class="text-uppercase">Computer Society of India, Special<br/> Interest Group, Big Data Analytics</h1>
                      <?php } ?>			
	</div>
</div>
    </div>
    <div class="carousel-item">
     	<?php if($banner_3!=''){ ?>
<img class="d-block w-100" src="<?php echo $banner_3; ?>" alt="First slide">
                      <?php } else{ ?>

      <img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/images/banner1.jpg" alt="First slide">
                      <?php } ?>
      
   <div class="position-absolute sliderTxt text-center text-white">
	<div class="container">
		<?php if($banner_3_text!=''){ ?>
<h1 class="text-uppercase"> <?php echo $banner_3_text; ?></h1>
                      <?php } else{ ?>
<h1 class="text-uppercase">Computer Society of India, Special<br/> Interest Group, Big Data Analytics</h1>
                      <?php } ?>			
	</div>
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<section class="py-2 ApplyBtnMobile bg-success text-white text-center">
	<div class="container">
		Offers Program Practioner Approach to AI & ML in collaboration with NIT Warangal <a href="<?php bloginfo('url'); ?>/apply-now/" class="d-block">APPLY NOW</a>
	</div>
</section>
<div class="container d-none">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
						
								<?php the_content(); ?>
						
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<?php endif; ?>
			
</div>
<section class="py-5 FeaturedProgram">
	<div class="container">
		<h2 class="FeaturedProgramTitle text-uppercase text-left wow slideInDown" data-wow-duration="0.5s" data-wow-delay="0.3s"><span>Featured</span> Program</h2>
	<div class="clearfix"></div>
	<div id="FeaturedProgramSlider" class="carousel slide py-4" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
		<img src="<?php bloginfo('template_url'); ?>/images/content1.jpg" class="img-fluid" alt="Responsive image">
      <h5>Artificial Intelligence is the New Electricity</h5>
	  <p>Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis, and Computer Vision Problems. Ph.D. from IIT Kharagpur. Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis, and Computer Vision Problems. Ph.D. from IIT Kharagpur.</p>
	  <p>Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis.</p>
	  <p><a href="<?php bloginfo('template_url'); ?>/programs">Read More</a></p>
    </div>
    <div class="carousel-item">
      	<img src="<?php bloginfo('template_url'); ?>/images/content1.jpg" class="img-fluid" alt="Responsive image">
      <h5>Artificial Intelligence is the New Electricity</h5>
	  <p>Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis.</p>
	  <p>Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis, and Computer Vision Problems. Ph.D. from IIT Kharagpur. Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis, and Computer Vision Problems. Ph.D. from IIT Kharagpur.</p>
	  <p><a href="<?php bloginfo('template_url'); ?>/programs">Read More</a></p>
    </div>
    <div class="carousel-item">
      	<img src="<?php bloginfo('template_url'); ?>/images/content1.jpg" class="img-fluid" alt="Responsive image">
      <h5>Artificial Intelligence is the New Electricity</h5>
	  <p>Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis.</p>
	  <p>Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis, and Computer Vision Problems. Ph.D. from IIT Kharagpur. Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis, and Computer Vision Problems. Ph.D. from IIT Kharagpur.</p>
	  <p><a href="<?php bloginfo('template_url'); ?>/programs" class="HoverTrans">Read More</a></p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#FeaturedProgramSlider" role="button" data-slide="prev">
   <i class="fas fa-arrow-left"></i>
  </a>
  <a class="carousel-control-next" href="#FeaturedProgramSlider" role="button" data-slide="next">
    <i class="fas fa-arrow-right"></i>
  </a>
</div>
	
	</div>
</section>
<section class="WhyAI d-none">
	<div class="row m-0">
		<div class="col-sm-7">
			<div class="float-right WhyAITitleBoxContent py-5">
				<ul>
					<li>To help working professionals acquire Big Data Skills to stay competitive</li>
					<li>To understand various ML / AI techniques and how to use them</li>
					<li>To know to choose appropriate techniques</li>
					<li>To Develop an appreciation to the statistical and data science techniques</li>
					<li>To learn to design algorithms to identify the trends and patterns in data.</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-5 bg-gray">
			<div class="WhyAITitleBox py-5 my-5  text-center">
				<img src="<?php bloginfo('template_url'); ?>/images/WhyAITitleBoxLogo.png" class="img-fluid" alt="Responsive image">
			</div>
		</div>
	</div>
</section>
<section class="py-5 programHighlights overflow-x d-none">
	<div class="container position-relative">
		<div class="row">
			<div class="col-sm-7">
				<div class="p-4 box1 position-relative text-white wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
					<h5>Practitioners Approach to Artificial Intelligence and Machine Learning</h5>
					<div class="TickList mt-3">
						<ul>
							<li>Custom made syllabus keeping the industry requirements in mind.</li>
							<li>Syllabus is formed by industry and Academic experts.</li>
							<li>Syllabus is Reviewed by Industry Leaders</li>
							<li>Faculty is from Academia like IIT, NIT, HCU and from Industry like Infy, Wipro, Microsoft</li>
							<li>Invited talks from CXO of Analytics Industry.</li>
							<li>Assessments, Assignments by NIT Warangal</li>
							<li>Certification by NIT Warangal and CSI SIG.</li>
						</ul>
						<hr/>
						<a href="#" class="text-white DownloadBtn position-relative">Download Program Highlights </a>
					</div>
				</div>
			</div>
			<div class="col-sm-5">
				<div class="p-4 box2 my-5 position-relative bg-white  wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
					<h4>Program outline</h4>
					<div class="TickList2 mt-3 mb-3">
						<ul>
							<li>Comprehensive course content</li>
							<li>Weekend program</li>
							<li>Invited talks by "who is who in Data Analytics"</li>
												</ul>
					</div>
					<h4>You after the program</h4>
					<div class="TickList2 mt-3 mb-0">
						<ul class="mb-1">
							<li>Have learned from the Industry and Academia Experts</li>
							<li>Will have ability to choose most appropriate tool in AI & ML</li>
							<li>Are certified by NIT Warangal</li>
						</ul>
					</div>
				</div>
			</div>
<div class="clearfix"></div>
<div class="col-sm-12 mt-4">
	<div class="batchBox text-white position-relative">
		<h5>Next Batch to be announced soon</h5>
		<a class="btn btn-success roundedBtn px-3" href="<?php bloginfo('url'); ?>/apply-now/">APPLY NOW</a>
	</div>
</div>
		</div>
	</div>
</section>
<section class="py-5 JoinSteps d-none">
	<div class="container">
	<h2 class="text-uppercase text-center wow slideInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">Join in 4 easy steps</h2>
		<div class="row pt-4 pb-3 position-relative stepsLine">
			<div class="col-sm-3 text-center"><a href="<?php bloginfo('url'); ?>/apply-now/"><img src="<?php bloginfo('template_url'); ?>/images/step1.png" class="img-fluid" alt="Responsive image"></a></div>
			<div class="col-sm-3 text-center"><a data-toggle="modal" data-target="#Step2"><img src="<?php bloginfo('template_url'); ?>/images/step2.png" class="img-fluid" alt="Responsive image"></a></div>
			<div class="col-sm-3 text-center"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/step3.png" class="img-fluid" alt="Responsive image"></a></div>
			<div class="col-sm-3 text-center"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/step4.png" class="img-fluid" alt="Responsive image"></a></div>
		</div>
	</div>
</section>
<section class="py-5 FromLeaders d-none">
<div class="container">
	<h2 class="text-uppercase text-center wow slideInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">Learn from Leaders</h2>

<div id="leaderList" class="carousel slide mb-4" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row mt-5">
		<div class="col-sm-6 animated" data-wow-duration="0.5s" data-wow-delay="0.3s"><img src="<?php bloginfo('template_url'); ?>/images/leader1.jpg" class="img-fluid LeaderImage position-relative" alt=""></div>
		<div class="col-sm-6">
			<div class="my-5 bg-white p-5 LeaderContent position-relative animated" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<h3>Dr. C. V. Jawahar<small class="d-block font-12">Program Director and Lead Faculty</small></h3>
				<p>Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis, and Computer Vision Problems. Ph.D. from IIT Kharagpur. </p>
			<ul class="list-inline">
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/instogram.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/vio.png" class="img-fluid position-relative" alt=""></a></li>
</ul>
			
			</div>
		</div>
	</div>
    </div>
    <div class="carousel-item">
      <div class="row mt-5">
		<div class="col-sm-6 animated" data-wow-duration="0.5s" data-wow-delay="0.3s"><img src="<?php bloginfo('template_url'); ?>/images/leader1.jpg" class="img-fluid LeaderImage position-relative" alt=""></div>
		<div class="col-sm-6">
			<div class="my-5 bg-white p-5 LeaderContent position-relative animated" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<h3>Dr. C. V. Jawahar<small class="d-block font-12">Program Director and Lead Faculty</small></h3>
				<p>Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis, and Computer Vision Problems. Ph.D. from IIT Kharagpur. </p>
			<ul class="list-inline">
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/instogram.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/vio.png" class="img-fluid position-relative" alt=""></a></li>
</ul>
			
			</div>
		</div>
	</div>
    </div>
    <div class="carousel-item">
      <div class="row mt-5">
		<div class="col-sm-6 animated" data-wow-duration="0.5s" data-wow-delay="0.3s"><img src="<?php bloginfo('template_url'); ?>/images/leader1.jpg" class="img-fluid LeaderImage position-relative" alt=""></div>
		<div class="col-sm-6">
			<div class="my-5 bg-white p-5 LeaderContent position-relative animated" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<h3>Dr. C. V. Jawahar<small class="d-block font-12">Program Director and Lead Faculty</small></h3>
				<p>Amazon Chair Professor at IIIT-H. Renowned Expert in Machine Learning and Optimization, Document Image Analysis, and Computer Vision Problems. Ph.D. from IIT Kharagpur. </p>
			<ul class="list-inline">
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/instogram.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png" class="img-fluid position-relative" alt=""></a></li>
  <li class="list-inline-item"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/vio.png" class="img-fluid position-relative" alt=""></a></li>
</ul>
			
			</div>
		</div>
	</div>
    </div>
  </div>
    <ol class="carousel-indicators position-relative LeaderListIcons">
    <li data-target="#leaderList" data-slide-to="0" class="active"></li>
    <li data-target="#leaderList" data-slide-to="1"></li>
    <li data-target="#leaderList" data-slide-to="2"></li>
  </ol>
</div>
</div>
</section>
<section class="workshops py-5 bg-info text-center text-white d-none">
	<div class="container">
		<h2 class="text-uppercase wow slideInDown" data-wow-duration="0.5s" data-wow-delay="0.3s">Invited talks</h2>
		<div class="pt-5 row">
			<div class="col-sm-4 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<div class="py-5">
					<h4>Shankar khambampati<small class="d-block">Member</small></h4>
				</div>
			</div>
			<div class="col-sm-4 MiddleLineTop">
				<div class="py-5">
					<h4>Sastry Varanasi<small class="d-block">Member</small></h4>
				</div>
			</div>
			<div class="col-sm-4 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<div class="py-5">
					<h4>Krishnakumar Thiagarajan<small class="d-block">Member</small></h4>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="line"></div>
				<div class="clearfix"></div>
			<div class="col-sm-4 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<div class="py-5">
					<h4>Prof JanakiRam<small class="d-block">IIT Chennai</small></h4>
				</div>
			</div>
			<div class="col-sm-4 MiddleLineBottom">
				<div class="py-5">
					<h4>Prof C R Rao<small class="d-block">University of Hyderabad</small></h4>
				</div>
			</div>
			<div class="col-sm-4 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<div class="py-5">
					<h4>Munwar Shariff<small class="d-block">Member</small></h4>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="companyLogos py-5 text-center d-none">
<div class="container">
	<h2 class="text-uppercase pb-2">Our Partners</h2>
	<div class="pt-2 pb-4 mb-1 text-center">
		<ul class="nav nav-tabs">
  <li><a data-toggle="tab" href="#Execution" class="active show">Execution</a></li>
  <li><a data-toggle="tab" href="#Knowledge">Knowledge</a></li>
  <li><a data-toggle="tab" href="#Technology">Technology</a></li>
</ul>
	</div>
<div class="tab-content pb-3">
  <div id="Execution" class="tab-pane active">
    	<div class="row rowSpace5">
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
	</div>
  </div>
  <div id="Knowledge" class="tab-pane">
    	<div class="row rowSpace5">
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo2.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo2.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo2.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo2.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo2.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo2.jpg"></div>
	</div>
  </div>
  <div id="Technology" class="tab-pane">
    	<div class="row rowSpace5">
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
		<div class="col-sm-2"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/PTlogo1.jpg"></div>
	</div>
  </div>
</div>

</div>
</section>
<section class="faq pt-5 bg-info d-none">
<div class="row m-0 pt-4">
	<div class="col-sm-5"></div>
	<div class="col-sm-7 faqSection py-3">
		<div class="faqContent py-3">
		<h2 class="text-uppercase pb-2">frequently asked questions</h2>			
			<?php $args = array(
        'post_type' => 'Testimonials',
        'order' => 'ASC',
		'posts_per_page' => 4
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
<div class="clearfix"></div>
<div class="mt-2"><a href="<?php bloginfo('template_url'); ?>/frequently-asked-questions/" class="faqBtn position-relative">View all FAQ's</a></div>

			</div>
	</div>
</div>
</section>
<section class="py-5 OurOffers d-none">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center pb-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
				<?php if($main_title!=''){ ?>
				<h2 class="text-uppercase"><?php echo $main_title; ?></h2>
                      <?php } else{ ?>
<h2 class="text-uppercase">Our offers</h2>
                      <?php } ?>
				
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-4">
				<div class="card mb-2 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
								<?php if($offer_1_image!=''){ ?>
				<img class="card-img-top" src="<?php echo $offer_1_image; ?>">
                      <?php } else{ ?>
<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/ouroffer1.jpg">
                      <?php } ?>
            
            <div class="card-body">
				<?php if($offer_1_title!=''){ ?>
				<h5 class="card-title"><?php echo $offer_1_title; ?></h5>
                      <?php } else{ ?>
<h5 class="card-title">Early Bird</h5>
                      <?php } ?>
              <?php if($offer_1_description!=''){ ?>
				<p class="card-text"><?php echo $offer_1_description; ?></p>
                      <?php } else{ ?>
<p class="card-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <p class="card-text"><small><a href="#">Know More . .</a></small></p>
                      <?php } ?>
              
            </div>
          </div>
			</div>
			<div class="col-sm-4">
				<div class="card mb-2" data-wow-duration="0.5s" data-wow-delay="0.3s">
								<?php if($offer_2_image!=''){ ?>
				<img class="card-img-top" src="<?php echo $offer_2_image; ?>">
                      <?php } else{ ?>
<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/ouroffer2.jpg">
                      <?php } ?>
            
            <div class="card-body">
				<?php if($offer_2_title!=''){ ?>
				<h5 class="card-title"><?php echo $offer_2_title; ?></h5>
                      <?php } else{ ?>
<h5 class="card-title">Woman Professionals</h5>
                      <?php } ?>
              <?php if($offer_2_description!=''){ ?>
				<p class="card-text"><?php echo $offer_2_description; ?></p>
                      <?php } else{ ?>
<p class="card-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <p class="card-text"><small><a href="#">Know More . .</a></small></p>
                      <?php } ?>
              
            </div>
          </div>
			</div>
			<div class="col-sm-4">
				<div class="card mb-2 wow" data-wow-duration="0.5s" data-wow-delay="0.3s">
								<?php if($offer_3_image!=''){ ?>
				<img class="card-img-top" src="<?php echo $offer_3_image; ?>">
                      <?php } else{ ?>
<img class="card-img-top" src="<?php bloginfo('template_url'); ?>/images/ouroffer3.jpg">
                      <?php } ?>
            
            <div class="card-body">
				<?php if($offer_3_title!=''){ ?>
				<h5 class="card-title"><?php echo $offer_3_title; ?></h5>
                      <?php } else{ ?>
<h5 class="card-title">Corporate Bookings</h5>
                      <?php } ?>
              <?php if($offer_3_description!=''){ ?>
				<p class="card-text"><?php echo $offer_3_description; ?></p>
                      <?php } else{ ?>
<p class="card-text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <p class="card-text"><small><a href="#">Know More . .</a></small></p>
                      <?php } ?>
              
            </div>
          </div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>