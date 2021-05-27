<?php
session_start();
if ($_SESSION['login_Auth']==1) {
ob_start();
require_once '../../config/dbconfig.php';
include_once 'admin_header.php';
include_once 'admin_nav.php';
$sql="SELECT * FROM infodb";
$result=mysqli_query($conn,$sql);

?>

<div class="col-sm-10">
<table class="table" style="color:white">
  <thead class="thead-light">
                                    <tr>
                                        <th>id</th>
                                        <th>ImageName</th>
                                        <th>ImageDate</th>
                                        <th>Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                               <?php
                                   while ($rows = mysqli_fetch_array($result)) {
                                    ?>

                                    <tr>
                                       <td><?php echo $rows['id']; ?></td>
                                       <td><?php echo $rows['img_name']; ?></td>
                                       <td><?php echo $rows['img_date']; ?></td>
                                       <td><?php echo $rows['img']; ?></td>
                                       <form action="EditInformation.php" method="post">
                                           <td><button type="submit" class="btn btn-primary btn-sm" name="info_edit" value="<?php echo $rows['id']; ?>">Edit</button></td>
                                       </form>
                                       <form action="#" method="post">
                                          <td> <button type="submit" class="btn btn-danger btn-sm" name="info_delete" value="<?php echo $rows['id']; ?>">Delete</button></td>
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
                                if (isset($_POST['info_delete'])) {
                                	# code...
                                $info_value=$_POST['info_delete'];
                                $sql = "DELETE FROM infodb WHERE id='$info_value'";
                                $results= mysqli_query($conn, $sql);
                                 header('Location: Information.php');
                                }
                                ?>
                                <?php
                               }
                               else {
                                 header('Location: ../index.php');
                               }
                                 ?>
