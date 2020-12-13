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
  <script language="javascript">
    function assign_driver(){
      var schedule_Id=$('#schedule_Id1').attr('data-id');
              var driver_Id= $('#driver').val();
              if(schedule_Id=''){
                window.alert("No seclected schedule Id");
                }
              else if(driver_Id=''){
                 window.alert("No seclected driver Id");
                }
              else{
                var schedule_Id=$('#schedule_Id1').attr('data-id');
                  $.ajax({
                        url: "assign_driver.php",
                        method: "POST",
                        data: {
                          schedule_Id: $('#schedule_Id1').attr('data-id'),
                          driver_Id: $('#driver').val()
                          },
                        success: function(data) {
                          $('#assign_driver_modal').modal('hide');

                          Swal.fire({
                          title: 'Driver Assigned Successfully!',
                          type: 'success',
                          icon: 'success',
                          confirmButtonText: 'Ok'
                        }).then(function(){
                          window.location.href = "modify_schedule.php?id="+schedule_Id;
                        });
                        },
                        error: function(data) {
                                $('.error').removeClass('d-none').html(data);
                            }

                      }); 
                  }
    }
    function assign_bus(){
              var bus_Id= $('#bus1').val();
              var schedule_Id= $('#schedule_Id1').attr('data-id');
              if(schedule_Id=''){
                window.alert("No seclected schedule Id");
                }
              else if(bus_Id=''){
                 window.alert("No seclected driver Id");
                }
              else{
                var schedule_Id=$('#schedule_Id1').attr('data-id');
                  $.ajax({
                        url: "assign_bus.php",
                        method: "POST",
                        data: {
                          schedule_Id: $('#schedule_Id1').attr('data-id'),
                          bus_Id: $('#bus1').val()
                          },
                        success: function(data) {
                          $('#assign_bus_modal').modal('hide');
                          Swal.fire({
                          title: 'Bus Assigned Successfully!',
                          type: 'success',
                          icon: 'success',
                          confirmButtonText: 'Ok'
                        }).then(function(){
                          window.location.href = "modify_schedule.php?id="+schedule_Id;
                        });

                        },
                        error: function(data) {
                                $('.error').removeClass('d-none').html(data);
                            }

                      }); 
                  }
    }

  </script>
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
          <a href="#" class="nav-link">Availability</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Feedback</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="pages/examples/contacts.html#" class="nav-link"> About</a>
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
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
    <div class="container-fluid">Ctrl + Shift + I.
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
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
    <div class="alert alert-danger d-none error"></div>
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
    <section class="content">

      <div class="col-md-12">
        <div class="card">
          <div class="card-header p-3 ">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#daily_schedule" data-toggle="tab">Daily Schedule</a></li>
              <li class="nav-item"><a class="nav-link" href="#passenger_list" data-toggle="tab">Passenger List</a></li>
              <li class="nav-item"><a class="nav-link" href="#route_time_table" data-toggle="tab">Route Timetable</a></li>
              <li class="nav-item"><a class="nav-link" href="#seat_list" data-toggle="tab">Seat Lists</a></li>
              <li class="nav-item  ml-auto"><a class="nav-link " href="#seat_list" data-toggle="collapse" data-target="#add_new_schedule" aria-expanded="false" aria-controls="collapseExample">
                  <button type="button" class="btn btn-success btn-sm"><i class=" fas fa-plus"></i></button>
                </a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="daily_schedule">
                <!-- add new schedule inline form -->
                <div class="collapse" id="add_new_schedule">
                  <form class="form-inline" method="POST" action="addschedule.php">
                    <label for="departure_city" class="mb-2 mr-sm-2">Departure City:</label>
                    <div class="form-group" id="departure_city">
                      <select class="form-control select2bs4 mb-2 mr-sm-2" style="width: 100%;" name="departure_city">
                        <option>Jimma</option>
                        <option>Finfine</option>
                        <option>Demb Dolo</option>
                        <option>Nekemite</option>
                        <option>wokite</option>
                        <option>Metu</option>
                      </select>
                    </div>

                    <!-- <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Enter departure city" id="departure_city"> -->
                    <label for="destination_city" class="mr-sm-2">Destion city:</label>
                    <div class="form-group" id="destination_city">
                      <select class="form-control select2bs4 mb-2 mr-sm-2" style="width: 100%;" name="destination_city">
                        <option>Jimma</option>
                        <option>Finfine</option>
                        <option>Demb Dolo</option>
                        <option>Nekemite</option>
                        <option>wokite</option>
                        <option>Metu</option>
                      </select>
                    </div>

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
                    <div class="form-group" id="service">
                      <select class="form-control select2bs4 mb-2 mr-sm-2" style="width: 100%;" name="service">
                        <option>Geda</option>
                        <option>Oda</option>
                      </select>
                    </div>


                    <button type="submit" class="btn btn-primary  mr-sm-2">Submit</button>
                  </form>
                </div>

                <div>
                  </form>

                  <p class="lead">Schedule details for selected row</p>
                  <div class="alert alert-success d-none success"></div>
                    <div class="alert alert-danger d-none error"></div>
                  <!-- accepted payments column -->


                <?php
                  
                  include("../../database.php");
                  $sql = "SELECT *FROM schedule where schedule_Id = " . $_GET['id'];
                  $result = $conn->query($sql);
                  if (!$result) {
                    echo "no result found";
                  }           
                  while ($row = $result->fetch_assoc()) {
                    $schedule_Id=$row['schedule_Id'];
                    echo ('<form class="form" id="schedule_detail" action="schedule.php">');
                    echo ('<div class="form-group " id="schedule_id" >');
                    echo ('<label for="schedule_Id" class=" mr-sm-2">Schedule Id:</label>');
                    echo ('<label for="schedule_Id"  id ="schedule_Id1" class=" mr-sm-2"  data-id ='.$row["schedule_Id"].'><h5>' . $row["schedule_Id"] . '</h5></label>');
                    echo ('</div>');
                    echo ('<div class="form-group " id="departure_city" >');
                    echo ('<label for="departure_city" class=" mr-sm-2">Departure City:</label>');
                    echo ('<label for="departure_city" class=" mr-sm-2"><h5>' . $row["departure_city"] . '</h5></label>');
                    echo ('</div>');
                    echo ('<div class="form-group " id="destination_city" >');
                    echo ('<label for="destination_city" class=" mr-sm-2">Destination City:</label>');
                    echo ('<label for="destination_city" class=" mr-sm-2"><h5>' . $row["destination_city"] . '</h5></label>');
                    echo ('</div>');
                    echo ('<div class="form-group " id="date" >');
                    echo ('<label for="date" class=" mr-sm-2">Date:</label>');
                    echo ('<label for="date" class=" mr-sm-2"><h5>' . $row["date"] . '</h5></label>');
                    echo ('</div>');
                    echo ('<div class="form-group " id="start_time" >');
                    echo ('<label for="start_time" class=" mr-sm-2">Start Time:</label>');
                    echo ('<label for="start_time" class=" mr-sm-2"><h5>' . $row["start_time"] . '</h5></label>');
                    echo ('</div>');
                    echo ('<div class="form-group " id="arrival_time" >');
                    echo ('<label for="arrival_time" class=" mr-sm-2">Arrival Time:</label>');
                    echo ('<label for="arrival_time" class=" mr-sm-2"><h5>' . $row["arrival_time"] . '</h5></label>');
                    echo ('</div>');
                    echo ('<div class="form-group " id="service" >');
                    echo ('<label for="service" class=" mr-sm-2">Service:</label>');
                    echo ('<label for="service" class=" mr-sm-2"><h5>' . $row["service"] . '</h5></label>');
                    echo ('</div>');
                    echo ('<div class="form-group " id="status" >');
                    echo ('<label for="status" class=" mr-sm-2">Status:</label>');
                    echo ('<label for="status" class=" mr-sm-2"><h5>' . $row["status"] . '</h5></label>');
                    echo ('</div>');
                    echo ('<div class="form-group " id="buses_assigned" >');
                    echo ('<label for="buses_assigned" class=" mr-sm-2">assigned_buses:</label>');
                    $Id = $row["schedule_Id"] ;

                    $sql3 = "select busname from assign_bus a join addbus b on a.bus=b.bus_Id where a.schedule=$Id";
                    $result3 = $conn->query($sql3);
                    if (!$result3) {
                      echo "no result found";
                    } else {
                      while ($row3= $result3->fetch_assoc()) {
                        echo ('<label for="buses_assigned" class=" mr-sm-2"><h5>' . $row3["busname"] . '</h5></label>');
                      }
                    }
                    echo ('</div>');
                    echo ('<div class="form-group " id="drivers_assinged" >');
                    echo ('<label for="drivers_assigned" class=" mr-sm-2">Assigned Drivers:</label>');
                    $sql = "select name from assign_driver a join driver d on a.driver=d.driver_Id where a.schedule=$Id";
                    $result2 = $conn->query($sql);
                    if (!$result2) {
                      echo "no result found";
                    } else {
                      while ($row2 = $result2->fetch_assoc()) {
                        echo ('<label for="buses_assigned" class=" mr-sm-2"><h5>' . $row2["name"] . '</h5></label>');
                      }
                    }
    
                    echo ('</div>');
                    echo ('<div class="form-group " id="reservation" >');
                    echo ('<label for="reservation" class=" mr-sm-2">Reservation:</label>');
                    echo ('<label for="reservation" class=" mr-sm-2"><h5>' . $row["reservation"] . '</h5></label>');
                    echo ('</div>');

                    $sql = "SELECT *FROM addbus";
                    $result2 = $conn->query($sql);

                    echo ('<form method="post" id="assign_driver">');
                    if (!$result2) {
                      echo ('<select name="driver" id="driver" class="form-control">
                                                        <option >No driver found</option>  
                                                       
                                                      </select>
                                                      <br /> ');
                    }



                    echo ('<div class="form-group select2bs4 mb-2 mr-sm-2 assign_bus_group" id="assign_bus_group" style="display:none">');
                    echo ('<label class="form_control">Select bus</label>');

                    echo ('<select name="bus" id="bus" class="form-control  mb-2 mr-sm-2" vlaue =' . $row['bus_Id'] . ' >');
                    while ($row = $result2->fetch_assoc()) {
                      echo ('<option >' . $row["bus_Id"] . '</option>');
                    }

                    echo ('</select>
                                              <br /> ');

                    echo ('</div>');
                    echo ('<div class="btn-group">');
                    echo ('<button type="button" class="btn  btn-primary mr-sm-2" data-toggle="modal" data-target="#assign_bus_modal">Assign bus</button> ');
                    echo ('<button type="button" class="btn  btn-success mr-sm-2" data-toggle="modal" data-target="#assign_driver_modal">Assign driver</button>
                              
                                                  </div>');

                    echo ('</form>');
                  }
                ?>
                </div>


              </div>
              <div class="tab-pane" id="passenger_list">

                <div class="callout callout-info">
                  <h5><i class="icon fas fa-info"></i> Passengers list</h5>
                  <p> This is the list of all selected bus trip. you can view the the reservation information by selecting "start location". You can also view total reservations location. </p>
                </div>
                <form class="form" action="schedule.php">
                  <div class="form-group row" id="departure_city">
                    <label for="departure_city" class=" mr-sm-2">Departure City:</label>
                    <select class="form-control select2bs4 mb-2 mr-sm-2" style="width: 50%;">
                      <option>Jimma</option>
                      <option>Finfine</option>
                      <option>Demb Dolo</option>
                      <option>Nekemite</option>
                      <option>wokite</option>
                      <option>Metu</option>
                    </select>
                  </div>
                  <div class="form-group row">
                    <label class=" mr-sm-2">Total Passengers:</label>
                    <label for="total_passengers" class=" mr-sm-2">
                      <h5>110</h5>
                    </label>
                  </div>
                  <div class="form-group row">
                    <label class=" mr-sm-2">Total Reservations:</label>
                    <label for="total_reservations" class=" mr-sm-2">
                      <h5>50</h5>
                    </label>
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
                          <button type="button" class="btn btn-default btn-sm"><i class="far fa-edit"></i></button>
                          <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>


              <div class="tab-pane" id="route_time_table">
                <div class="callout callout-info mt-2 ">
                  <h5><i class="icon fas fa-info"></i> Route time table</h5>
                  <p> Here you can see a list of routes(in form of Departure city-Destination City) .You can view the list of busses assigned to a route and
                    You can also sort the list using the arrow into each column header.You can view more details about the bus/trip or start some actions using the arrow next to "Add booking" button.
                  </p>
                </div>
                <div>
                  </form>
                  <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-6">
                      <div class="form-group row" id="route">
                        <label for="route" class=" mr-sm-2">Select Route:</label>
                        <select class="form-control select2bs4 mb-2 mr-sm-2" style="width: 50%;">
                          <option>Jimma-Finfine</option>
                          <option>Nekemite-Jimma</option>
                          <option>Jimma-Demb Dolo</option>
                          <option>Metu-Finfine</option>
                        </select>
                      </div>
                      <div class="form-group row">
                        <label class=" mr-sm-2">Bussses Assigned:</label>
                        <label for="total_passengers" class=" mr-sm-2">
                          <h5>10</h5>
                        </label>
                      </div>

                      <div class="form-group row">
                        <label class=" mr-sm-2">Price for route(in Birr):</label>
                        <label for="price" class=" mr-sm-2">
                          <h5>350</h5>
                        </label>
                      </div>
                      <div class="form-group row" id="bus">
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
                  <p> Here you can see a list of buses that will departure today or the date selected by you.You can filter the lists of buses by routes.
                    You can also sort the list using the arrow into each column header.You can view more details about the bus/trip or start some actions using the arrow next to "Add booking" button.
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


  <!-- Modal -->
  <div class="modal fade" id="assign_driver_modal" tabindex="-1" role="dialog" aria-labelledby="assignDriverModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="assignDriverLabel">Assing Driver</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="alert alert-success d-none success"></div>
                    <div class="alert alert-danger d-none error"></div>
          <?php
                include("../../database.php");
                $sql = "SELECT *FROM driver";
                $result = $conn->query($sql);

                echo ('<form method="post" id="assign_driver">');
                if (!$result) {
                  echo ('<select name="driver" id="driver" class="form-control">
                                <option >No driver found</option>  
                               
                              </select>
                              <br /> ');
                }

                echo ('<label>Select Driver</label>');

                echo ('<select name="driver" id="driver" class="form-control" vlaue =' . $row['driver_Id'] . '>');
                while ($row = $result->fetch_assoc()) {
                  echo ('<option >' . $row["driver_Id"] . '</option>');
                }
                echo ('</select>
                              <br /> ');
                ?>        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="submit1"  onclick=assign_driver() class="btn btn-primary" >Submit</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="assign_driver_modal" tabindex="-1" role="dialog" aria-labelledby="assignDriverModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="assignDriverLabel">Assing Driver</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
      
          <?php
                include("../../database.php");
                $sql = "SELECT *FROM driver";
                $result = $conn->query($sql);

                echo ('<form method="post" id="assign_driver">');
                if (!$result) {
                  echo ('<select name="driver" id="driver" class="form-control">
                                <option >No driver found</option>  
                               
                              </select>
                              <br /> ');
                }

                echo ('<label>Select Driver</label>');

                echo ('<select name="driver" id="driver" class="form-control" vlaue =' . $row['driver_Id'] . '>');
                while ($row = $result->fetch_assoc()) {
                  echo ('<option >' . $row["driver_Id"] . '</option>');
                }
                echo ('</select>
                              <br /> ');
                ?>        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="submit1"  onclick=assign_driver() class="btn btn-primary" >Submit</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="assign_bus_modal" tabindex="-1" role="dialog" aria-labelledby="assignBusModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="assignBusLabel">Assing Driver</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <div class="alert alert-success d-none success"></div>
                    <div class="alert alert-danger d-none error"></div>
          <?php
                include("../../database.php");
                $sql_assign_bus = "SELECT *FROM addbus";
                $result_assign_bus = $conn->query($sql_assign_bus);

                echo ('<form method="post" id="assign_bus">');
                if (!$result_assign_bus) {
                  echo ('<select name="bus" id="bus1" class="form-control">
                                <option >No driver found</option>  
                               
                              </select>
                              <br /> ');
                }

                echo ('<label>Select Bus</label>');

                echo ('<select name="bus" id="bus1" class="form-control" vlaue =' . $row_assign_bus['bus_Id'] . '>');
                while ($row_assign_bus= $result_assign_bus->fetch_assoc()) {
                  echo ('<option >' . $row_assign_bus["bus_Id"] . '</option>');
                }
                echo ('</select>
                              <br /> ');
                ?>        
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" id="submit"  onclick=assign_bus() class="btn btn-primary" >Submit</button>
        </div>
      </div>
    </div>
  </div>


  <footer class="main-footer">

    <span>Copy right 2020 Developed GC students All rights reserved.</span>

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


  </script>
</body>

</html>