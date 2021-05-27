<?php
 session_start();
 if ($_SESSION['login_Auth']==1) {
   require_once '../../config/dbconfig.php';
   include_once 'admin_header.php';
   include_once 'admin_nav.php';
   if (isset($_POST['info_edit'])) {
     $info_id=$_POST['info_edit'];
     $sql="SELECT * FROM infodb WHERE id='$info_id'";
     $result=mysqli_query($conn,$sql);
     while ($rows=mysqli_fetch_assoc($result)) {
       $name    =$rows['img_name'];
       $date    =$rows['img_date'];
       $img     =$rows['img'];
 ?>

 <form action="#" method="post" enctype="multipart/form-data">
   <div class="col-sm-10">
     <font color="white">
             <div class="form-group">
                 <label for="" class="control-label">ImageName</label>
                 <input type="text" class="form-control" name="name" value='<?php echo $name;?>'>
             </div>
             <div class="form-group">
                 <label for="" class="control-label">ImageDate</label>
                 <input type="date" class="form-control" name="date" value='<?php echo $date;?>'>
             </div>

             <div class="form-group">
                 <label for="" class="control-label">Image</label>
                 <input type="file" class="form-control" name="image" value='<?php echo $img;?>'>
             </div>
             <div class="form-group">
               <button type="submit" class="btn btn-danger btn-sm" name="Edit" value="<?php echo $info_id ?>">Edit</button></td>
             </div>
           </font>
           </div>
 </form>
 <?php
}
    }
    if (isset($_POST['Edit'])) {
      $infoedit_id  = $_POST['Edit'];
      $edit_name    = $_POST['name'];
      $edit_date    = $_POST['date'];
      $edit_img     = $_POST['image'];

      $sql="UPDATE infodb SET img_name='$edit_name',img_date='$edit_date',img='$edit_img' WHERE id='$infoedit_id'";
      $result=mysqli_query($conn,$sql);
        header('Location: Information.php');
 }
}
 else {
  header('Location: ../index.php');
 }
  ?>
