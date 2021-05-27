<?php session_start(); ?>

<?php
$_SESSION['login_user'] = null;
$_SESSION['login_pwd'] =  null;
$_SESSION['login_Auth']=false;
    header('location: ../index.php');

?>
