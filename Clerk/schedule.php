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
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
          <a href="profile.php class="d-block">Clerk</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Dashboard
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <li class="nav-item">
            <a href="Reservation/reservation.php" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
             Reservation
                             <i class="fas fa-angle-left right"></i>

              </p>
            </a>
          </li>
            <li class="nav-item active">
            <a href="schedule.php" class="nav-link active">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
              Schedule
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="bus.php" class="nav-link">
              <i class="nav-icon fas fa-bus"></i>
              <p>
             Bus
                             <i class="fas fa-angle-left right"></i>

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="route.php" class="nav-link ">
              <i class="nav-icon fas fa-route"></i>
              <p>
             Route
                             <i class="fas fa-angle-left right"></i>

              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="customer.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
             Customer
                             <i class="fas fa-angle-left right"></i>

              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="Comment/comment.php" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
comment                
<i class="fas fa-angle-left right"></i>
              </p>
            </a>
           
         
</ul>
     </nav> </aside></div></body>   
          
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Schedule</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Clerk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
      <section class="content">
        <div class="container-fluid">
        
          <div class="row">
          
            <div class="col-12">
            <div class="card">
              <div class="card-body">
              <div class="callout callout-info mt-2 ">
                      <h5><i class="icon fas fa-info"></i> Dialy Schedule</h5>
                      <p> Here you can see  a list of buses that will departure today or the date selected by you.You can filter the lists of buses by routes.
                       You can also sort the list using the  arrow into each column header.You can view more details about the bus/trip or start some actions using the arrow next to "Add booking" button.
                       </p>
                     </div> 

                       </hr>
                      

                      <nav class="navbar navbar-expand-sm navbar-light bg-light ">
                              <a class="navbar-brand mr-sm-2" href="#">Today</a>
                                  <!-- <input type="date" class="form-control" name="date" > -->
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control mr-sm-2" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                  </div>
                              <span class="text-dark ml-sm-2">Filter by Route:</span>


                          <div class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                              aria-haspopup="true" aria-expanded="false">
                              --choose--</a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Addis to Jimma</a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                                <a class="dropdown-item" href="#">Jimma To Addis </a>
                              </div>
                          </div>
                        </nav>
                        <?php
                               include("../database.php"); 
                               $sql = "SELECT *FROM schedule";
                               $result = $conn->query($sql);
                               if(!$result){
                                 echo "no result found";
                               }


                              //  <a href="modify_schedule.php?id='.$row['schedule_Id'].'</a>

                          echo('<table id="example2" class="table table-bordered" style="border-collapse:collapse;">
                              <thead>
                                  <tr>
                                      <th>ID</th>
                                      <th>departure city</th>
                                      <th>Destination city</th>
                                      <th>Date</th>
                                      <th>Start Time in HR</th>
                                      <th>Arrivalin  Hr </th>
                                      <th>Status </th>
                                      <th>Actions</th>

                                    </tr>
                              </thead>');
                              echo('<tbody>');
                             
                               while($row = $result->fetch_assoc()) {
                               echo ('<tr colspan="6" data-toggle="collapse" data-target="#row1" >');
                               echo ('<td>'.$row["schedule_Id"].'</td>');
                                 echo ('<td>'.$row["departure_city"].'</td>');
                                  echo('<td>'.$row["destination_city"].'</td>');
                                  echo('<td>'.$row["date"].'</td>');
                                  echo('<td>'.$row["start_time"].'</td>');
                                  echo('<td>'.$row["arrival_time"].'</td>');
                                  echo('<td><span class="badge badge-warning">'.$row["status"].'</span></td>');

                              

                                  echo('<td>
                                  <a  class="btn btn-default btn-sm mr-sm-2 " href="schedule_detail.php?id='.$row['schedule_Id'].'"><i class="far fa-edit"></i></a>
                                  </td>');
                                
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
