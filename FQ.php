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
								Frequently Asked Questions
							</h1>
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="FQ.php">Frequently Question</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->


			<!-- Start faq Area -->
			<section class="faq-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<p>When someone does something that they know that they shouldn’t do, did they really have a choice. Maybe what I mean to say is did they really have a chance. You can take two people.</p>
							</div>
						</div>

            <?php
            $query="SELECT * FROM FQdb";
            $result=mysqli_query($conn,$query);
            while ($row=mysqli_fetch_assoc($result)) {
              // code...
              $question = $row['question'];
              $answer   = $row['answer'];
             ?>
					</div>

					<div class="row justify-content-center">
						      <div class="col-lg-8">
						              <dl class="accordion">
							                 <dt>
								                    <a href=""><?php  echo $question;?></a>
							                 </dt>
							<dd>
							<?php  echo $answer;?>
							</dd>
						              </dl>
						      </div>

            <?php
          }
             ?>
					</div>
				</div>
			</section>

			<!-- End faq Area -->

      <!-- start footer Area -->
<?php include_once "footer.php";?>
      <!-- End footer Area -->
      
		</body>
	</html>
