<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gada and Oda Ticket Reservation System</title>
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
        <a class="nav-link" data-toggle="dropdown" href="#">
          <span>Logout</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary ">
    <!-- Brand Logo -->
    <a href="../../index3.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Gada and Oda</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
            <a href="../index.php" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Dashboard
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
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

</ul>
     </nav> </aside></div></body>   
          
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    
    <!-- Content Header (Page header) -->
   <hr>
   <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-sm-6">
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Clerk</a></li>
            <li class="breadcrumb-item active">add Reservation</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Adding new Reservation</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="add_new_reservation_reg.php">
                      <div class="card-body">
                      <?php
                       include("../../database.php"); 
                       $sql = " select * from customer";
                       $result = $conn->query($sql);
                       if(!$result){
                         echo "no result found";
                       }
                      echo('<div class="row">');
                      
                        echo('<div class="col-sm-6">
                          <!-- text input -->
                         <div class="form-group">');

                         
                         echo('<label>Customer</label>');
                           echo('<select class="form-control select2" name="customer" style="width: 100%;">');
                           while($row=$result->fetch_assoc()){

                             echo('<option>'.$row['cust_Id'].'</option>');
                           }
                            echo('</select>');
                          echo('</div>');
                        echo('</div>');
                        
                       include("../../database.php"); 
                       $sql2 = " select * from schedule";
                       $result2 = $conn->query($sql2);
                       if(!$result2){
                         echo "no result found";
                       }
                        echo('<div class="col-sm-6">');
                          echo('<div class="form-group">
                            <label>schedule</label>');
                            echo('<select class="form-control select2" name="schedule" style="width: 100%;">');
                            while($row2=$result2->fetch_assoc()){
 
                              echo('<option>'.$row2['schedule_Id'].'</option>');
                            }
                             echo('</select>');
                         echo('</div>
                        </div>
                      </div>');
                      
                      include("../../database.php"); 
                      $sql3= " select bus_Id from addbus";
                      $result3 = $conn->query($sql3);
                      if(!$result3){
                        echo "no result found";
                      }
                     echo('<div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                         <div class="form-group">
                         <label>Bus</label>');
                         echo('<select class="form-control select2" name="bus" style="width: 100%;">');
                         while($row3=$result3->fetch_assoc()){

                           echo('<option>'.$row3['bus_Id'].'</option>');
                         }
                          echo('</select>');                
                         echo('</div>
                        </div>');
                        include("../../database.php"); 
                        $sql4= " select * from seat_numbers";
                        $result4 = $conn->query($sql4);
                        if(!$result3){
                          echo "no result found";
                        }

                        echo('<div class="col-sm-6">
                          <div class="form-group">
                            <label>Seat number</label>');

                            echo('<select class="form-control select2" name="seat_no" style="width: 100%;">');
                            while($row4=$result4->fetch_assoc()){
   
                              echo('<option>'.$row4['seat_no'].'</option>');
                            }
                             echo('</select>');  
                             echo('</div>
                        </div>
                      </div>');
                      
                     echo('</div>');

                       
                      ?>
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary swalDefaultSuccess">Submit</button>
                      </div>
                    </form>
                  </div>
            </div>
            <div class="col-dm-6"></div>
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

<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- SweetAlert2 -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="../../plugins/sweetalert2/sweetalert2.js"></script>

<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>

<!-- Page script -->
<script>
    $(function () {
      const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
      $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  
    })
  </script>
</body>
</html>
