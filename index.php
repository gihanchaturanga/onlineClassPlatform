<?php
session_start();
include 'dbconn.php';
if(isset($_COOKIE['USER_ID'])){
  $id = $_COOKIE['USER_ID'];
  $query = "SELECT name FROM student WHERE stat = '1' AND id = '$id'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    $_SESSION['USER_ID'] = $_COOKIE['USER_ID'];
    $_SESSION['USER_NAME'] = $row['name'];
    setcookie('USER_ID', $id, time()+2592000);
    header("location: profile.php?usedCookies");
    exit();
  }
}else{
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="icon" href="icon_path" type="image/icon type">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="temp/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="temp/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="temp/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page bg-light">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="temp/index2.html" class="h1"><b class="text-primary">Student</b>Login</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login to your account</p>

      <form action="php-login.php" method="POST">
        <div class="input-group mb-3">
          <input type="number" class="form-control" name="mobile" placeholder="Mobile No.">
          <div class="input-group-append">
            <div class="input-group-text">
              &nbsp;
              <span class="fas fa-mobile"></span>
              &nbsp;
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="pwd" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" value="1" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block"><ion-icon style="font-size: 20px; position: relative; right: 4px; top: 4px;" name="log-in-outline"></ion-icon> LOGIN</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register as a new member</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="temp/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="temp/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="temp/dist/js/adminlte.min.js"></script>
<!--iconic icons-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php include 'myScripts.php'; ?>
</body>
</html>
