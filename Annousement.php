<?php
ob_start();
require_once "config/dbconfig.php";
include_once "Nav.php";

$imagefilepath="admin/images/AnnousementImage/";
$sql="SELECT * FROM annousement";
$result=mysqli_query($conn,$sql);


?>


   <!-- start banner Area -->
   <section class="about-banner">
     <div class="container">
       <div class="row d-flex align-items-center justify-content-center">
         <div class="about-content col-lg-12">
           <h1 class="text-white">
             About Us
           </h1>
           <p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.php"> About Us</a></p>
         </div>
       </div>
     </div>
   </section>
   <!-- End banner Area -->

   <!-- Start home-about Area -->
   <section class="home-about-area section-gap">
     <div class="container">
       <div class="location">
       <div class="nav">
         <ul>
           <li ><a href="about.php">Future Plan</a></li>
           <li ><a class="active" href="#">Anousement</a></li>
           <li ><a href="Members.php">Members</a></li>
         </ul>
       </div>
     </div>
     <?php
     while ($row=mysqli_fetch_assoc($result)) {
       $text=$row['text'];
       $image=$row['image'];

      ?>
     <div class="container">
       <div class="row">
         <div class="col-md-5">
           <p>

             <?php echo $text ?>
           </p>
         </div>
         <div class="col-md-7">
           <p>
            <img class="img-fluid" src=<?php echo $imagefilepath.$image;?> alt="" style="height:400px;width:500px;">
           </p>
         </div>
       </div>
     </div>
     <?php
   }
      ?>
       </div>



 </section>
   <!-- Start testimonial Area -->
    <?php include_once "clientsFeedback.php" ?>
     <!-- End testimonial Area -->

     <!-- start footer Area -->
<?php include_once "footer.php";?>
     <!-- End footer Area -->

 </body>
</html>
