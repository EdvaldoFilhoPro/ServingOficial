
<?php get_header(); ?>
<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-white font-weight-bold mb-4"><?php echo get_the_title(14); ?></h1>
				<p class="text-white mb-5"><?php echo get_the_excerpt(14); ?></p>
				<a href="FAQ.html" class="btn btn-main-md">Download Now</a>
			</div>
			<div class="col-md-6 text-center order-1 order-md-2">
			<?php echo get_the_post_thumbnail(14); ?>
				<!-- <img class="img-fluid" src="assets/images/mobile.png"  alt="screenshot"> -->
			</div>
		</div>
	</div>
</section>

<section class="section pt-0 position-relative pull-top">
	<div class="container">
		<div class="rounded shadow p-5 bg-white">
			<div class="row">
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-paint-bucket text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">themes made easy</h3>
					<p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
				</div>
				<div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
					<i class="ti-shine text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">powerful design</h3>
					<p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
				</div>
				<div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
					<i class="ti-thought text-primary h1"></i>
					<h3 class="mt-4 text-capitalize h5 ">creative content</h3>
					<p class="regular text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam non, recusandae
						tempore ipsam dignissimos molestias.</p>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--==================================
=            Feature Grid            =
===================================-->
<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto justify-content-center">
				<!-- Feature Mockup -->
				
				<div class="image-content" data-aos="fade-right">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/feature/feature-new-02.jpg" alt="iphone">
				</div>
			</div>
			<div class="col-lg-6 mr-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>Increase your productivity with <a
							href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a></h2>
					<!-- Feature Description -->
					<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
						aliquip ex ea commodo consequat.</p>
				</div>
				<!-- Testimonial Quote -->
				<div class="testimonial">
					<p>
						"InVision is a window into everything that's being designed at Twitter. It gets all of our best work in one
						place."
					</p>
					<ul class="list-inline meta">
						<li class="list-inline-item">
							<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="">
						</li>
						<li class="list-inline-item">Jonathon Andrew , Themefisher.com</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="feature section pt-0">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ml-auto align-self-center">
				<div class="feature-content">
					<!-- Feature Title -->
					<h2>Increase your productivity with <a
							href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a></h2>
					<!-- Feature Description -->
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
						dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
						ea commodo consequat.</p>
				</div>
				<!-- Testimonial Quote -->
				<div class="testimonial">
					<p>
						"InVision is a window into everything that's being designed at Twitter. It gets all of our best work in one
						place."
					</p>
					<ul class="list-inline meta">
						<li class="list-inline-item">
							<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="">
						</li>
						<li class="list-inline-item">Jonathon Andrew , Themefisher.com</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 mr-auto justify-content-center">
				<!-- Feature mockup -->
				<div class="image-content" data-aos="fade-left">
					<img class="img-fluid" src="images/feature/feature-new-02.jpg" alt="ipad">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Feature Grid  ====-->

<!--==============================
=            Services            =
===============================-->
<section class="service section bg-gray">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>An Interface For Lifestyle</h2>
					<p><a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a> makes
						it easy to stay on top of your Life Style. No late tasks. No gimmicks.</p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class="col-lg-6 align-self-center">
				<!-- Feature Image -->
				<div class="service-thumb left" data-aos="fade-right">
					<img class="img-fluid" src="images/feature/iphone-ipad.jpg" alt="iphone-ipad">
				</div>
			</div>
			<div class="col-lg-5 mr-auto align-self-center">
				<div class="service-box">
					<div class="row align-items-center">
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-bookmark"></i>
								<!-- Heading -->
								<h3>Easy Prototyping</h3>
								<!-- Description -->
								<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-pulse"></i>
								<!-- Heading -->
								<h3>Sensor Bridge</h3>
								<!-- Description -->
								<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-bar-chart"></i>
								<!-- Heading -->
								<h3>Strategist</h3>
								<!-- Description -->
								<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
							</div>
						</div>
						<div class="col-md-6 col-xs-12">
							<!-- Service 01 -->
							<div class="service-item">
								<!-- Icon -->
								<i class="ti-panel"></i>
								<!-- Heading -->
								<h3>Art Direction</h3>
								<!-- Description -->
								<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Services  ====-->


<!--=================================
=            Video Promo            =
==================================-->
<section class="video-promo section bg-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-block">
					<!-- Heading -->
					<h2>Watch Our Promo Video</h2>
					<!-- Promotional Speech -->
					<p>Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et,
						porttitor at sem. Vivamus </p>
					<!-- Popup Video -->
					<a data-fancybox href="https://www.youtube.com/watch?v=jrkvirglgaQ">
						<i class="ti-control-play video"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Video Promo  ====-->

<!--=================================
=            Testimonial            =
==================================-->
<section class="section testimonial" id="testimonial">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Testimonial Slider -->
				<div class="testimonial-slider owl-carousel owl-theme">
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow">
							<!-- Speech -->
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="image">
							</div>
							<!-- Name and Company -->
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow">
							<!-- Speech -->
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="image">
							</div>
							<!-- Name and Company -->
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow">
							<!-- Speech -->
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="image">
							</div>
							<!-- Name and Company -->
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
					<!-- Testimonial 01 -->
					<div class="item">
						<div class="block shadow">
							<!-- Speech -->
							<p>
								Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.
								Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor
								sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi,
								pretium ut lacinia in, elementum id enim.
							</p>
							<!-- Person Thumb -->
							<div class="image">
								<img src="images/testimonial/feature-testimonial-thumb.jpg" alt="image">
							</div>
							<!-- Name and Company -->
							<cite>Abraham Linkon , Themefisher.com</cite>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Testimonial  ====-->

<section class="call-to-action-app section bg-blue">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>It's time to change your mind</h2>
				<p>Download over 2 million humans .Get <a href="https://themefisher.com/products/small-apps-free-app-landing-page-template/">Small Apps</a> free forever!
					<br>We say you won’t look back.</p>
				<ul class="list-inline">
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-apple"></i>
							Iphone
						</a>
					</li>
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-android"></i>
							Android
						</a>
					</li>
					<li class="list-inline-item">
						<a href="" class="btn btn-rounded-icon">
							<i class="ti-microsoft-alt"></i>
							Windows
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
