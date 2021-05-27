
<?php
session_start();
require_once '../config/dbconfig.php';

$sql="SELECT * FROM login";
$result=mysqli_query($conn,$sql);

if (isset($_POST['Login'])) {
  # code...
  if (empty($_POST['user']) || empty($_POST['pass'])) {
  $error = "Username or Password is invalid";
  header('Location: index.php');
}
else{
   $user=$_POST['user'];
   $pwd=$_POST['pass'];

 while ($rows = mysqli_fetch_array($result)) {
 $username=$rows['username'];
 $password=$rows['password'];
        if ($user===$username&&$pwd===$password) {
          $_SESSION['login_user'] = $username;
          $_SESSION['login_pwd'] = $password;
          $_SESSION['login_Auth']=1;
              header('Location: admin_include');
          }
        }
      }
       mysqli_close($conn); // Closing Connection
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
					<form role="form" action="#" method="post" class="login100-form validate-form" autocomplete="off">
					<span class="login100-form-title p-b-70">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						 <input type="text" name="user"  class="input100" placeholder="Enter Desired Username" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input type="password" name="pass"  class="input100" placeholder="Password" required="">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="Login" class="login100-form-btn" class="btn btn-custom btn-lg btn-block" value="Login">
							Login
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
