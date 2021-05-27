<?php
session_start();
if ($_SESSION['login_Auth']==1) {
ob_start();
require_once '../../config/dbconfig.php';
include_once 'admin_header.php';
include_once 'admin_nav.php';
$sql="SELECT * FROM illudb";
$result=mysqli_query($conn,$sql);

?>

<div class="col-sm-10">
<table class="table" style="color:white">
  <thead class="thead-light">
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>About</th>
                                        <th>Image</th>
                                        <th>Situation</th>
                                        <th>Video</th>
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
                                       <td><?php echo $rows['name']; ?></td>
                                       <td><?php echo $rows['date']; ?></td>
                                       <td><?php echo $rows['title']; ?></td>
                                       <td><?php echo $rows['about']; ?></td>
                                       <td><?php echo $rows['image']; ?></td>
                                       <td><?php echo $rows['finish']; ?></td>
                                        <td><?php echo $rows['video']; ?></td>
                                       <form action="EditEvents.php" method="post">
                                           <td><button type="submit" class="btn btn-primary btn-sm" name="events_edit" value="<?php echo $rows['id']; ?>">Edit</button></td>
                                       </form>
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
                                	# code...
                                $event_value=$_POST['delete'];
                                $sql = "DELETE FROM illudb WHERE id='$event_value'";
                                 $results= mysqli_query($conn, $sql);
                                 header('Location: Events.php');
                                }
                                ?>
                                <?php
                               }
                               else {
                                 header('Location: ../index.php');
                               }
                                 ?>
