<?php
session_start();
if ($_SESSION['login_Auth']==1) {
  require_once '../../config/dbconfig.php';
  include_once 'admin_header.php';
  include_once 'admin_nav.php';
  if(isset($_POST["create"]))
       {
         $img_name=$_POST['name'];
         $img_date=$_POST['date'];
         $filepath  = "../images/InformationImage/".basename($_FILES['image']['name']);
         $file  = $_FILES['image']['name'];

               $query="INSERT INTO infodb(img_name,img_date,img) VALUES ('$img_name','$img_date','$file')";
               $result = mysqli_query($conn,$query);
               if (move_uploaded_file($_FILES['image']['tmp_name'],$filepath)) {
                 header('Location: createInformation.php');
               }else {
                    $msg="There was a problem uploading image";
               }
             }


?>

<form action="#" method="post" enctype="multipart/form-data">
  <div class="col-sm-10">
    <font color="white">
            <div class="form-group">
                <label for="" class="control-label">ImageName</label>
                <input type="text" class="form-control" name="name" required="">
            </div>
            <div class="form-group">
                <label for="" class="control-label">ImageDate</label>
                <input type="date" class="form-control" name="date" required="">
            </div>

            <div class="form-group">
                <label for="" class="control-label">Image</label>
                <input type="file" class="form-control" name="image" required="">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="create" value="Create">
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
