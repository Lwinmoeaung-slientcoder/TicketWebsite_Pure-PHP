<?php
session_start();
if ($_SESSION['login_Auth']==1) {
  require_once '../../config/dbconfig.php';
  include_once 'admin_header.php';
  include_once 'admin_nav.php';
  if(isset($_POST["create"]))
       {
         $admin_name=$_POST['adminname'];
         $admin_pwd=$_POST['adminpwd'];
         $admin_pwd1=$_POST['adminpwd1'];
            if ($admin_pwd1 === $admin_pwd)
             {
               $query="INSERT INTO login(username,password) VALUES ('$admin_name','$admin_pwd')";
               $result = mysqli_query($conn,$query);

              header('Location: createadmin.php');
            if(!$result)
               {
                 die('Query Failed'.mysqli_error($conn));
               }
               echo '<html><font size="3" color="red">Finish</font></html>';
             }
            else {
                      ?>
                <script>
                      $(document).ready(function()
                      {
                           $("#pwd2").css("background-color","red");
                           $("#pwd1").css("background-color","red");
                           alert("Passwords are not same!!!!!");

                      });
                </script>
                    <?php
                     header('Location: createadmin.php');
                }
        }
?>

<form action="#" method="post" enctype="multipart/form-data">
  <div class="col-sm-10">
    <font color="white">
            <div class="form-group">
                <label for="" class="control-label">Admin Name</label>
                <input type="text" class="form-control" name="adminname" required="">
            </div>
            <div class="form-group" id="pwd2">
                <label for="" class="control-label">Admin Password</label>
                <input type="password" class="form-control" name="adminpwd" required="">
            </div>
            <div class="form-group" id="pwd1">
                <label for="" class="control-label">Retype Password</label>
                <input type="password" class="form-control" name="adminpwd1" required="">
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
