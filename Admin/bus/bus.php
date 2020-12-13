<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GADA AND ODA INTEGRATIOND</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
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
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">Logout
        </a>
       
      </li> 
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-light-primary ">
    <a href="#" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle "
           style="opacity: .8">
      <span class="brand-text font-weight-danger">Oda and Geda</span>
    </a>
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column"   data-widget="treeview" role="menu" data-accordion="false">
          
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
                <a href="../Account/account.php" class="nav-link">

                  <i class="fa fa-users nav-icon"></i>
                  <p> Account</p>
                  <i class="fas fa-angle-left right"></i>
                </a>

              </li>
              
          <li class="nav-item ">
            <a href="../Bus/bus.php" class="nav-link active">
              <i class="nav-icon fas fa-bus"></i>
              <p>
                 Bus  
              </p>
              <i class="fas fa-angle-left right"></i>

            </a>
          </li>


          <li class="nav-item">
            <a href="../Route/route.php" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                 route
              </p>
              <i class="fas fa-angle-left right"></i>
            </a>
          </li>
          
          <li class="nav-item">
                <a href="../Schedule/schedule.php" class="nav-link">
                  <i class="fa fa-calendar nav-icon"></i>
                  <p>Schedule</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="../information/information.php" class="nav-link">
                  <i class="fa fa-info nav-icon"></i>
                  <p>Information</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Comment/comment.php" class="nav-link">
                  <i class="fa fa-comments  nav-icon"></i>
                  <p>comment </p>
                  <i class="fas fa-angle-left right"></i>
                </a>

              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-reply-all nav-icon"></i>
                  <p>Genarate Report</p>
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
              <i class="fas fa-angle-left right"></i>

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
              <li class="breadcrumb-item active">BUS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
         
        </div>
      </div>
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
          <a href="addbus.php">  <p class="card-title text-primary">Add New Bus</p></a>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text"id="bus_search" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
       
         <div class="card-body table-responsive p-0" style="height: 300px;"> 
         <?php
    include("../../database.php"); 
    $sql = "SELECT *FROM addbus";
    $result = $conn->query($sql);
    if(!$result){
      echo "no result found";
    }
    
         echo('<table class="table table-head-fixed text-nowrap table-striped">');

              echo ('<thead>
                <tr>
                  <th>ID</th>
                  <th>Bus name</th>
                  <th>Owner</th>
                  <th>Plate Number</th>
                  <th>Side Number</th>
                  <th>Number of Seat</th>
                  <th>Model</th>
                  <th>Price</th>
                  <th>Actions</th>


                </tr>
              </thead>');
             echo ('<tbody id="bus_table">');
             while($row = $result->fetch_assoc()) {
               echo('<tr>
                  <td>'.$row["bus_Id"].'</td>
                  <td>'.$row["busname"].'</td>
                  <td>'.$row["owner"].'</td>
                  <td>'.$row["platenumber"].'</td>
                  <td>'.$row["sidenumber"].'</td>
                  <td><span class="tag tag-success">'.$row["numberofseat"].'</span></td>
                  <td> '.$row["model"].'</td>
                  <td>'.$row["price"].'</td>
                  <td>
                  <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" ><i class="far fa-edit"></i></button>
                  <button type="button" class="btn btn-default btn-sm" id="delete_bus" ><i class="far fa-trash-alt"></i></button>
                  </div>
                  </td>

                </tr>');
              
             };
                echo  ('</tbody>');

            echo('</table>');
            ?>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
 
  
</body>

</div></div>
  <footer class="main-footer">
   
   <h5><span>Copy right  2020 Developed GC students  All rights reserved.</span></h5>
   
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
</script>
<script 
src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script
 src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/swal2/sweetalert2.min.js"></script>
<script>
$(document).ready(function(){
  $("#bus_search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#bus_table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

$('#button').click(() => {
    swal({
      title: 'Submit email to run ajax request',
      input: 'email',
      showCancelButton: true,
      confirmButtonText: 'Submit',
      showLoaderOnConfirm: true,
      buttonsStyling: false,
      confirmButtonClass: 'btn btn-primary btn-lg',
      cancelButtonClass: 'btn btn-lg',
      preConfirm: function(email) {
        return new Promise(function(resolve, reject) {
          setTimeout(function() {
            if (email === 'taken@example.com') {
              reject('This email is already taken.')
            } else {
              resolve()
            }
          }, 2000)
        })
      },
      allowOutsideClick: false
    }).then(function(email) {
      swal({
        type: 'success',
        title: 'Ajax request finished!',
        html: 'Submitted email: ' + email
      })
    }).catch(swal.noop)
  });
  
</script> 
</body>
</html>
