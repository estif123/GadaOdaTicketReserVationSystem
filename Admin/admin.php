<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>GADA AND ODA INTEGRATIOND</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
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
        
        <a href="index3.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#"class="nav-link">Schedule</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#"class="nav-link"> Availability</a>
      </li>
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#"class="nav-link"> AboutUs</a>
      </li>
        </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <p>Logout</p>
        </a>
      </li>
      
  </nav>
  
  <aside class="main-sidebar sidebar-light-primary ">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="../dist/img/logo/odalogo.jpg" alt="Logo" class="brand-image img-circle elevation-0"
           style="opacity: .8">
      <span class="brand-text font-weight-danger">Geda and Oda</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block">Username</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Dashboard
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="account/account.php" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
             Account
                             <i class="fas fa-angle-left right"></i>

              </p>


            </a>
          </li>
          <li class="nav-item">
            <a href="bus/bus.php" class="nav-link">
              <i class="nav-icon fas fa-bus"></i>
              <p>
             Bus
               <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="route/route.php" class="nav-link">
              <i class="nav-icon fas fa-route"></i>
              <p>
             Route
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="schedule/schedule.php" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
             Schedule
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="information/information.php" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
             Information
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="comment/comment.php" class="nav-link">
              <i class="nav-icon fas fa-comment"></i>
              <p>
             Comment
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-reply-all"></i>
              <p>
              Genarate Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
          </li>         
</ul>
     </nav> </aside></div></body>   
          
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashbord</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
           <?php     
           
           $bus=0;
                $route=0;
                $total_reservation=0;
                $cancelled_reservation=0;
                $new_reservation=0;
                $total_customer=0;
                $bus=0;
                $route=0;
                $clerk=0;
                $driver=0;
                $new_comment=0;
                $total_comment=0;
                include("../database.php"); 
                $sql = "SELECT *FROM addbus";
                $result = $conn->query($sql);
                if(!$result){
                  echo "0";
                }
                else{
                    $bus=$result->num_rows;
                }
                $result_new_reservation=$conn->query("SELECT * FROM reservation WHERE status='new'")->num_rows;
                $result_cancelled_reservation=$conn->query("SELECT status FROM reservation WHERE status='cancelled'")->num_rows;
                $result_total_reservation=$conn->query("SELECT * FROM reservation ")->num_rows;
                $result_total_customer=$conn->query("SELECT * FROM customer")->num_rows;
                $result_new_comment=$conn->query("SELECT * FROM comment WHERE status='new'")->num_rows;
                $result_total_comment=$conn->query("SELECT * FROM comment")->num_rows;
                $result_clerk=$conn->query("SELECT * FROM account WHERE type='clerk'")->num_rows;
                $result_driver=$conn->query("SELECT * FROM account WHERE type='driver'")->num_rows;

                $result_route=$conn->query("SELECT * FROM route")->num_rows;
                if(!$result_route){
                  $route=0;
                }else{
                  $route=$result_route;
                }
                if(!$result_new_reservation){
                  $new_reservation=0;
                }else{
                  $new_reservation=$result_new_reservation;
                }
                
                if(!$result_cancelled_reservation){
                  $cancelled_reservation=0;
                }else{
                  $cancelled_reservation=$result_cancelled_reservation;
                }

                if(!$result_total_reservation){
                  $total_reservation=0;
                }else{
                  $total_reservation=$result_total_reservation;
                }

                if(!$result_new_comment){
                  $new_comment=0;
                }else{
                  $new_comment=$result_new_comment;
                }

                if(!$result_total_comment){
                  $total_comment=0;
                }else{
                  $total_comment=$result_total_comment;
                }

                if(!$result_total_customer){
                  $total_customer=0;
                }else{
                  $total_customer=$result_total_customer;
                }
                if(!$result_clerk){
                  $clerk=0;
                }else{
                  $clerk=$result_clerk;
                }
                if(!$result_driver){
                  $driver=0;
                }else{
                  $driver=$result_driver;
                }



                echo('<div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text"> Clerks</span>
                      <span class="info-box-number">
                        10
                      </span>
                      <span><a href="clerk.php">show more</a></span>
                    </div>
                    <!-- /.info-b6ox-content -->
                  </div>
                  <!-- /.info-box -->
                </div>');
                // <!-- /.col -->

                // <!-- fix for small devices only -->
                echo('<div class="clearfix hidden-md-up"></div>');

                echo('<div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">drivers</span>
                      <span class="info-box-number">760</span>
                      <span><a href="driver.php"> show more </a></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>');
                // <!-- /.col -->
                echo('<div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Total Customers</span>
                      <span class="info-box-number">'.$total_customer.'</span>
                      <span><a href="customer.php"> show more </a></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>');
                // <!-- /.col -->
                echo('<div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-bus"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Buses</span>
                      <span class="info-box-number">'.$bus.'</span>
                      <span><a href="bus/bus.php"> show more </a></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>');
                // <!-- /.col -->
                echo('<div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-route"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Routes</span>
                      <span class="info-box-number">'.$route.'</span>
                      <span><a href="route/route.php"> show more </a></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>');
                // <!-- /.col -->
                echo('<div class="col-12 col-sm-6 col-md-3">
                  <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-comments"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">New Comments</span>
                      <span class="info-box-number">'.$new_comment.'</span>
                      <span><a href="account/account.php"> show more </a></span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>');
                // <!-- /.col -->
                echo('<div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Total Comments</span>
                    <span class="info-box-number">'.$total_comment.'</span>
                    <span><a href="account/account.php"> show more </a></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>');

        ?>
        </div>
       
      </div>
     
    </section>
  <!-- Comments Content-->
   </div>    
    <footer class="main-footer">
      <span><strong>&copy; 2020 JU Computer Graduate Class Science Students</strong></span>
      All rights reserved.
    </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
