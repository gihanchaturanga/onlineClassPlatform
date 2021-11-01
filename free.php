<?php
  include 'dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Free Students</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="temp/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="temp/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="temp/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="temp/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="temp/dist/css/adminlte.min.css">
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
  <?php include 'user_sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Free Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payments</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">
                    <label>Select Teacher</label>
                    <form action = "free.php" method = "GET">
                    <div class="input-group mb-3">
                      <!-- /btn-group -->
                      
                      <Select name="t_id" class="form-control">
                        <?php 
                          $query_t = "SELECT * FROM teacher WHERE stat = '1'";
                          $result = mysqli_query($conn, $query_t);
                          while($row = mysqli_fetch_array($result)){
                            if($_GET['t_id'] == $row['id']){
                              $selected = "selected";
                            }else{
                              $selected = "";
                            }
                            echo '<option '.$selected.' value="'.$row['id'].'">'.$row['name'].'</option>';
                          }

                        ?>
                      </Select>
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-danger">Select</button>
                      </div>
                    </div>
                    </form>
                  </div>
                  <div class="col-md-6">
                    <label>Select Class</label>
                    <form action="php-selectClassFree.php" method="GET">
                      <input type="hidden" name="t_id" value="<?php echo $_GET['t_id']?>">
                    <div class="input-group mb-3">
                      <!-- /btn-group -->
                      <?php
                        if(isset($_GET['t_id'])){
                          $disabled = "";
                        }else{
                          $disabled = "disabled";
                        }
                      ?>
                      <select name="c_id" class="form-control" <?php echo $disabled; ?>>
                        <?php
                          if(isset($_GET['t_id'])){
                            $t_id = $_GET['t_id'];
                            $query2 = "SELECT * FROM class WHERE stat = '1' AND t_id = '$t_id'";
                            $result2 = mysqli_query($conn, $query2);
                            while($row2 = mysqli_fetch_array($result2)){
                              if(isset($_GET['c_id']) && $_GET['c_id'] == $row2['id']){
                                $select2 = "selected";
                              }else{
                                $select2 = "";
                              }
                              echo '<option value="'.$row2['id'].'" '.$select2.'>'.$row2['grade'].' - '.$row2['subject'].'</option>';
                            }

                          }
                        ?>
                      </select>


                      <div class="input-group-append">
                        <button type="submit" class="btn btn-danger" <?php echo $disabled ?>>Select</button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <form action="php-free.php" method="GET">
              <input type="hidden" name="t_id" value="<?php echo $_GET['t_id']; ?>">
                <input type="hidden" name="c_id" value="<?php echo $_GET['c_id']; ?>">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile No.</th>
                    <th>Status</th>
                    <th>Settings</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(isset($_GET['c_id'])){
                        $clz_id = $_GET['c_id'];
                        $queryPay = "SELECT * FROM payment INNER JOIN student ON payment.s_id = student.id WHERE payment.stat = '1' AND payment.c_id = '$clz_id'";
                        $resultPay = mysqli_query($conn, $queryPay);
                        if(mysqli_num_rows($resultPay) > 0){
                          while($rowPay = mysqli_fetch_array($resultPay)){
                            if($rowPay['payment'] == 0){
                              $payment = "NOT-PAID";
                              $color = "text-danger";
                              $dis = "";
                            }elseif($rowPay['payment'] == 1){
                              $payment = "PAID";
                              $color = "text-success";
                              $dis = "";
                            }else{
                              $payment = "FREE";
                              $color = "text-primary";
                              $dis = "disabled";
                            }
                            echo '<tr>
                        <td>STU '.$rowPay['id'].'</td>
                        <td>'.$rowPay['name'].'</td>
                        <td>'.$rowPay['mobile'].'</td>
                        <td class="'.$color.'">'.$payment.'</td>
                        <td>
                          <div class="btn-group container">
                            <button name="s_id" value="'.$rowPay['id'].'" class="btn btn-sm btn-primary" '.$dis.'>Mark As Free</button>
                          </div>
                        </td>
                      </tr>';
                          }
                          
                        }else{
                          
                        }
                        
                      }
                    ?>
                  <!-- <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td class="text-danger">Not Paid</td>
                    <td>
                      <div class="btn-group container">
                        <div class="btn btn-sm btn-success">Paid</div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td class="text-success">Paid</td>
                    <td>
                      <div class="btn-group container">
                        <div class="btn btn-sm btn-success">Paid</div>
                      </div>
                    </td>
                  </tr>-->
                  </tbody>
                  <tfoot>
                  <tr> 
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile No.</th>
                    <th>Status</th>
                    <th>Settings</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              </form>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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

<!-- jQuery -->
<script src="temp/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="temp/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
<!-- AdminLTE App -->
<script src="temp/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="temp/dist/js/demo.js"></script>
<!-- Page specific script -->
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
<?php include 'myScripts.php'; ?>
<?php 
  if(isset($_GET['reset'])){
    echo "<script>
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn ml-1 btn-success',
      cancelButton: 'btn mr-1 btn-danger'
    },
    buttonsStyling: false
  })
  
  swalWithBootstrapButtons.fire({
    title: 'Are You Sure...???',
    text: 'You cannot revert this action.',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, Reset',
    cancelButtonText: 'No, cancel',
    reverseButtons: true
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.replace('php-resetPay.php?web=".$_SERVER['PHP_SELF']."');
    } else if (
      /* Read more about handling dismissals below */
      result.dismiss === Swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons.fire(
        'Cancelled..!',
        'Payment resetting canceled.',
        'error'
      )
    }
  })
  </script>";
  }
?>
</body>
</html>
