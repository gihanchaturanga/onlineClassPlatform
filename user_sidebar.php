<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="temp/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="temp/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="profile.php" class="nav-link bg-dark">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="payment.php" class="nav-link bg-dark">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
                Payment Details
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="addTeacher.php" class="nav-link bg-dark">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Add Teacher
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="editTeacher.php" class="nav-link bg-dark">
              <i class="nav-icon fas fa-minus-square"></i>
              <p>
                Remove/Edit Teacher
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="free.php" class="nav-link bg-dark">
              <i class="nav-icon fab fa-creative-commons-nc"></i>
              <p>
                Mark Free Students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?reset=1" class="nav-link bg-warning">
              <i class="nav-icon fas fa-undo"></i>
              <p>
                Reset Payments
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="php=logout.php?LOGOUT=userLogin.php" class="nav-link bg-danger">
              <i class="nav-icon fas fa-lock"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  