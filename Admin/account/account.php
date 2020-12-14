
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
  <aside class="main-sidebar sidebar-light-primary ">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../../dist/img/logo/odalogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-0"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../profile.php" class="d-block">Username</a>
        </div>
  </div>

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
                 <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="/account/account.php" class="nav-link active">
                  <i class="fa fa-user-circle nav-icon"></i>
                  <p> Account
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
              </li>
          <li class="nav-item ">
            <a href="../bus/bus.php" class="nav-link">
              <i class="nav-icon fas fa-bus"></i>
              <p>
                 Bus
                 <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../route/route.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 route
                 <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          
          <li class="nav-item">
                <a href="../schedule/schedule.php" class="nav-link">
                  <i class="fa fa-calendar nav-icon"></i>
                  <p> Schedule
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="../information/information.php" class="nav-link">
                  <i class="fa fa-info nav-icon"></i>
                  <p> Information
                  <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../comment/comment.php" class="nav-link">

                  <i class="fa fa-comments  nav-icon"></i>
                  <p> comment </p>
                  <i class="fas fa-angle-left right"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="../report/report.php" class="nav-link">
                  <i class="fa fa-reply-all nav-icon"></i>
                  <p>Genarate Report</p>
                  <i class="fas fa-angle-left right"></i>

                </a>
              </li>
          
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
          </li>

        </ul>
      </nav>

    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <a href="addaccount.php"><h1 class="m-0 text-primary">Create new Account</h1></a>

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
    <div class="card card-solid">
  <div class="card-body pb-0">
    <div class="row d-flex align-items-stretch">              
              <?php
                      $host="localhost";
                      $username="root";
                      $password="admin12345";
                      $db="gadaoda";
                      $conn=mysqli_connect($host,$username,$password,$db);
                      $sql=" SELECT *from account";
                      $result=$conn->query($sql);
                      while(($row = $result->fetch_assoc())){
                        echo ('<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">');
                        echo('<div class="card bg-light">');
                        echo('<div class="card-header text-muted border-bottom-0">'.$row["type"].'</div>');
                           echo ('<div class="card-body pt-0">');
                             echo ('<div class="row">');
                                echo('<div class="col-7">
                                   <h2 class="lead"><b></b></h2>
                                   <p class="text-muted text-sm"><b>Full name: </b> '.$row["username"].' </p>
                                   <ul class="ml-4 mb-0 fa-ul text-muted">
                                     <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Email: '.$row["email"].'</li>
                                     <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: '.$row["phone_number"].'</li>
                                   </ul>
                                 </div>');
                                 echo('<div class="col-5 text-center">
                                   <img src="../../dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                                 </div>');
                               echo('</div>');
                             echo('</div>');
                             echo('<div class="card-footer">');
                               echo('<div class="text-right">
                               <a href="profile.php" class="btn btn-sm btn-primary"  >
                               <i class="fas fa-user"></i> View Profile
                             </a>
                               <a href="#" class="btn btn-sm bg-teal">
                                   <i class="fas fa-edit"></i>Update
                                 </a>
                                 <a href="profile.php" class="btn btn-sm btn-warning"  >
                                 <i class="fas fa-trash-alt"></i> Delete
                               </a>
                               </div>');
                             echo('</div>');
                           echo('</div>');
                         echo('</div>');
     
                      }  
                      ?>
                      <div class="modal fade" id="account_detail">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">User Details</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form  method="POST" action="addaccountreg.php" role="form">
                <div class="card-body">
                <div class="form-group">
                    <label for="fullname">Fullname:</label>
                      <span>fullname field</span>
                  </div> 
                  <div class="form-group">
                    <label for="email">Email:</label>
                      <span>email field</span>
                  </div>
                  <div class="form-group">
                    <label for="username">username:</label>
                    <span>username field</span>
                  </div>
                  <div class="form-group">
                    <label for="Password">Password:</label>
                    <span>pasword field</span>
                  </div>
                  <div class="form-group">
                    <label for="username">phone Number:</label>
                    <span>phone number field</span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Photo:</label>
                    <span>photo field</span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Account type:</label>
                    <span>type field</span>
                  </div>
                      </div>   
        </form>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-primary" data-dismiss="modal">update</button>
          <button type="button" class="btn btn-danger toastrDefaultSuccess" data-dismiss="modal" >Delate</button>
        </div>
      </div>
    </div>
  </div>
    </div>
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

</section>

</div></div>
  <footer class="main-footer">
   
   <span><h5>Copy right  2020 Developed GC students  All rights reserved.</h5></span>
   
   </footer>
  <aside class="control-sidebar control-sidebar-primary">
    
  </aside>
 
</div>

<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../../dist/js/adminlte.js"></script>
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
</body>
</html>
