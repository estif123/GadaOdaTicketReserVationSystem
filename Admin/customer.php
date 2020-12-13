<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Gada and Oda Integrated Ticket Reservation System</title>
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
    <a href="#" class="brand-link">
      <img src="../dist/img/logo/odalogo.jpg" alt="Logo" class="brand-image img-circle elevation-0"
           style="opacity: .8">
      <span class="brand-text font-weight-danger">Geda and Oda ITRS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="profile.php" class="d-block">Admin username</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="admin.php" class="nav-link active">
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
            <a href="Route/route.php" class="nav-link">
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
        
</ul>
     </nav> </aside></div></body>   
          
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Customers</h1>
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
    <div class="card card-solid">
      <div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">              
              <?php
                          include("../database.php"); 

                      $sql=" SELECT *from account where type='customer'";
                      $result=$conn->query($sql);
                      while(($row = $result->fetch_assoc())){
                        echo ('<div class="col-12 col-sm-6 col-md-4  align-items-stretch">');
                              echo('<div class="card bg-light">');
                               echo('<div class="card-header text-muted border-bottom-0">'.$row["type"].'</div>');
                               echo ('<div class="card-body pt-0">');
                                 echo ('<div class="row">');
                                     echo('<div class="col-7">
                                            <h2 class="lead"><b></b></h2>
                                            <p class="text-muted text-sm"><b>Full name: </b> '.$row["fullname"].' </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email: '.$row["email"].'</li>
                                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: '.$row["phonenumber"].'</li>
                                            </ul>
                                          </div>');
                                    echo('<div class="col-5 text-center">
                                             <img src="../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                                          </div>');
                                  echo('</div>');
                             echo('</div>');
                             echo('<div class="card-footer">');
                                echo('<div class="text-right">
                                <a href="profile.php" class="btn btn-sm btn-primary"  >
                                <i class="fas fa-user"></i> View Profile
                              </a>
                                <a href="profile.php" class="btn btn-sm bg-teal"  >
                                <i class="fas fa-edit"></i>Update
                              </a>
                                    <a href="#" class="btn btn-sm btn-warning">
                                    <i class="fas fa-trash-alt"></i>
                                   </a>

                                    </div>');
                             echo('</div>');
                           echo('</div>');
                         echo('</div>');
                      }  
                      ?>

    </div>
    <div class="card-footer">
    <nav aria-label="Contacts Page Navigation">
      <ul class="pagination justify-content-center m-0">
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link" href="#">7</a></li>
        <li class="page-item"><a class="page-link" href="#">8</a></li>
      </ul>
    </nav>
  </div>
  </div>
    </div>
  </div>

  
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
