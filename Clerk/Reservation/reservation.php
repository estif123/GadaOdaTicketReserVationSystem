<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GADA AND ODA INTEGRATIOND</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
        <a href="../../index3.php" class="nav-link">Home</a>
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

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#"><span>Logout</span>
        </a>
      
        
    </ul>
  </nav>
 
  <aside class="main-sidebar sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="../../index3.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <spans class="brand-text font-weight-danger"><strong>Geda and Oda</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">clerk</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="../index.php" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            </li>
            </li>
          <li class="nav-item">
            <a href="reservation.php" class="nav-link active">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
             Reservation
             <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
            <li class="nav-item ">
            <a href="../schedule.php" class="nav-link ">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
              Schedule
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../bus.php" class="nav-link">
              <i class="nav-icon fas fa-bus"></i>
              <p>
             Bus
                             <i class="fas fa-angle-left right"></i>

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../route.php" class="nav-link">
              <i class="nav-icon fas fa-route"></i>
              <p>
             Route
                             <i class="fas fa-angle-left right"></i>

              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../customer.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
             Customer
                             <i class="fas fa-angle-left right"></i>

              </p>
            </a>
          </li>


          <li class="nav-item has-treeview">
            <a href="../Comment/comment.php" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
        comment                
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
            <h1 class="m-0 text-dark">Reservations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Clerk</a></li>
              <li class="breadcrumb-item active">Reservation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <span class="card-title">Routes with distance and with tarrif assigned for the route</span>
                <a href="add_new_reservation.php">
                    <button  class="btn  btn-primary float-sm-right "><i class=" fas fa-plus"></i></button>
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                        <?php
                               include("../../database.php"); 
                               $sql = " select reservation_Id,first_name,last_name,status,bus,schedule from reservation a join customer c on a.customer=c.cust_Id;";
                               $result = $conn->query($sql);
                               if(!$result){
                                 echo "no result found";
                               }
                          echo('<table id="example1" class="table table-bordered" style="border-collapse:collapse;">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>First name</th>
                                      <th>Last name</th>
                                      <th>Bus</th>
                                      <th>Schedule</th>
                                      <th>status</th>
                                      <th>Actions</th>
                                    </tr>
                              </thead>');
                              echo('<tbody>');
                             
                               while($row = $result->fetch_assoc()) {
                               echo ('<tr  >');
                                  echo ('<td>'.$row["reservation_Id"].'</td>');                                  
                                    echo ('<td>'.$row["first_name"].'</td>');
                                      echo('<td>'.$row["last_name"].'</td>');
                                      echo('<td>'.$row["bus"].'</td>');
                                      echo('<td>'.$row["schedule"].'</td>');
                                      echo('<td>'.$row["status"].'</td>');
                                      echo('<td>
                                      <div class="btn-group">
                                       <button type="button" class="btn btn-default btn-sm" ><i class="far fa-edit"></i></button>
                                       <!-- <div class="nav-item dropdown ">
                                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                                           aria-haspopup="true" aria-expanded="false"> --choose--</a>
                                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                             <a class="dropdown-item" href="#">Passengers list</a>
                                             <a class="dropdown-item" href="#">Route time table</a>
                                              <a class="dropdown-item" href="#">Seat list</a>
                                           </div>
                                        </div> -->
                                      </div>
                                    </td>');
                                echo('</tr>');
                               }
           
                             
                                
                              echo('</tbody>');
                          echo('</table>');
                         ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
      </section>
  </div>
  
  <footer class="main-footer">
    <span><strong></strong> &copy; 2020 JU Computer Graduate Class Science Students</strong></span>
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

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
