<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<!-- bootstrap -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

<!-- ---------------------------Template Links------------------------------- -->

<!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Animations-->
  <link href="css/animations.css" rel="stylesheet">
</head>
<style type="text/css">
	
		.tm{
			display: none;
		}
    .rm{
      display: none;
    }
    .tt{
      display: none;
    }

</style>
<script type="text/javascript" src="assets/jquery/jquery.js"></script>
<script type="text/javascript">

				//basic syntax and events ******
		$(document).ready(function() //when doucument is ready basic syntax
		{

			$('#teacherMangement').click(function(){
				 $('.tm').stop().slideToggle(200);

					$("span.teacher > i").toggleClass('fas fa-angle-down').toggleClass('fas fa-angle-right');
					
			});

      $('#roomMangement').click(function(){
         $('.rm').stop().slideToggle(200);

          $("span.room > i").toggleClass('fas fa-angle-down').toggleClass('fas fa-angle-right');
          
      });

      $('#timetableMangement').click(function(){
         $('.tt').stop().slideToggle(200);

          $("span.timetable > i").toggleClass('fas fa-angle-down').toggleClass('fas fa-angle-right');
          
      });

      $('#teacherSideMangement').click(function(){
         $('.tm').stop().slideToggle(200);

          $("span.teacher > i").toggleClass('fas fa-angle-down').toggleClass('fas fa-angle-right');
          
      });

      $('#roomSideMangement').click(function(){
         $('.rm').stop().slideToggle(200);

          $("span.room > i").toggleClass('fas fa-angle-down').toggleClass('fas fa-angle-right');
          
      });

      $('#timetableSideMangement').click(function(){
         $('.tt').stop().slideToggle(200);

          $("span.timetable > i").toggleClass('fas fa-angle-down').toggleClass('fas fa-angle-right');
          
      });
			
		});
		
	</script>


<body id="page-top">
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1 animated bounceInRight slow" href="">Virtual Guider</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <!-- <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>
  </nav>

  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
<!--       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login Screens:</h6>
          <a class="dropdown-item" href="login.html">Login</a>
          <a class="dropdown-item" href="register.html">Register</a>
          <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a>
        </div>
      </li> -->
      <li class="nav-item">
        <a style="cursor: pointer;" class="nav-link" id="teacherSideMangement">
          <i class="fas fa-user-tie"></i>
          <span>Manage Teacher</span></a>
      </li>
      <li class="nav-item">
        <a style="cursor: pointer;" class="nav-link" id="roomSideMangement">
          <i class="fas fa-door-open"></i>
          <span>Manage Room</span></a>
      </li>
      <li class="nav-item">
        <a style="cursor: pointer;" class="nav-link" id="timetableSideMangement">
          <i class="fas fa-calendar-alt"></i>
          <span>Manage Time Table</span></a>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb animated flipInX fast">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-4 col-sm-4 mb-3">
            <div class="card text-white bg-primary o-hidden h-100 animated fadeInRightBig fast">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-user-tie"></i>
                </div>
                <div class="mr-5">Manage Teacher</div>
              </div>
              <div style="cursor: pointer;" class="card-footer text-white clearfix small z-1" id="teacherMangement">
                <span class="float-left">View Details</span>
                <span class="float-right teacher">
                  <i class="fas fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-4 mb-3">
            <div class="card text-white bg-danger o-hidden h-100 animated fadeInRightBig fast">
              <div class="card-body">
                <div class="card-body-icon">
                 <i class="fas fa-door-open"></i>
                </div>
                <div class="mr-5">Manage Room</div>
              </div>
                <div style="cursor: pointer;" class="card-footer text-white clearfix small z-1" id="roomMangement">
                <span class="float-left">View Details</span>
                <span class="float-right room">
                  <i class="fas fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-sm-4 mb-3">
            <div class="card text-white bg-success o-hidden h-100 animated fadeInRightBig fast">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="mr-5">Manage Time Table</div>
              </div>
              <div style="cursor: pointer;" class="card-footer text-white clearfix small z-1" id="timetableMangement">
                <span class="float-left">View Details</span>
                <span class="float-right timetable">
                  <i class="fas fa-angle-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>


        <!-- DataTables Example -->
              <!-- Teacher Table Start -->
                    <?php include("teacher_table.php") ?>
              <!-- Teacher Table End -->

              <!-- Room Table Start -->
                   <?php include("room_table.php") ?> 
              <!-- Room Table End -->

              <!-- Timetable Table Start -->
                   <?php include("timetable_table.php") ?> 
              <!-- Timetable Table End -->

      <!-- /.container-fluid -->

     <!-- Area Chart Example-->
        <!-- <div class="card mb-3 " >
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div> -->
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->
   <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

   <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

<!-- Teacher Modals Start -->
<?php include("teacher_modal.php") ?>
<!-- Teacher Modals End -->

<!-- Room Modals Start -->
<?php include("room_modal.php") ?>
<!-- Room Modals End -->

<!-- Room Modals Start -->
<?php include("timetable_modal.php") ?>
<!-- Room Modals End -->
	
	<!-- jquery -->
	<script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
	<!-- bootstrap js -->
	
	<!-- datatables -->
	<script type="text/javascript" src="assets/datatables/datatables.min.js"></script>
	<!-- custom js faculty -->
	<script type="text/javascript" src="custom/js/home.js"></script>

    <!-- room js -->
  <script type="text/javascript" src="custom/js/room.js"></script>

      <!-- timetable js -->
  <script type="text/javascript" src="custom/js/timetable.js"></script>

	<!-- ------------------- Template Links------------------------------------ -->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>
</html>
