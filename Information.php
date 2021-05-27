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
								Informations Page
							</h1>
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="Information.php"> Informations</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

				<!-- Start Information Area -->
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
            <!-- End Information Area -->

									<!-- start footer Area -->
					   					<?php include_once "footer.php";?>
									<!-- End footer Area -->


		</body>
	</html>
