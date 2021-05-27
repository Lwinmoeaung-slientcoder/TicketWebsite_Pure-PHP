<?php

if (isset($_POST['file'])) {
  $filepath  = "../admin/file/".basename($_FILES['file']['name']);
  $file  = $_FILES['file']['name'];
  $query="INSERT INTO illudb(name,date,title,about,image,finish,video) VALUES ('$name','$date','$title','$about','$file','$sit','$video')";
  $result = mysqli_query($conn,$query);
  if (move_uploaded_file($_FILES['file']['tmp_name'],$filepath) ) {
    // header('Location: createEvents.php');
  }else {
       $msg="There was a problem uploading image";
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form  action="#" method="POST">
        <label for="" class="control-label">File</label>
        <input type="file" class="form-control" name="file" required="">
  </form>
  </body>
</html>
