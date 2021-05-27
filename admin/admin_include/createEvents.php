<?php
session_start();
if ($_SESSION['login_Auth']==1) {
  require_once '../../config/dbconfig.php';
  include_once 'admin_header.php';
  include_once 'admin_nav.php';
  $msg="";
  if(isset($_POST["create"]))
       {
         $name  = $_POST['autorname'];
         $date  = $_POST['date'];
         $title = $_POST['title'];
         $about = $_POST['about'];
         $sit   = $_POST['sit'];
         $filepath  = "../images/EventsImage/".basename($_FILES['image']['name']);
         $file  = $_FILES['image']['name'];
         $videopath  = "../video/".basename($_FILES['video']['name']);
         $video  = $_FILES['video']['name'];
         $query="INSERT INTO illudb(name,date,title,about,image,finish,video) VALUES ('$name','$date','$title','$about','$file','$sit','$video')";
         $result = mysqli_query($conn,$query);
         if (move_uploaded_file($_FILES['image']['tmp_name'],$filepath) && move_uploaded_file($_FILES['video']['tmp_name'],$videopath)) {
           // header('Location: createEvents.php');
         }else {
              $msg="There was a problem uploading image";
         }

             }
             if(isset($_POST["album"]))
                  {
                    $img1  = $_POST['image1'];
                    $img2  = $_POST['image2'];
                    $img3  = $_POST['image3'];
                    $img4  = $_POST['image4'];
                    $img5  = $_POST['image5'];
                    $img6  = "../images/album/".basename($_FILES['image']['name']);
                    $img7  = $_FILES['image']['name'];
                    $videopath  = "../video/".basename($_FILES['video']['name']);
                    $video  = $_FILES['video']['name'];
                    $query="INSERT INTO illudb(name,date,title,about,image,finish,video) VALUES ('$name','$date','$title','$about','$file','$sit','$video')";
                    $result = mysqli_query($conn,$query);
                    if (move_uploaded_file($_FILES['image']['tmp_name'],$filepath) && move_uploaded_file($_FILES['video']['tmp_name'],$videopath)) {
                      // header('Location: createEvents.php');
                    }else {
                         $msg="There was a problem uploading image";
                    }

                        }

?>

<form action="#" method="post" enctype="multipart/form-data">

  <div class="col-md-10">
  <label for="" class="control-label"><font size="4" color="Green">Event Information</font></label></br></br>
    <font color="white">
            <div class="form-group">
                <label for="" class="control-label">Author Name</label>
                <input type="text" class="form-control" name="autorname" required="">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Date</label>
                <input type="date" class="form-control" name="date" required="">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Post Title</label>
                <input type="text" class="form-control" name="title" required="">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Events Situation(finished or unfinished)</label>
                <input type="text" class="form-control" name="sit" required="">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Image</label>
                <input type="file" class="form-control" name="image" required="" id="image">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Video</label>
                <input type="file" class="form-control" name="video" required="">
            </div>
            <div class="form-group">
                <label for="" class="control-label">About</label>
                <input type="textarea" class="form-control" name="about" required="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="create" value="Create">
            </div>
          </font>
          
          
</form>
</br></br>
<!-- Album -->
<form action="#" method="post" enctype="multipart/form-data"> 
        <label for="" class="control-label"><font size="4" color="Green">Create Event Album</font></label></br></br>
        <font color="white">
                <div class="form-group">
                    <label for="" class="control-label">Image1</label>
                    <input type="file" class="form-control" name="image1" required="">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Image2</label>
                    <input type="file" class="form-control" name="image2" required="">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Image3</label>
                    <input type="file" class="form-control" name="image3" required="">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Image4</label>
                    <input type="file" class="form-control" name="image4" required="">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Image5</label>
                    <input type="file" class="form-control" name="image5" required="">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Image6</label>
                    <input type="file" class="form-control" name="image6" required="">
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Image7</label>
                    <input type="file" class="form-control" name="image7" required="">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-danger" name="album" value="Album upload">
                </div>
            </font>
</form>

<?php
}
else {
 header('Location: ../index.php');
}
 ?>
