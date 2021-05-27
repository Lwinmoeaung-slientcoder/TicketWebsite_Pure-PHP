<?php
 session_start();
 if ($_SESSION['login_Auth']==1) {
   require_once '../../config/dbconfig.php';
   include_once 'admin_header.php';
   include_once 'admin_nav.php';
   if (isset($_POST['events_edit'])) {
     $events_id=$_POST['events_edit'];
     $sql="SELECT * FROM illudb WHERE id='$events_id'";
     $result=mysqli_query($conn,$sql);
     while ($rows=mysqli_fetch_assoc($result)) {
       $name    =$rows['name'];
       $date    =$rows['date'];
       $title   =$rows['title'];
       $about   =$rows['about'];
       $image   =$rows['image'];
       $finish  =$rows['finish'];
      $video  =$rows['video'];
 ?>

 <form action="#" method="post" enctype="multipart/form-data">
   <div class="col-sm-10">
     <font color="white">
             <div class="form-group">
                 <label for="" class="control-label">Author Name</label>
                 <input type="text" class="form-control" name="autorname" value='<?php echo $name;?>'>
             </div>
             <div class="form-group">
                 <label for="" class="control-label">Date</label>
                 <input type="date" class="form-control" name="date" value='<?php echo $date;?>'>
             </div>
             <div class="form-group">
                 <label for="" class="control-label">Post Title</label>
                 <input type="text" class="form-control" name="title" value='<?php echo $title;?>'>
             </div>
             <div class="form-group">
                 <label for="" class="control-label">Events Situation(finished or unfinished)</label>
                 <input type="text" class="form-control" name="sit" value='<?php echo $finish;?>'>
             </div>
             <div class="form-group">
                 <label for="" class="control-label">Image</label>
                 <input type="file" class="form-control" name="image" value='<?php echo $image;?>' id="image">
             </div>
             <div class="form-group">
                 <label for="" class="control-label">Video</label>
                 <input type="file" class="form-control" name="video" value='<?php echo $video;?>'>
             </div>
             <div class="form-group">
                 <label for="" class="control-label">About</label>
                 <input type="textarea" class="form-control" name="about" value='<?php echo $about;?>' style="height:100px;">
             </div>
             <div class="form-group">
                   <button type="submit" class="btn btn-danger btn-sm" name="Edit" value="<?php echo $events_id ?>">Edit</button></td>
             </div>
           </font>
           </div>
 </form>
 <?php
        }
    }
    if (isset($_POST['Edit'])) {
      $eventedit_id = $_POST['Edit'];
      $edit_name    = $_POST['autorname'];
      $edit_date    = $_POST['date'];
      $edit_title   = $_POST['title'];
      $edit_about   = $_POST['about'];
      $edit_image   = $_POST['image'];
      $edit_sit     = $_POST['sit'];
      $edit_video    = $_POST['video'];
      $sql="UPDATE illudb SET name='$edit_name',date='$edit_date',title='$edit_title',about='$edit_about',image='$edit_image',finish='$edit_sit',video='$edit_video' WHERE id='$eventedit_id'";
      $result=mysqli_query($conn,$sql);
        header('Location: Events.php');
 }
}
 else {
  header('Location: ../index.php');
 }
  ?>
