<?php
session_start();
if ($_SESSION['login_Auth']==1) {
ob_start();
require_once '../../config/dbconfig.php';
include_once 'admin_header.php';
include_once 'admin_nav.php';

$sql="SELECT * FROM login";
$result=mysqli_query($conn,$sql);

?>

<div class="col-sm-10">
  <table class="table" style="color:white">
    <thead class="thead-light">
                                    <tr>
                                        <th>id</th>
                                        <th>username</th>
                                        <th>password</th>
                                        <th>Delete</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                               <?php
                                   while ($rows = mysqli_fetch_array($result)) {
                                    ?>

                                    <tr>
                                      <td><?php echo $rows['id']; ?></td>
                                      <td><?php echo $rows['username']; ?></td>
                                       <td><?php echo $rows['password']; ?></td>

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
                                $sql = "DELETE FROM login WHERE id='$admin_id'";
                                 $results= mysqli_query($conn, $sql);
                                 header('Location: admin_list.php');
                                }
                               }
                               else {
                                 header('Location: ../index.php');
                               }
                             ?>
