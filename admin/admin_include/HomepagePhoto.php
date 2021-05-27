<?php
ob_start();
session_start();
if ($_SESSION['login_Auth']==1) {
  require_once '../../config/dbconfig.php';
  include_once 'admin_header.php';
  include_once 'admin_nav.php';
  $img1="img1.jpg";
  $img2="img2.jpg";
  if(isset($_POST["upload"]))
       {
         $filesource1  ="../images/HomePageImage/HomepageImage/";
         $filesource2  ="../images/HomePageImage/AboutUsHomePageImage/";
         $filepath1  = $filesource1.basename($_FILES['image1']['name']);
         $filepath2  = $filesource2.basename($_FILES['image2']['name']);

         $file1  = $_FILES['image1']['name'];
         $file2  = $_FILES['image2']['name'];
         $query="INSERT INTO homepagephotodb(firstimage,secondimage) VALUES ('$file1','$file2')";
         $result = mysqli_query($conn,$query);
         $sql1    = "DELETE FROM homepagephotodb where firstimage='$img1' and secondimage='$img2'";
         $result = mysqli_query($conn,$sql1);
         unlink($filesource1.$img1);
         unlink($filesource2.$img2);
         $sql2    = "UPDATE homepagephotodb SET firstimage='$img1',secondimage='$img2' WHERE firstimage='$file1' and secondimage='$file2'";
         $result = mysqli_query($conn,$sql2);
             if (move_uploaded_file($_FILES['image1']['tmp_name'],$filesource1.$img1)&&move_uploaded_file($_FILES['image2']['tmp_name'],$filesource2.$img2)){
                // header('Location: HomepagePhoto.php');
              }
                else{
                      $msg="There was a problem uploading image";
                    }

      }
?>

<form action="#" method="post" enctype="multipart/form-data">
  <div class="col-sm-10">
    <font color="white">

            <div class="form-group">
                <label for="" class="control-label">Home Page's Image</label>
                <input type="file" class="form-control" name="image1">
            </div>
            <div class="form-group">
                <label for="" class="control-label">About Us Photo</label>
                  <input type="file" class="form-control" name="image2">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="upload" value="Upload">
            </div>
          </font>
          </div>
</form>

<?php
}
else {
 header('Location: ../index.php');
}
 ?>
