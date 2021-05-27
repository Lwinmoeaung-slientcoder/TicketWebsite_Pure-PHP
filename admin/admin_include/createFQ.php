<?php
session_start();
if ($_SESSION['login_Auth']==1) {
  require_once '../../config/dbconfig.php';
  include_once 'admin_header.php';
  include_once 'admin_nav.php';
  if(isset($_POST["create"]))
       {
         $question=$_POST['question'];
         $answer=$_POST['answer'];

               $query="INSERT INTO fqdb(question,answer) VALUES ('$question','$answer')";
               $result = mysqli_query($conn,$query);

              header('Location: createFQ.php');

               echo '<html><font size="3" color="red">Finish</font></html>';
             }


?>

<form action="#" method="post" enctype="multipart/form-data">
  <div class="col-sm-10">
    <font color="white">
            <div class="form-group">
                <label for="" class="control-label">Question</label>
                <input type="text" class="form-control" name="question" required="">
            </div>
            <div class="form-group" id="pwd2">
                <label for="" class="control-label">Answer</label>
                <input type="text" class="form-control" name="answer" required="">
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
