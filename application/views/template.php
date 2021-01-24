<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>myPOS - by Idin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- User Account -->
        <li class="dropdown user user-menu mr-3">
          <a href="#" data-toggle="dropdown">
            <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image">
            <span class="hidden"><?= $this->fungsi->user_login()->username ?></span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle">
              <p><?= $this->fungsi->user_login()->name ?>
                <small><?= $this->fungsi->user_login()->address ?></small>
              </p>
            </li>
            <li class="user-footer">
              <div class="float-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="float-right">
                <a href="<?= site_url('auth/logout') ?>" class="btn btn-flat bg-red">Logout</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?= site_url('dashboard'); ?>" class="brand-link">
        <center>
          <span class="brand"><b>MP</b></span>
          <span class="brand-text font-weight-light">MyPOS</span>
        </center>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= ucfirst($this->fungsi->user_login()->username) ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">MAIN NAVIGATION</li>
            <li class="nav-item">
              <a href="<?= site_url('dashboard'); ?>" class="nav-link . <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? "active" : ''; ?> ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('supplier'); ?>" class="nav-link . <?= $this->uri->segment(1) == 'supplier' || $this->uri->segment(1) == '' ? "active" : ''; ?> ">
                <i class="fa fa-truck"></i>
                <p>
                  Supplier
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= site_url('customer'); ?>" class="nav-link . <?= $this->uri->segment(1) == 'customer' || $this->uri->segment(1) == '' ? "active" : ''; ?> ">
                <i class="fa fa-users"></i>
                <p>
                  Customers
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-archive"></i>
                <p>
                  Products
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?= site_url('category'); ?>" class="nav-link . <?= $this->uri->segment(1) == 'category' || $this->uri->segment(1) == '' ? "active" : ''; ?> ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Categories</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= site_url('unit'); ?>" class="nav-link . <?= $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == '' ? "active" : ''; ?> ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Units</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= site_url('item'); ?>" class="nav-link . <?= $this->uri->segment(1) == 'item' || $this->uri->segment(1) == '' ? "active" : ''; ?> ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Items</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-shopping-cart"></i>
                <p>
                  Transaction
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sales</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Stock In</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Stock Out</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-chart-pie"></i>
                <p>
                  Resports
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sales</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Stock</p>
                  </a>
                </li>
              </ul>
            </li>
            <?php if ($this->fungsi->user_login()->level == 1) { ?>
              <li class="nav-header">SETTING</li>
              <li class="nav-item">
                <a href="<?= site_url('user'); ?>" class="nav-link">
                  <i class="fas fa-users"></i>
                  <p>Users</p>
                </a>
              </li>
            <?php } ?>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <!-- untuk mengambil isi yang dinamis -->
    <div class="content-wrapper">
      <!-- Main content -->
      <?php echo $contents ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2021 <a href="#">Ahmad Muhyiddin</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>

  <script>
    $(document).ready(function() {
      $('#table1').DataTable()
    })
  </script>
</body>

</html>