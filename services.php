<?php
require_once "config/dbconfig.php";
include_once "Nav.php";
?>

			<!-- start banner Area -->
			<section class="about-banner">
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Services
							</h1>
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="services.php"> Services</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start services Area -->
			<?php include_once "service&pj.php"?>
		<!-- End services Area -->


			<!-- Start testimonial Area -->
		  <?php include_once "clientsFeedback.php" ?>
		    <!-- End testimonial Area -->

				<!-- start footer Area -->
	<?php include_once "footer.php";?>
				<!-- End footer Area -->


		</body>
	</html>
