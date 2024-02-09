<?php 
require_once "../_config/config.php";
if (isset($_SESSION['user'])) {
  echo "<script>window.location='".base_url()."';</script>"; 
} else {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Lapas Rutan Manado</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url('_asset/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?=base_url('_asset/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?=base_url('_asset/dist/css/AdminLTE.min.css'); ?>">
  <link rel="icon" href="<?=base_url('_asset/img/Logo_Lapas.png'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="../_asset/img/Logo_Lapas.png" class="img-circle" width="130px"><br>
    <a><b>SISRUTAN</b> Manado</a>
  </div>
  <?php 
    if (isset($_POST['login'])) {
      $user = trim(mysqli_real_escape_string($con, $_POST['user']));
      $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
      $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));
      
      if (mysqli_num_rows($sql_login) > 0 ) {
          $_SESSION['user'] = $user;
          echo "<script>window.location='".base_url()."';</script>";
      } else { ?>
         
              <div class="alert alert-danger alert-dismissable" role="alert">
                  <a href="#" class="close" data-dismiss="alert" arial-lable="close">&times;</a>  
                  <span class="glyphicon glyphicon-exclamation-sign" arial-didden="true"></span> 
                  <strong>Login gagal!</strong> Username / password salah         
              </div>  
        <?php
      }
    }
    ?>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="" method="post">
    	<div class="form-group has-feedback">
    		<input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
    		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>	
    	</div>
    	<div class="form-group has-feedback">
			<input type="password" name="pass" class="form-control" placeholder="Password" required autofocus>
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>	
    	</div>
    	<div class="row">
    		<div class="col-xs-8"></div>
    		<div class="col-xs-4">
    			<button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>	
    		</div>
    	</div>
    </form>
  </div>
  <script src="<?=base_url('_asset/jquery/dist/jquery.js') ?>"></script>
  <script src="<?=base_url('_asset/bootstrap/dist/js/bootstrap.js') ?>"></script>
<!-- <script src="http://localhost/mypos/assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="http://localhost/mypos/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
</body>
</html>
<?php 
}
