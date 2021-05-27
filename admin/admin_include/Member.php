<?php
ob_start();
session_start();
if ($_SESSION['login_Auth']==1) {
  require_once '../../config/dbconfig.php';
  include_once 'admin_header.php';
  include_once 'admin_nav.php';
  $msg="";
  $query1="SELECT * FROM member";
  $result1 = mysqli_query($conn,$query1);
  if(isset($_POST["create"]))
       {
         $name  = $_POST['mem'];
         $position=$_POST['pos'];
         $filepath  = "../images/Member/".basename($_FILES['image']['name']);
         $file  = $_FILES['image']['name'];
         $query="INSERT INTO member(member,image,position) VALUES ('$name','$file','$position')";
         $result = mysqli_query($conn,$query);
         if (move_uploaded_file($_FILES['image']['tmp_name'],$filepath)) {
            header('Location: Member.php');
         }else {
              $msg="There was a problem uploading image";
         }

             }
?>

<form action="#" method="post" enctype="multipart/form-data">
  <div class="col-sm-10">
    <font color="white">
            <div class="form-group">
                <label for="" class="control-label">Member name</label>
                <input type="textarea" class="form-control" name="mem" required="">
            </div>
               <div class="form-group">
                    <label for="" class="control-label">Member's Position</label>
                    <input type="text" class="form-control" name="pos" required="">
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
                                        <th>Members Name</th>
                                        <th>Position</th>
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
                                      <td><?php echo $rows['member']; ?></td>
                                      <td><?php echo $rows['position']; ?></td>
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
$sql = "DELETE FROM Member WHERE id='$admin_id'";
 $results= mysqli_query($conn, $sql);
 header('Location: Member.php');
}
}
else {
 header('Location: ../index.php');
}
 ?>
