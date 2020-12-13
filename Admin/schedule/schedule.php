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
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <script src="../../plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="../../plugins/sweetalert2/sweetalert2.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
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
                <a href="../schedule/schedule.php" class="nav-link active">
                  <i class="fa fa-calendar nav-icon"></i>
                  <p> Schedule</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
             </li>

              <li class="nav-item">
                <a href="../information/information.php" class="nav-link">
                  <i class="fa fa-info nav-icon"></i>
                  <p> Information</p>
                  <i class="fas fa-angle-left right"></i>
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
    
    <section class="content">

        <div class="col-md-12">
            <div class="card">
              <div class="card-header p-3 ">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#daily_schedule" data-toggle="tab">Daily Schedule</a></li>
                  <li class="nav-item"><a class="nav-link" href="#passenger_list" data-toggle="tab">Passenger List</a></li>
                  <li class="nav-item"><a class="nav-link" href="#route_time_table" data-toggle="tab">Route Timetable</a></li>
                  <li class="nav-item"><a class="nav-link" href="#seat_list" data-toggle="tab">Seat Lists</a></li>
                  <li class="nav-item  ml-auto"><a class="nav-link " href="#seat_list" data-toggle="collapse" 
                  data-target="#add_new_schedule" aria-expanded="false" aria-controls="collapseExample">
                  <button type="button" class="btn btn-success btn-sm"  ><i class=" fas fa-plus"></i></button>
                  </a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="daily_schedule">
                    <!-- add new schedule inline form -->
                          <div class="collapse" id="add_new_schedule">
                              <form class="form-inline" method="POST" action="addschedule.php">
                              <?php                
                                               include('../../database.php');
                                                    $sql = "SELECT *FROM route";
                                                    $result2 = $conn->query($sql);
                                
                                                    echo ('<form method="post" id="departure_city">');
                                                    if (!$result2) {
                                                      echo ('<select name="departure_city" id="departure_city" class="form-control">
                                                                                        <option >No departure city found</option>  
                                                                                       
                                                                                      </select>
                                                                                      <br /> ');
                                                    }
                                
                                
                                
                                                    echo ('<div class="form-group select2bs4 mb-2 mr-sm-2 departure_city_group" id="departure_city_group">');
                                                    echo ('<label class="form_control">Departure City</label>');
                                
                                                    echo ('<select name="departure_city" id="departure_city" class="form-control  mb-2 mr-sm-2" vlaue =' . $row['departure_city'] . ' >');
                                                    while ($row = $result2->fetch_assoc()) {
                                                      echo ('<option >' . $row["departure_city"] . '</option>');
                                                    }
                                
                                                    echo ('</select>
                                                                              <br /> ');
                                
                                                    echo ('</div>');
                                     
                                                    include('../../database.php');
                                                    $sql = "SELECT *FROM route";
                                                    $result2 = $conn->query($sql);
                                
                                                    echo ('<form method="post" id="destination_city">');
                                                    if (!$result2) {
                                                      echo ('<select name="destination_city" id="destination_city" class="form-control">
                                                                                        <option >No destination city found</option>  
                                                                                       
                                                                                      </select>
                                                                                      <br /> ');
                                                    }
                                
                                
                                
                                                    echo ('<div class="form-group select2bs4 mb-2 mr-sm-2 destination_city_group" id="destination_city_group">');
                                                    echo ('<label class="form_control mb-2 mr-sm-2">Destination City</label>');
                                
                                                    echo ('<select name="destination_city" id="destination_city" class="form-control  mb-2 mr-sm-2" vlaue =' . $row['destination_city'] . ' >');
                                                    while ($row = $result2->fetch_assoc()) {
                                                      echo ('<option >' . $row["destination_city"] . '</option>');
                                                    }
                                
                                                    echo ('</select>
                                                                              <br /> ');
                                
                                                    echo ('</div>');
                                ?>


                                  <label for="departure_time" class="mr-sm-2">Departure time:</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control   mr-sm-2" name="departure_time" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                  </div>
                                  <label for="arrival_time" class="mr-sm-2">Arrival time:</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control mr-sm-2" name="arrival_time" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                  </div>
                                  <!-- <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Enter departure city" id="departure_city"> -->
                                  <label for="service" class="mr-sm-2">Service:</label>
                                  <div class="form-group" id="service" >
                                      <select class="form-control select2bs4 mb-2 mr-sm-2" style="width: 100%;" name="service">
                                        <option>Geda</option>
                                        <option>Oda</option>
                                      </select>
                                    </div>
                                  

                                  <button type="submit" class="btn btn-primary  mr-sm-2">Submit</button>
                              </form>
                          </div>       
                      <!-- end of add new schedule inline form-->
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
                               include("../../database.php"); 
                               $sql = "SELECT *FROM schedule";
                               $result = $conn->query($sql);
                               if(!$result){
                                 echo "no result found";
                               }


                              //  <a href="modify_schedule.php?id='.$row['schedule_Id'].'</a>

                          echo('<table id="example2" class="table table-bordered" style="border-collapse:collapse;">
                              <thead>
                                  <tr>
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
                                 echo ('<td>'.$row["departure_city"].'</td>');
                                  echo('<td>'.$row["destination_city"].'</td>');
                                  echo('<td>'.$row["date"].'</td>');
                                  echo('<td>'.$row["start_time"].'</td>');
                                  echo('<td>'.$row["arrival_time"].'</td>');
                                  echo('<td><span class="badge badge-warning">'.$row["status"].'</span></td>');

                              

                                  echo('<td>
                                  <a  class="btn btn-default btn-sm mr-sm-2 " href="modify_schedule.php?id='.$row['schedule_Id'].'"><i class="far fa-edit"></i></a>
                                  <a  class="btn btn_delete btn-default btn-sm mr-sm-2 " data-id='.$row['schedule_Id'].'><i class="far fa-trash-alt"></i></a>
                                  </td>');
                                
                                  // <div class="btn-group">
                                  //    <button type="button" class="btn btn-default btn-sm" ><i class="far fa-edit"></i></button>
                                  //    <button type="button" class="btn btn_delete btn-default btn-sm" data-id="" ><i class="far fa-trash-alt"></i></button>
                                     
                                  //     <!-- <div class="nav-item dropdown ">
                                  //       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                                  //        aria-haspopup="true" aria-expanded="false"> --choose--</a>
                                         
                                  //       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  //          <a class="dropdown-item" href="#">Passengers list</a>
                                  //          <a class="dropdown-item" href="#">Route time table</a>
                                  //           <a class="dropdown-item" href="#">Seat list</a>
                                  //        </div>
                                  //     </div> -->
                                  //   </div>

                              //   echo('</tr>');
                              //   echo('<tr class="p">');
                              //     echo('<td colspan="6" class="hiddenRow">');
                              //       echo('<div class="accordian-body collapse p-3" id="row1">');
                              //         echo('<p> Departure City: <span>'.$row["departure_city"].'</span></p>');
                              //         echo('<p> Destination City: <span>'.$row["destination_city"].'</span></p>');
                              //         echo('<p>Start time: <span>'.$row["start_time"].'</span> </p>');
                              //         echo('<p>Arrival time : <span>'.$row["arrival_time"].'</span> </p>');
                              //         echo('<p>Status : <span class="badge badge-warning">'.$row["status"].'</span> </p>');
                              //         echo('<p><button class="btn btn-secondary ">Assign bus </button></p>');


                              //         echo('</div>'); 
                              //    echo('</td>'); 
                              //  echo('</tr>');
                               }
            
                              echo('</tbody>');
                          echo('</table>');
                         ?>
                        
                  </div>
                  <div class="tab-pane" id="passenger_list">

                    <div class="callout callout-info">
                      <h5><i class="icon fas fa-info"></i> Passengers list</h5>
                       <p> This is the list of all selected bus trip. you can view the the reservation information by selecting "start location". You can also view total reservations location.  </p>
                    </div>     
                    <form class="form" action="schedule.php">
                                
                                <div class="form-group row">
                                  <label  class=" mr-sm-2">Total Passengers:</label>
                                  <label for="total_passengers" class=" mr-sm-2"><h5>110</h5></label>
                                </div>
                                <div class="form-group row">
                                  <label  class=" mr-sm-2">Total Reservations:</label>
                                  <label for="total_reservations" class=" mr-sm-2"><h5>50</h5></label>
                                </div>
                              </form>       
                              <table id="passengers_list" class="table table-stripped table-hover">
                              <thead>
                                  <tr>
                                      <th>Customer</th>
                                      <th>Phone</th>
                                      <th>From</th>
                                      <th>To </th>
                                      <th>Bus type</th>
                                      <th>seat(s)</th>
                                      <th>Actions</th>
                                    </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Gadissa</td>
                                  <td>+25192135647</td>
                                  <td>Nekemite</td>
                                  <td>Jimma</td>
                                  <td>Oda</td>
                                  <td>2</td>
                                  <td>
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm" ><i class="far fa-edit"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"  ><i class="far fa-trash-alt"></i></button>
                                    </div>
                                  </td>
                                </tr>
                              
                              </tbody>
                            </table>     
                  </div>
                             

                  <div class="tab-pane" id="route_time_table">
                  <div class="callout callout-info mt-2 ">
                      <h5><i class="icon fas fa-info"></i> Route time table</h5>
                      <p> Here you can see  a list of routes(in form of Departure city-Destination City) .You can view the list of busses assigned to a route and 
                       You can also sort the list using the  arrow into each column header.You can view more details about the bus/trip or start some actions using the arrow next to "Add booking" button.
                       </p>
                     </div>  
                     <div>
                              </form>       
                              <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">
                                                <div class="form-group row" id="route" >
                                                  <label for="route" class=" mr-sm-2">Select Route:</label>
                                                    <select class="form-control select2bs4 mb-2 mr-sm-2" style="width: 50%;">
                                                      <option>Jimma-Finfine</option>
                                                      <option>Nekemite-Jimma</option>
                                                      <option>Jimma-Demb Dolo</option>
                                                      <option>Metu-Finfine</option>
                                                    </select>
                                                </div>
                                                <div class="form-group row">
                                                  <label  class=" mr-sm-2">Bussses Assigned:</label>
                                                  <label for="total_passengers" class=" mr-sm-2"><h5>10</h5></label>
                                                </div>
                                                
                                                <div class="form-group row">
                                                  <label  class=" mr-sm-2">Price for route(in Birr):</label>
                                                  <label for="price" class=" mr-sm-2"><h5>350</h5></label>
                                                </div>
                                                <div class="form-group row" id="bus" >
                                                  <label for="bus" class=" mr-sm-2">Select bus:</label>
                                                    <select class="form-control select2bs4 mb-2 mr-sm-2" style="width: 50%;">
                                                      <option>Mercedes</option>
                                                      <option>VOLVO BUS</option>
                                                      <option>ISUZU</option>
                                                    </select>
                                                </div>

                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                  <p class="lead">Route details for selected bus</p>

                                  <div class="table-responsive">
                                    <table class="table">
                                      <tr>
                                        <th style="width:50%">Driver:</th>
                                        <td>Gemechu</td>
                                      </tr>
                                      <tr>
                                        <th>Model</th>
                                        <td>2020</td>
                                      </tr>
                                      <tr>
                                        <th>Plate number:</th>
                                        <td>ORO21546</td>
                                      </tr>
                                      <tr>
                                        <th>Total seat:</th>
                                        <td><span class="badge badge-info">60</span></td>
                                      </tr>
                                      <tr>
                                        <th>Reserved seat:</th>
                                        <td><span class="badge badge-primary">40</span></td>
                                      </tr>
                                      <tr>
                                        <th>Available seat:</th>
                                        <td><span class="badge badge-success">20</span></td>
                                      </tr>
                                    </table>
                                  </div>
                                </div>
                                <!-- /.col -->
                             </div>
                     </div>

                    
                    
                    
                </div>
                  <div class="tab-pane" id="seat_list">
                  <div class="callout callout-info mt-2 ">
                      <h5><i class="icon fas fa-info"></i> Seat List</h5>
                      <p> Here you can see  a list of buses that will departure today or the date selected by you.You can filter the lists of buses by routes.
                       You can also sort the list using the  arrow into each column header.You can view more details about the bus/trip or start some actions using the arrow next to "Add booking" button.
                       </p>
                     </div>                     
                    </div>

                    
                            <!-- /.card-body -->
                    </div>
                           <!-- /.card -->
                  </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
              </section>

             </div>
                

                  
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
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
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<script>
  $(function () {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 6000
    });
    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        type: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });

    $('#passengers_list').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
    $('.accordion-toggle').click(function(){
	$('.hiddenRow').hide();
	$(this).next('tr').find('.hiddenRow').show();
});

$('.btn_delete').click(function() {
  var scheduleId = $(this).data('id');

  SwalDelete(scheduleId);
  e.preventDefault();
    });

  });
  function SwalDelete 
  (scheduleId) {
    Swal.fire({
   title: 'Are you sure?',
   text: "You won't be able to revert this!",
   type: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!',
   showLoaderOnConfirm: true,
     
   preConfirm: function() {
     return new Promise(function(resolve) {
          
        $.ajax({
        url: 'delete_schedule.php',
        type: 'POST',
           data: 'id='+scheduleId,
           dataType: 'json'
        })
        .done(function(response){
        //  Swal.fire('Deleted!', response.message, response.status);
          Swal.fire(
            title = 'deleted ',
            text = 'Schedule has been deleted',
            type = 'success'
          ).then(function(){
            window.location.href="schedule.php";
          });
        
        })
        .fail(function(){
         swal('Oops...', 'Something went wrong with ajax !', 'error');
        });
     });
      },
    allowOutsideClick: true     
  });
  }
</script>
</body>
</html>
