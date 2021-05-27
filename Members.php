<?php
ob_start();
require_once "config/dbconfig.php";
include_once "Nav.php";
$imagefilepath="admin/images/Member/";
$query="SELECT * from Member";
$result=mysqli_query($conn,$query);
 ?>

<head>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style>

</head>
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
           <li ><a href="Annousement.php">Anousement</a></li>
           <li ><a class="active" href="#">Members</a></li>
         </ul>
       </div>
       </div>
       <div class="filters-content">
           <div class="row grid">
        <?php
        while ($row=mysqli_fetch_assoc($result)) {
              $member=$row['member'];
              $image=$row['image'];
              $position=$row['position'];
         ?>
         <div class="single-portfolio col-sm-4 all vector">
           <div class="relative">
             <div class="thumb">
               <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src=<?php echo $imagefilepath.$image; ?> alt="">
             </div>
         <a href=<?php echo $imagefilepath.$image; ?> class="img-pop-up">
                     <div class="middle">
                     <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
                     </div>
         </a>
           </div>
         <div class="p-inner">
         <h4><?php echo $member ?></h4>
         <div class="cat"><?php echo $position; ?></div>
          </div>
         </div>
        <?php
            }
         ?>
       </div>
   </div>
</div>
   </section>

 </body>
</html>
