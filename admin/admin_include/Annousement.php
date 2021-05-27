<?php
ob_start();
session_start();
if ($_SESSION['login_Auth']==1) {
  require_once '../../config/dbconfig.php';
  include_once 'admin_header.php';
  include_once 'admin_nav.php';
  $msg="";
  $query1="SELECT * FROM annousement";
  $result1 = mysqli_query($conn,$query1);
  if(isset($_POST["create"]))
       {
         $name  = $_POST['anno'];
         $filepath  = "../images/AnnousementImage/".basename($_FILES['image']['name']);
         $file  = $_FILES['image']['name'];
         $query="INSERT INTO annousement(text,image) VALUES ('$name','$file')";
         $result = mysqli_query($conn,$query);
         if (move_uploaded_file($_FILES['image']['tmp_name'],$filepath)) {
            header('Location: Annousement.php');
         }else {
              $msg="There was a problem uploading image";
         }

             }
?>

<form action="#" method="post" enctype="multipart/form-data">
  <div class="col-sm-10">
    <font color="white">
            <div class="form-group">
                <label for="" class="control-label">Annousement</label>
                <input type="textarea" class="form-control" name="anno" required="">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Image</label>
                <input type="file" class="form-control" name="image" required="" id="image">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="create" value="Create">
            </div>
          </font>
          </div>
</form>

<div class="col-sm-10">
  <table class="table" style="color:white">
    <thead class="thead-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Annoused</th>
                                        <th>Image</th>
                                        <th>Delete</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                               <?php
                                   while ($rows = mysqli_fetch_array($result1)) {
                                    ?>

                                    <tr>
                                      <td><?php echo $rows['id']; ?></td>
                                      <td><?php echo $rows['text']; ?></td>
                                       <td><?php echo $rows['image']; ?></td>

                                       <form action="#" method="post">
                                          <td> <button type="submit" class="btn btn-danger btn-sm" name="delete" value="<?php echo $rows['id']; ?>">Delete</button></td>
                                       </form>
                                      </td>
                                    </tr>

                                  <?php
                                  }
                                  ?>
                                    </tbody>
                                </table>
                          </div>

<?php
if (isset($_POST['delete'])) {
$admin_id=$_POST['delete'];
$sql = "DELETE FROM annousement WHERE id='$admin_id'";
 $results= mysqli_query($conn, $sql);
 header('Location: Annousement.php');
}
}
else {
 header('Location: ../index.php');
}
 ?>
