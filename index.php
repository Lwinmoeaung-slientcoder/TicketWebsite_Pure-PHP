<?php
require_once "config/dbconfig.php";
include_once "Nav.php";
$imagefilepath1="admin/images/HomePageImage/HomepageImage/img1.jpg";
$imagefilepath2="admin/images/HomePageImage/AboutUsHomePageImage/img2.jpg";
?>

			<!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6>This is me</h6>
							<h1>Philip Gilbert</h1>
							<p>
								You will begin to realise why this exercise is called the Dickens Pattern with reference to the ghost showing Scrooge some different futures.
							</p>
							<a href="#" class="primary-btn text-uppercase">discover now</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img class="img-fluid" src=<?php echo $imagefilepath1;?> alt="" style="height:613px;width:483px;">
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src=<?php echo $imagefilepath2;?> alt="" style="height:428px;width:603px;">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>About Us</h6>
							<h1 class="text-uppercase">Personal Details</h1>
							<p>
								Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
							</p>
							<a href="about.php" class="primary-btn text-uppercase">View Full Details</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End home-about Area -->

			<!-- Start services Area -->
			<?php include_once "service&pj.php"?>
		<!-- End services Area -->

			<!-- Start portfolio-area Area -->
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Our Latest Featured Projects</h1>
		                        <p>Who are in extremely love with eco friendly system.</p>
		                    </div>
		                </div>
		            </div>

                    <div class="filters-content">
                        <div class="row grid">
													<!-- Start Info_img.php -->
													<?php  include_once "Info_img.php"; ?>
														<!-- End Info_img.php -->
                        </div>
                    </div>

                </div>
            </section>
            <!-- End portfolio-area Area -->

				<!-- start footer Area -->
	<?php include_once "footer.php";?>
				<!-- End footer Area -->

		</body>
	</html>
