<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GADA AND ODA INTEGRATIOND</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Service</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#"class="nav-link">Availability</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#"class="nav-link">Feedback</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="pages/examples/contacts.html#"class="nav-link"> About</a>
      </li>
        </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-2">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
    
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">Logout
       
      </a>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column"   data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="../admin.php" class="nav-link ">
            <i class="nav-icon fas fa-th"></i>
              <p>
                 Dashboard
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
            
          </li>
          <li class="nav-item">
                <a href="../account/account.php" class="nav-link">
                  <i class="fa fa-tasks nav-icon"></i>
                  <p> Account</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
              </li>
          <li class="nav-item ">
            <a href="../bus/bus.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Bus
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="../route/route.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               route
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>
        
          <li class="nav-item">
                <a href="../schedule/schedule.php" class="nav-link ">
                  <i class="fa fa-calendar nav-icon"></i>
                  <p> Schedule</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
             </li>

              <li class="nav-item">
                <a href="../information/information.php" class="nav-link active">
                  <i class="fa fa-info nav-icon"></i>
                  <p> Information</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Comment/comment.php" class="nav-link">

                  <i class="fa fa-comments  nav-icon"></i>
                  <p> comment </p>
                  <i class="fas fa-angle-left right"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="../report/report.php" class="nav-link">
                  <i class="fa fa-reply-all nav-icon"></i>
                  <p> Report</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
              </li>
          
          <li class="nav-item">
            <a href="../../pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right nav-icon"></span>
              </p>
            </a>
          </li>

          
        </ul>
      </nav>

    </div>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../admin.php">ADMIN</a></li>
              <li class="breadcrumb-item active">BUSES</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
         
        </div>
      </div>
    </div>
    
    
    <section class="content">
      <div class="container-fluid">
   
        <div class="row">
          <div class="col-lg-12 col-6">
            <!-- small box -->
            <div class="small-box bg-info" alignment="center">
              <div class="inner">
                <h4>INTEGRATED ODAA & GEDA BUS TICKET RESERVATION & CONTROL SYSTEM </h4>

              </div>
             
          </div>
         
         
          </div>
        </div>      
           </section>
  </div>
  <footer class="main-footer">
   
    <span>Copy right  2020 Developed GC students  All rights reserved.</span>
   
   </footer>
  <aside class="control-sidebar control-sidebar-primary">
    
  </aside>
 
</div>



<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
</body>
</html>
