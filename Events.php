<?php
ob_start();
session_start();
$imagefilepath="admin/images/EventsImage/";
include_once "Nav.php";
require_once "config/dbconfig.php";
?>


<!-- start banner Area -->
	 <section class="banner-area relative blog-home-banner" id="home">
		 <div class="overlay overlay-bg"></div>
		 <div class="container">
			 <div class="row d-flex align-items-center justify-content-center">
				 <div class="about-content blog-header-content col-lg-12">
					 <h1 class="text-white">
								 Welcome From our Events
					 </h1>

				 </div>
			 </div>
		 </div>
	 </section>
	 <!-- End banner Area -->
 <!-- Start top-category-widget Area -->
 <!--	<section class="top-category-widget-area pt-90 pb-90 ">-->
 <!--		<div class="container">-->
 <!--			<div class="row">-->
 <!--				<div class="col-lg-4">-->
 <!--					<div class="single-cat-widget">-->
 <!--						<div class="content relative">-->
 <!--							<div class="overlay overlay-bg"></div>-->
 <!--						    <a href="#" target="_blank">-->
 <!--						      <div class="thumb">-->
 <!--						  		 <img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget1.jpg" alt="">-->
 <!--						  	  </div>-->
 <!--						      <div class="content-details">-->
 <!--						        <h4 class="content-title mx-auto text-uppercase">Social life</h4>-->
 <!--						        <span></span>-->
 <!--						        <p>Enjoy your social life together</p>-->
 <!--						      </div>-->
 <!--						    </a>-->
 <!--						</div>-->
 <!--					</div>-->
 <!--				</div>-->
 <!--				<div class="col-lg-4">-->
 <!--					<div class="single-cat-widget">-->
 <!--						<div class="content relative">-->
 <!--							<div class="overlay overlay-bg"></div>-->
 <!--						    <a href="#" target="_blank">-->
 <!--						      <div class="thumb">-->
 <!--						  		 <img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget2.jpg" alt="">-->
 <!--						  	  </div>-->
 <!--						      <div class="content-details">-->
 <!--						        <h4 class="content-title mx-auto text-uppercase">Politics</h4>-->
 <!--						        <span></span>-->
 <!--						        <p>Be a part of politics</p>-->
 <!--						      </div>-->
 <!--						    </a>-->
 <!--						</div>-->
 <!--					</div>-->
 <!--				</div>-->
 <!--				<div class="col-lg-4">-->
 <!--					<div class="single-cat-widget">-->
 <!--						<div class="content relative">-->
 <!--							<div class="overlay overlay-bg"></div>-->
 <!--						    <a href="#" target="_blank">-->
 <!--						      <div class="thumb">-->
 <!--						  		 <img class="content-image img-fluid d-block mx-auto" src="img/blog/cat-widget3.jpg" alt="">-->
 <!--						  	  </div>-->
 <!--						      <div class="content-details">-->
 <!--						        <h4 class="content-title mx-auto text-uppercase">Food</h4>-->
 <!--						        <span></span>-->
 <!--						        <p>Let the food be finished</p>-->
 <!--						      </div>-->
 <!--						    </a>-->
 <!--						</div>-->
 <!--					</div>-->
 <!--				</div>-->
 <!--			</div>-->
 <!--		</div>-->
 <!--	</section>-->
	 <!-- End top-category-widget Area -->


	 <!-- Start post-content Area -->
	 <section class="post-content-area">
		 <div class="container">
			 <div class="row">
				 <div class="col-lg-8 posts-list">
					 <?php
					 $query="SELECT * FROM illudb";
					 $result=mysqli_query($conn,$query);
					 while ($row=mysqli_fetch_assoc($result)) {
						 // code...
						 $id					= $row['id'];
						 $name				= $row['name'];
						 $date   		= $row['date'];
						 $title			= $row['title'];
						 $about			= $row['about'];
						 $img				= $row['image'];
						 $situation 	= $row['finish'];

						?>
					 <div class="single-post row">
						 <div class="col-lg-3  col-md-3 meta-details">

							 <div class="user-details row">
								 <p class="user-name col-lg-12 col-md-12 col-6"><a href=""><?php echo $name; ?></a> <span class="lnr lnr-user"></span></p>
								 <p class="date col-lg-12 col-md-12 col-6"><a href=""><?php echo $date; ?></a> <span class="lnr lnr-calendar-full"></span></p>
								 <p class="view col-lg-12 col-md-12 col-6"><a href=""><?php echo $situation; ?></a> <span class="lnr lnr-eye"></span></p>

							 </div>
						 </div>
						 <div class="col-lg-9 col-md-9 ">
							 <div class="feature-img">
								 <img class="img-fluid" src=<?php echo $imagefilepath.$img; ?> style="height:383px;width:383px;"alt="">
							 </div>
							 <a class="posts-title" href=""><h3><?php echo $title;?></h3></a>
							 <p class="excert">
							 <?php echo $about;?>
							 </p>
						 <!--	<form action="BuyTicket.php" method="post">-->
						 <!--	<input type="submit" class="primary-btn" name="submit" value= >-->
						 <!--</form>-->
							 <form action="BuyTicket.php" method="post">
																		 <button type="submit" class="btn-primary" name="detail" value="<?php echo $id;?>">Detail</button>
																		</form>
						 </div>
					 </div>
					 <?php
						 $_SESSION['illu_id']= $id;
						 }
						?>

				 </div>

				 <!-- start Sidebarwidgets Area -->
		 <?php include_once "sidebarwidgets.php"; ?>
			 <!-- End Sidebarwidgets Area -->

			 </div>
		 </div>
	 </section>
	 <!-- End post-content Area -->

				 <!-- start footer Area -->
	 <?php include_once "footer.php";?>
				 <!-- End footer Area -->


 </body>
</html>
