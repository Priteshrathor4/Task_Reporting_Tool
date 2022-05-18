<?php
include 'connection.php';
session_start();
if (isset($_SESSION['emaill'])) {
  // header("Location:userI.php");  
} else {
  header("Location:http://localhost/SGLProject/report/destroyy.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" class="src">

</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>




      </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">


        <!-- Sidebar Menu -->
        <nav class="mt-2 mt-3 pb-3 mb-3 d-flex">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="index.php" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>User-Details</User->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="opertion.php" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Project-Details</User->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="http://localhost/SGLProject/report/destroyy.php" class="nav-link ">
                <i class="far fa-circle nav-icon"></i>
                <p>Logout</User->
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">

              <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">

                      <div class="card">
                        <div>
                          <button data-toggle="modal" data-target="#exampleModal" type="button" class="btn btn-danger float-right mt-3 mr-3">Add-Project</button>
                        </div>
                        <!-- Modal1 -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">

                              <form action="#" method="GET">

                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Project-Details</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Project-Name</label>
                                    <input name="pname" type="text" class="form-control" id="projectname" aria-describedby="emailHelp" placeholder="Enter Project-Name">

                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputstartdate">Start-Date</label>
                                    <input name="startD" type="date" class="form-control" id="startdate" placeholder="start-date">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputenddate">End-Date</label>
                                    <input name="endD" type="date" class="form-control" id="enddate" placeholder="start-end">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Details</label>
                                    <textarea name="pdetails" class="form-control" id="Textarea1" placeholder="Enter Project Details" rows="3"></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Technology</label>
                                    <input name="ptech" class="form-control" id="ptech" placeholder="Enter Technology Details" rows="3"></textarea>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Objective</label>
                                    <input name="pobj" class="form-control" id="pobj" placeholder="Enter Objective " rows="3"></textarea>
                                  </div>
                                  <div>
                                    <span style="color: red; font:bold;" id="error"></span>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                  <button type="submitp" class="btn btn-primary" id="submitp" name="submitp">Add project</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th>Sr.No</th>
                                <th>Project-Name</th>
                                <th>Start-date</th>
                                <th>End-date</th>
                                <th>Details</th>
                                <th>Project-Date</th>
                                <!-- <th>PUpdate-Date</th> -->
                                <th>Change</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              include("connection.php");
                              $sql = "SELECT * from project";
                              $ret = pg_query($db, $sql);
                              if (!$ret) {
                                echo pg_last_error($db);
                                exit;
                              }
                              pg_close($db);
                              ?>
                              <?php $i = 0; ?>
                              <?php while ($row = pg_fetch_row($ret)) {   ?>
                                <tr>
                                  <?php $i++; ?>
                                  <td><?php echo $i ?></td>
                                  <!-- <td><button type="button" class="btn btn-info"><?php echo $row[1]; ?></button> -->

                                  <td><button data-toggle="modal" data-target="#exampleModal2" type="button" class="btn btn-info" onclick="showdata('<?php echo $row[1] ?>','<?php echo $row[2] ?>','<?php echo $row[3] ?>','<?php echo $row[7] ?>','<?php echo $row[6] ?>','<?php echo $row[8] ?>')">
                                      <?php echo $row[1]; ?></button>
                                    <!-- Modal1 -->

                                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                          <form action="#">

                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel2">Project-Details</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <!-- <span aria-hidden="true">&times;</span> -->
                                              </button>
                                            </div>
                                            <center>

                                              <form action="#" method="POST" id="uform" name="uform">

                                                <div class="modal-body">
                                                  <input type="hidden" name="id" id="id">
                                                  <div class="form-group">
                                                    <!-- <label for="exampleInputEmail1">Project-Name</label> -->
                                                    <!-- <input type="text" class="form-control" id="projectnames" name="projectnameU" aria-describedby="emailHelp" placeholder="Enter Project-Name"> -->
                                                  </div>
                                                </div>
                                                  <table border=2px>
                                                    <tr>
                                                      <td>
                                                        <div class="form-group">
                                                          <label for="exampleFormControlTextarea1">Project-Name </label>
                                                      </td>
                                                      <td><span id='ptitle'></span></td>

                                                      <!-- <input type="textarea" class="form-control" id="Textarea1s" name="Textarea1U" placeholder="Enter Project Details" rows="3"></textarea> -->
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Start-Date </label>
                                  </td>
                                  <td>
                                    <span id='ps_date'></span>
                                  </td>
                                  <!-- <input type="textarea" class="form-control" id="Textarea1s" name="Textarea1U" placeholder="Enter Project Details" rows="3"></textarea> -->
                        </div>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-group">
                              <label for="exampleFormControlTextarea1">End-Date </label>
                          </td>
                          <td>
                            <span id='pe_date'></span>
                          </td>
                          <!-- <input type="textarea" class="form-control" id="Textarea1s" name="Textarea1U" placeholder="Enter Project Details" rows="3"></textarea> -->
                      </div>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Technology </label>
                        </td>
                        <td><span id='ptechnology'></span></td>
                        <!-- <input type="textarea" class="form-control" id="Textarea1s" name="Textarea1U" placeholder="Enter Project Details" rows="3"></textarea> -->
                      </tr>
                    </div>
                    <tr>
                      <td>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Objective </label>
                      </td>
                      <td>
                        <span id='pobjective'></span>
                      </td>
                      <!-- <input type="textarea" class="form-control" id="Textarea1s" name="Textarea1U" placeholder="Enter Project Details" rows="3"></textarea> -->
                    </tr>
                    <tr>
                      <td>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Update-Date</label>
                      </td>
                      <td>
                        <span id='PUdate'></span>
                      </td>
                      <!-- <input type="textarea" class="form-control" id="Textarea1s" name="Textarea1U" placeholder="Enter Project Details" rows="3"></textarea> -->
                    </tr>
                  </div>
                  </table>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
                </form>
                </center>
            </div>
            </form>
          </div>

        </div>

        </td>
        </td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4];  ?></td>
        <td><?php echo $row[5];  ?></td>

        <td>

          <button data-toggle="modal" data-target="#exampleModal1" type="button" class="btn btn-primary editbtn" onclick="updatedata('<?php echo $row[1] ?>','<?php echo $row[2] ?>','<?php echo $row[3] ?>','<?php echo $row[4] ?>','<?php echo $row[6] ?>','<?php echo $row[7] ?>','<?php echo $row[0] ?>')">Update</button>
          <!-- Modal1 -->

          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">

                <form action="#" method="POST" id="uform" name="uform">

                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Project-Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Project-Name</label>
                      <input type="text" class="form-control" id="projectnameU" name="projectnameU" aria-describedby="emailHelp" placeholder="Enter Project-Name">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputstartdate">Start-Date</label>
                      <input type="date" class="form-control" id="startdateU" name="startdateU" placeholder="start-date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputenddate">End-Date</label>
                      <input type="date" class="form-control" id="enddateU" name="enddateU" placeholder="start-end">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Details</label>
                      <input type="textarea" class="form-control" id="Textarea1U" name="Textarea1U" placeholder="Enter Project Details" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Technology</label>
                      <input type="text" class="form-control" id="techU" name="techU" placeholder="Enter Technology Details" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Objective</label>
                      <input type="text" class="form-control" id="objU" name="objU" placeholder="Enter Objective " rows="3"></textarea>
                    </div>
                    <div>
                      <span style="color: red; font:bold;" id="errorU"></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submitU" class="btn btn-primary " id="submitU" name="submitU">Update project</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </td>

        </tr>
      <?php  } ?>

      </tbody>

      </table>



      <?php
      include("connection.php");
      if (isset($_GET['submitp'])) {
        $pname = $_GET['pname'];
        $startD = $_GET['startD'];
        $endD = $_GET['endD'];
        $pdetails = $_GET['pdetails'];
        $ptech = $_GET['ptech'];
        $pobj = $_GET['pobj'];
        $query = "INSERT INTO project( name, startdate, enddate, details,technology,objective)
                                    VALUES('$pname', '$startD', '$endD', '$pdetails','$ptech','$pobj')";
        if (pg_query($query)) {
          echo '<script>alert("Add project successfully done")</script>';
      ?>
          <script>
            window.location.href = 'opertion.php';
          </script>
      <?php
        } else {
          echo '<script>alert("Add not project successfully done")</script>';
        }
      }
      ?>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
  </div>
  <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  </section>
  </div><!-- /.col -->

  </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#example1').DataTable();
    });
  </script>
  <script>
    $('#submitU').click(function() {
      $('#errorU').html("");
      var projectnameU = $('#projectnameU').val();
      var startdateU = $('#startdateU').val();
      var enddateU = $('#enddateU').val();
      var Textarea1U = $('#Textarea1U').val();
      var techU = $('#techU').val();
      var objU = $('#objU').val();
      var currentdate = new Date().getDate();
      var enddate1U = new Date(enddateU).getDate();
      var startdate1U = new Date(startdateU).getDate();
      console.log(currentdate);
      if (projectnameU == 0) {
        $('#errorU').html("**Enter Your project-name");
        $('#projectname').focus();
        return false;
      } else if (!projectnameU.match(/^[A-Za-z0-9 -]{5,50}$/)) {
        $('#errorU').html("**Enter correct Project-Name");
        $('#projectname').focus();
        return false;
      } else if (startdateU == 0) {
        $('#errorU').html("**Enter Your Start Date");
        $('#startdate').focus();
        return false;

      } else if (enddateU == 0) {
        $('#errorU').html("**Enter Your End Date");
        $('#enddate').focus();
        return false;
      } else if (enddate1U <= startdate1U) {
        $('#errorU').html("**End date can't be less then startdate");
        $('#enddate').focus();
        return false;
      } else if (Textarea1U == 0) {
        $('#errorU').html("**Enter Your Project-Details");
        $('#Textarea1').focus();
        return false;
      } else if (!Textarea1U.match(/^[A-Za-z0-9 -]{20,200}$/)) {
        $('#errorU').html("**Project Details Content Min-20 and Max-200");
        $('#Textarea1').focus();
        return false;
      } else if (techU == 0) {
        $('#errorU').html("**Enter Your Technology-Details");
        $('#techU').focus();
        return false;
      } else if (objU == 0) {
        $('#errorU').html("**Enter Your Objective");
        $('#objU').focus();
        return false;
      } else {
        return true;
      }
    })
    $('#submitp').click(function() {
      $('#error').html("");
      var projectname = $('#projectname').val();
      var startdate = $('#startdate').val();
      var enddate = $('#enddate').val();
      var Textarea1 = $('#Textarea1').val();
      var ptech = $('#ptech').val();
      var pobj = $('#pobj').val();
      var currentdate = new Date().getDate();
      var enddate1 = new Date(enddate).getDate();
      var startdate1 = new Date(startdate).getDate();
      console.log(currentdate);
      if (projectname == 0) {
        $('#error').html("**Enter Your project-name");
        $('#projectname').focus();
        return false;
      } else if (!projectname.match(/^[A-Za-z0-9 -]{5,50}$/)) {
        $('#error').html("**Enter correct Project-Name");
        $('#projectname').focus();
        return false;
      } else if (startdate == 0) {
        $('#error').html("**Enter Your Start Date");
        $('#startdate').focus();
        return false;
      } else if (startdate1 < currentdate) {
        $('#error').html("**Start date can't be old date");
        $('#startdate').focus();
        return false;
      } else if (enddate == 0) {
        $('#error').html("**Enter Your End Date");
        $('#enddate').focus();
        return false;
      } else if (enddate1 <= startdate1) {
        $('#error').html("**End date can't be less then startdate");
        $('#enddate').focus();
        return false;
      } else if (Textarea1 == 0) {
        $('#error').html("**Enter Your Project-Details");
        $('#Textarea1').focus();
        return false;
      } else if (!Textarea1.match(/^[A-Za-z0-9 -]{20,200}$/)) {
        $('#error').html("**Project Details Content Min-20 and Max-200");
        $('#Textarea1').focus();
        return false;
      } else if (ptech == 0) {
        $('#error').html("**Enter Your Technology-Details");
        $('#ptech').focus();
        return false;
      } else if (pobj == 0) {
        $('#error').html("**Enter Your Objective");
        $('#pobj').focus();
        return false;
      } else {
        return true;
      }
    })
  </script>
  <script>
    function showdata(title, s_date, e_date, obje, tech, update) {
      document.getElementById('ptitle').innerHTML = title;
      document.getElementById('ps_date').innerHTML = s_date;
      document.getElementById('pe_date').innerHTML = e_date;
      document.getElementById('pobjective').innerHTML = obje;
      document.getElementById('ptechnology').innerHTML = tech;
      document.getElementById('PUdate').innerHTML = update;
    }

    function updatedata(name, startdate, enddate, details, technology, objective, id) {
      document.getElementById('projectnameU').value = name;
      document.getElementById('startdateU').value = startdate;
      document.getElementById('enddateU').value = enddate;
      document.getElementById('Textarea1U').value = details;
      document.getElementById('techU').value = technology;
      document.getElementById('objU').value = objective;
      document.getElementById('uform').action = `updatep.php?id=${id}`;
      console.log(id);

    }
  </script>
</body>

</html>