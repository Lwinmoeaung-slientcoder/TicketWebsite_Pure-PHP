<?php
session_start();
if ($_SESSION['login_Auth'] == 1) {
  // code...
require_once '../../config/dbconfig.php';
include_once 'admin_header.php';
include_once 'admin_nav.php';
$sql="select * FROM illudb";
  if ($result=mysqli_query($conn,$sql)) {
    $illu_rowcount=mysqli_num_rows($result);
  }
  $sql="select * FROM fqdb";
    if ($result=mysqli_query($conn,$sql)) {
      $fq_rowcount=mysqli_num_rows($result);
    }
  $sql="select * FROM login";
    if ($result=mysqli_query($conn,$sql)) {
      $admin_rowcount=mysqli_num_rows($result);
    }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <body>
<div class="col-sm-10">
     <div id="wrapper">

         <!-- Navigation -->


         <div id="page-wrapper">
             <div class="container-fluid">
                 <!-- Page Heading -->
                 <div class="row">
                     <div class="col-lg-12">
                         <h1 class="page-header">
                             Dashboard <small>Welcome From Admin page</small>
                         </h1>
                         <ol class="breadcrumb">
                             <li class="active">
                                 <i class="fa fa-dashboard"></i> Dashboard
                             </li>
                         </ol>
                     </div>
                 </div>
                 <!-- /.row -->
                  <!-- FIRST ROW WITH PANELS -->
                 <!-- /.row -->
                 <div class="row">

                             <div class="col-lg-4 col-md-6">
                         <div class="panel panel-yellow">
                             <div class="panel-heading">
                                 <div class="row">
                                     <div class="col-xs-3">
                                         <i class="fa fa fa-etsy fa-5x"></i>
                                     </div>
                                     <div class="col-xs-9 text-right">
                                         <div class="huge"><?php echo $illu_rowcount;?></div>
                                         <div>Total Events!</div>
                                     </div>
                                 </div>
                             </div>
                             <a href="order.php">
                                 <div class="panel-footer">
                                     <span class="pull-left">View Details</span>
                                     <div class="clearfix"></div>
                                 </div>
                             </a>
                         </div>
                     </div>


                     <div class="col-lg-4 col-md-6">
                         <div class="panel panel-red">
                             <div class="panel-heading">
                                 <div class="row">
                                     <div class="col-xs-3">
                                         <i class="fa fa-question fa-5x"></i>
                                     </div>
                                     <div class="col-xs-9 text-right">
                                         <div class="huge"><?php echo $fq_rowcount; ?></div>
                                         <div>Frequently Questions!</div>
                                     </div>
                                 </div>
                             </div>
                             <a href="admin_view_all_items.php">
                                 <div class="panel-footer">
                                     <span class="pull-left">View Details</span>
                                     <div class="clearfix"></div>
                                 </div>
                             </a>
                         </div>
                     </div>

                     <div class="col-lg-4 col-md-6">
                         <div class="panel panel-green">
                             <div class="panel-heading">
                                 <div class="row">
                                     <div class="col-xs-3">
                                         <i class="fa fa-user-circle fa-5x"></i>
                                     </div>
                                     <div class="col-xs-9 text-right">
                                         <div class="huge"><?php echo $admin_rowcount ?></div>
                                         <div>Admin Account!</div>
                                     </div>
                                 </div>
                             </div>
                             <a href="admin_list.php">
                                 <div class="panel-footer">
                                     <span class="pull-left">View Details</span>
                                     <div class="clearfix"></div>
                                 </div>
                             </a>
                         </div>
                     </div>

            
                  <?php include 'userprofile.php'; ?>
             </div>
             <!-- /.container-fluid -->

         </div>
         <!-- /#page-wrapper -->

     </div>
     <!-- /#wrapper -->

     <!-- jQuery -->
     <script src="../js/jquery.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="../js/bootstrap.min.js"></script>

     <!-- Morris Charts JavaScript -->
     <script src="../js/plugins/morris/raphael.min.js"></script>
     <script src="../js/plugins/morris/morris.min.js"></script>
     <script src="../js/plugins/morris/morris-data.js"></script>
</div>
 </body>

 </html>
 <?php
}
else {
  header('Location: ../index.php');
}
  ?>
