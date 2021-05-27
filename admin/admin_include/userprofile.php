<div class="container">
<div class="row">
<div class="col-sm-12">
<h3>Admin Name</h3>
</div><!-- /col-sm-12 -->
</div><!-- /row -->
<div class="row">
<div class="col-sm-1">
<div class="thumbnail">
<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
</div><!-- /thumbnail -->
</div><!-- /col-sm-1 -->

<div class="col-sm-5">
<div class="panel panel-default">
<div class="panel-heading">
<strong><?php echo $_SESSION['login_user']?></strong> <span class="text-muted" style="color:green">&nbsp;&nbsp;&nbsp;Active Now</span>
</div>
<div class="panel-body">
<form action="logout.php" method="post">
<button type="submit" class="btn btn-primary btn-sm" name="logout" value=""><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</button></td>
</form>
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->

</div><!-- /container -->
