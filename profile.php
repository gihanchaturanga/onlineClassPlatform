<?php
  include 'dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Profile</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="temp/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="temp/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="temp/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="temp/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="temp/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="temp/index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="temp/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="temp/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="temp/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'stu_sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php
    $id = $_SESSION["USER_ID"];
      $query = "SELECT mobile FROM student WHERE id = '$id'";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($result);
    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="temp/dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION["USER_NAME"] ; ?></h3>

                <p class="text-muted text-center">STUDENT</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Mobile No.</b> <a class="float-right"><?php echo $row["mobile"]; ?></a>
                  </li>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Notifications</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted" disabled>No notes.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              
              <div style="border-top: 10px; border-top-color: blue;" class="card-body">
                <div class="tab-content">
                  
                 <!-- /.card-header -->
                 <div class="col-12"><h4>Here are the details of your classes</h4></div>
            <form action="class-processing.php" method="GET">
              <?php
                $s_id = $_SESSION["USER_ID"];
                $query = "SELECT * FROM payment INNER JOIN class ON payment.c_id = class.id WHERE class.stat = '1' AND payment.stat = '1' AND s_id = '$s_id'";
                $result = mysqli_query($conn, $query);
                $noClz = mysqli_num_rows($result);
                while($row = mysqli_fetch_array($result)){
                  if($row['payment'] == 0){
                    $payment = "NOT-PAID";
                    $color = "btn-danger";
                    $dis = "disabled";
                    $link = "#";
                  }else{
                    $payment = "PAID";
                    $color = "btn-success";
                    $dis = "";
                    $link = $row['link'];
                  }
                  echo '<div class="card-body row">
                  <div class="col-md-6 col-sm-12 mt-1 mb-1"><h5>'.$row['subject'].'</h5></div>
                  <div class="col-md-3 col-sm-6"><div style="margin: auto; width: 100%;" class="btn '.$color.' mt-1 mb-1">'.$payment.'</div></div>
                  <div class="col-md-3 col-sm-6"><a value="1" name="classJoin" href="'.$link.'" style="margin: auto; width: 100%;" class="btn btn-primary mt-1 mb-1">Enter Class</a></div>
                </div>';
                }
              ?>
              <!-- <div class="card-body row">
                <div class="col-md-6 col-sm-12 mt-1 mb-1"><h5>Class Name Goes Here</h5></div>
                <div class="col-md-3 col-sm-6"><div style="margin: auto; width: 100%;" class="btn btn-success mt-1 mb-1">PAID</div></div>
                <div class="col-md-3 col-sm-6"><button value="1" name="classJoin" type="submit" href="#" style="margin: auto; width: 100%;" class="btn btn-primary mt-1 mb-1">Enter Class</button></div>
              </div>
              <div class="card-body row">
                <div class="col-md-6 col-sm-12 mt-1 mb-1"><h5>Class Name Goes Here</h5></div>
                <div class="col-md-3 col-sm-6"><div style="margin: auto; width: 100%;" class="btn btn-danger mt-1 mb-1">NOT PAID</div></div>
                <div class="col-md-3 col-sm-6"><button value="2" name="classJoin" type="submit" style="margin: auto; width: 100%;" class="btn btn-primary mt-1 mb-1" disabled>Enter Class</button></div>
              </div>

              <div class="card-body row">
                <div class="col-md-6 col-sm-12 mt-1 mb-1"><h5>Class Name Goes Here</h5></div>
                <div class="col-md-3 col-sm-6"><div style="margin: auto; width: 100%;" class="btn btn-success mt-1 mb-1">PAID</div></div>
                <div class="col-md-3 col-sm-6"><button value="3" name="classJoin" type="submit" style="margin: auto; width: 100%;" class="btn btn-primary mt-1 mb-1">Enter Class</button></div>
              </div> -->
            </form>
              <!-- /.card-body -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- DataTables  & Plugins -->
<script src="temp/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="temp/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="temp/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="temp/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="temp/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="temp/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="temp/plugins/jszip/jszip.min.js"></script>
<script src="temp/plugins/pdfmake/pdfmake.min.js"></script>
<script src="temp/plugins/pdfmake/vfs_fonts.js"></script>
<script src="temp/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="temp/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="temp/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- jQuery -->
<script src="temp/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="temp/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="temp/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="temp/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
