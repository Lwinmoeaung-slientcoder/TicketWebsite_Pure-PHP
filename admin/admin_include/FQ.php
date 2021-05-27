<?php
session_start();
if ($_SESSION['login_Auth']==1) {
ob_start();
require_once '../../config/dbconfig.php';
include_once 'admin_header.php';
include_once 'admin_nav.php';

$sql="SELECT * FROM fqdb";
$result=mysqli_query($conn,$sql);

?>

<div class="col-sm-10">
  <table class="table" style="color:white">
    <thead class="thead-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Question</th>
                                        <th>Answer</th>
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
                                      <td><?php echo $rows['question']; ?></td>
                                       <td><?php echo $rows['answer']; ?></td>
                                       <form action="EditFQ.php" method="post">
                                           <td><button type="submit" class="btn btn-primary btn-sm" name="fq_edit" value="<?php echo $rows['id']; ?>">Edit</button></td>
                                       </form>
                                       <form action="#" method="post">
                                          <td> <button type="submit" class="btn btn-danger btn-sm" name="fq_delete" value="<?php echo $rows['id']; ?>">Delete</button></td>
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
                                if (isset($_POST['fq_delete'])) {
                                  # code...

                                $admin_id=$_POST['fq_delete'];


                                $sql = "DELETE FROM fqdb WHERE id='$admin_id'";
                                 $results= mysqli_query($conn, $sql);
                                 header('Location: FQ.php');
                                }
                                ?>
                                <?php
                               }
                               else {
                                 header('Location: ../index.php');
                               }
                                 ?>
