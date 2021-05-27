<?php
 session_start();
 if ($_SESSION['login_Auth']==1) {
   require_once '../../config/dbconfig.php';
   include_once 'admin_header.php';
   include_once 'admin_nav.php';
   if (isset($_POST['fq_edit'])) {
     $fq_id=$_POST['fq_edit'];
     $sql="SELECT * FROM fqdb WHERE id='$fq_id'";
     $result=mysqli_query($conn,$sql);
     while ($rows=mysqli_fetch_assoc($result)) {
       $question=$rows['question'];
       $answer  =$rows['answer'];
 ?>

 <form action="#" method="post" enctype="multipart/form-data">
   <div class="col-sm-10">
     <font color="white">
             <div class="form-group">
                 <label for="" class="control-label">Question</label>
                 <input type="text" class="form-control" name="question" value=<?php echo $question;?>>
             </div>
             <div class="form-group">
                 <label for="" class="control-label">Answer</label>
                 <input type="text" class="form-control" name="answer" value="<?php echo $answer;?>">
             </div>
             <div class="form-group">
                <button type="submit" class="btn btn-danger btn-sm" name="edit" value="<?php echo $fq_id ?>">Edit</button></td>

             </div>
           </font>
           </div>
 </form>
 <?php
        }
    }
    if (isset($_POST['edit'])) {
      $eventedit_id=$_POST['edit'];
      $edit_question=$_POST['question'];
      $edit_answer=$_POST['answer'];
      $sql="UPDATE fqdb SET question='$edit_question',answer='$edit_answer' WHERE id='$eventedit_id' ";
      $result=mysqli_query($conn,$sql);
        header('Location: FQ.php');
    }
 }
 else {
  header('Location: ../index.php');
 }
  ?>
