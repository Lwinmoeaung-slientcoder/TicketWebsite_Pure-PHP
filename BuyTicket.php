<?php
ob_start();
session_start();
include_once "Nav.php";
require_once "config/dbconfig.php";
$imagefilepath="admin/images/InformationImage/";
$videofilepath="admin/video/";
if (isset($_POST['detail'])) {
  // code...
$illu_id   = $_POST['detail'];


$query     = "SELECT * FROM illudb where id=	$illu_id";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_assoc($result)) {
  // code...
  $name	= $row['name'];
  $date  = $row['date'];
  $title	= $row['title'];
  $about	= $row['about'];
  $img	  = $row['image'];
  $video = $row['video'];


?>
<head>
  <style>
  * {box-sizing: border-box;}
  body {font-family: Verdana, sans-serif;}
  .mySlides {display: none;}
  img {vertical-align: middle;}

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }

  .active {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
  }

  @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {font-size: 11px}
  }
  </style>
  <head>
    <body>
     <!-- start banner Area -->
     <section class="relative about-banner">
       <div class="overlay overlay-bg"></div>
       <div class="container">
         <div class="row d-flex align-items-center justify-content-center">
           <div class="about-content col-lg-12">
             <h1 class="text-white">
              Details Events Page
             </h1>
             <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="Events.php">Events </a> <span class="lnr lnr-arrow-right"></span> <a href="BuyTicket.php"> Detail Events Page</a></p>
           </div>
         </div>
       </div>
     </section>
     <!-- End banner Area -->

     <!-- Start post-content Area -->
     <section class="post-content-area single-post-area">
       <div class="container">
         <div class="row">
           <div class="col-lg-8 posts-list">
             <div class="single-post row">
               <div class="col-lg-12">
                 <div class="feature-img">
                   <img class="img-fluid" src=<?php echo $imagefilepath.$img; ?> alt="404 error">
                 </div>
               </div>
               <div class="col-lg-3  col-md-3 meta-details">
                 <ul class="tags">
                   <li><a href="#">Food,</a></li>
                   <li><a href="#">Technology,</a></li>
                   <li><a href="#">Politics,</a></li>
                   <li><a href="#">Lifestyle</a></li>
                 </ul>
                 <div class="user-details row">
                   <p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php echo $name ?></a> <span class="lnr lnr-user"></span></p>
                   <p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $date;?></a> <span class="lnr lnr-calendar-full"></span></p>
                   <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
                   <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Comments</a> <span class="lnr lnr-bubble"></span></p>
                   <ul class="social-links col-lg-12 col-md-12 col-6">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                   </ul>
                 </div>
               </div>
               <div class="col-lg-9 col-md-9">
                 <h3 class="mt-20 mb-20"><?php echo $title ;?></h3>

               </div>
               <div class="col-lg-12">
                 <div class="quotes">
                     <?php echo $about; ?>
                 </div>
                 <div class="row mt-30 mb-30">
                   <div class="col-12">
                     <?php
                     echo "<video src='".$videofilepath.$video."' controls width='350px' height='200px' >";
                     ?>
                         </div>
                   <div class="col-lg-12 mt-30">

                     <!-- start -->
                     <div class="slideshow-container">

 <div class="mySlides fade">
   <div class="numbertext">1 / 6]1</div>
   <img src="img_nature_wide.jpg" style="width:100%">
   <div class="text">Caption Text</div>
 </div>

 <div class="mySlides fade">
   <div class="numbertext">2 / 6</div>
   <img src="img_snow_wide.jpg" style="width:100%">
   <div class="text">Caption Two</div>
 </div>

 <div class="mySlides fade">
   <div class="numbertext">3 / 6</div>
   <img src="img_mountains_wide.jpg" style="width:100%">
   <div class="text">Caption Three</div>
 </div>
 <div class="mySlides fade">
   <div class="numbertext">4 / 6</div>
   <img src="img_mountains_wide.jpg" style="width:100%">
   <div class="text">Caption Four</div>
 </div>
 <div class="mySlides fade">
   <div class="numbertext">5 / 6</div>
   <img src="img_mountains_wide.jpg" style="width:100%">
   <div class="text">Caption Five</div>
 </div>
 <div class="mySlides fade">
   <div class="numbertext">6 / 6</div>
   <img src="img_mountains_wide.jpg" style="width:100%">
   <div class="text">Caption Six</div>
 </div>

 </div>
 <br>

 <div style="text-align:center">
   <span class="dot"></span>
   <span class="dot"></span>
   <span class="dot"></span>
   <span class="dot"></span>
   <span class="dot"></span>
   <span class="dot"></span>

 </div>

 <!-- end+ -->
                   </div>
                 </div>
               </div>
             </div>


           </div>

             <!-- start Sidebarwidgets Area -->
         <?php include_once "sidebarwidgets.php"; ?>
           <!-- End Sidebarwidgets Area -->

         </div>
       </div>
     </section>
     <!-- End post-content Area -->

     <!-- start footer Area -->
<?php
}
}
include_once "footer.php";?>
     <!-- End footer Area -->

   </body>
 </html>
 <script>
 var slideIndex = 0;
 showSlides();

 function showSlides() {
   var i;
   var slides = document.getElementsByClassName("mySlides");
   var dots = document.getElementsByClassName("dot");
   for (i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";
   }
   slideIndex++;
   if (slideIndex > slides.length) {slideIndex = 1}
   for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" active", "");
   }
   slides[slideIndex-1].style.display = "block";
   dots[slideIndex-1].className += " active";
   setTimeout(showSlides, 2000); // Change image every 2 seconds
 }
 </script>
