
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/logo/ct_logo.ico" />
  <title>Cholo Transport | Client Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/noman_datepicker/datepicker_css_1.7.1.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/noman_animate/noman_animate.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/jqvmap/jqvmap.min.css">
 <!-- Tempusdominus Bbootstrap 4 -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- jQuery -->
<script src="<?php echo base_url();?>assets/backend/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/noman_toastr/noman_toastr.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/noman_toastr/noman_toastr.css">


  
  
 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/dist/css/adminlte.min.css">


  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/summernote/summernote-bs4.css">

<!-- DataTable -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/custom_dataTables/dataTables.bootstrap.css">






  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
   .right_align{
    margin-right: 0;
    margin-left:auto;
    display:block;
   }
   
   .table td, .table th {
    padding:3px;
    vertical-align: top;
}

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url();?>Cholotransportowner/Dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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














     <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>-->




    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>Client/Dashboard" class="brand-link">
      <img src="<?php echo base_url();?>assets/backend/dist/img/logo.png" alt="Cholo Transport Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Cholo Transport</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/backend/dist/img/profile.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
       <span style="color:white"><?php echo $this->session->userdata('client_fullname');?></span>  &nbsp; &nbsp;<a href="<?php echo base_url();?>ClientLoginController/logout" title="Sign Out" style="color:red;font-weight:bold;"><i class="fas fa-sign-out-alt"></i></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url();?>Client/Dashboard" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='Dashboard'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>


  


       <?php 
      if($this->session->userdata('cnf_info_id')){
        ?>
         

         <li class="nav-item">
            <a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='CnfAllVehiclesRequest'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Vehicles All Request
              </p>
            </a>
          </li>



         <li class="nav-item">
            <a href="<?php echo base_url();?>Client/CnfChalanInfo" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page==''){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fa fa-map-marker"></i>
              <p>
               Vehicles Live Tracking
              </p>
            </a>
          </li>


         <li class="nav-item">
            <a href="<?php echo base_url();?>Client/CnfChalanInfo" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='CnfChalanInfo'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                All Chalan Details
              </p>
            </a>
          </li>
          
          
          
          
          
        <li class="nav-item">
            <a href="<?php echo base_url();?>ClientLoginController/logout" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='logout'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Signout
              </p>
            </a>
          </li>


          
  

            <?php } ?>











       <?php 
      if($this->session->userdata('importer_info_id')){
        ?>
         
         <li class="nav-item">
            <a href="<?php echo base_url();?>Client/ImporterAllVehiclesRequest" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='ImporterAllVehiclesRequest'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Vehicles All Request
              </p>
            </a>
          </li>



         <li class="nav-item">
            <a href="<?php echo base_url();?>Client/ImporterChalanInfo" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page==''){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-map-marker"></i>
              <p>
               Vehicles Live Tracking
              </p>
            </a>
          </li>


         <li class="nav-item">
            <a href="<?php echo base_url();?>Client/ImporterChalanInfo" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='ImporterChalanInfo'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                All Chalan Details
              </p>
            </a>
          </li>

          
                  <li class="nav-item">
            <a href="<?php echo base_url();?>ClientLoginController/logout" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='logout'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
             <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Signout
              </p>
            </a>
          </li>

  

            <?php } ?>






















 <?php 
      if($this->session->userdata('exporter_info_id')){
        ?>
         
         <li class="nav-item">
            <a href="<?php echo base_url();?>Client/ExporterAllVehiclesRequest" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='ExporterAllVehiclesRequest'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Vehicles All Request
              </p>
            </a>
          </li>



         <li class="nav-item">
            <a href="<?php echo base_url();?>Client/ExporterChalanInfo" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page==''){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-map-marker"></i>
              <p>
               Vehicles Live Tracking
              </p>
            </a>
          </li>


         <li class="nav-item">
            <a href="<?php echo base_url();?>Client/ExporterChalanInfo" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='ExporterChalanInfo'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                All Chalan Details
              </p>
            </a>
          </li>

    
    
            <li class="nav-item">
            <a href="<?php echo base_url();?>ClientLoginController/logout" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='logout'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
             <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Signout
              </p>
            </a>
          </li>



          
            <?php } ?>




















       <?php 
      if($this->session->userdata('vehicles_owner_info_id')){
        ?>
          <li class="nav-item has-treeview">
            <a href="" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='AddCnf' || $page=='ManageCnf'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                CNF Control Panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/AddCnf" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='AddCnf'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add CNF</p>
                </a>
              </li>



              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/ManageCnf" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageCnf'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage CNF</p>
                </a>
              </li>
            
            </ul>
          </li>
          
          
              
            <li class="nav-item">
            <a href="<?php echo base_url();?>ClientLoginController/logout" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='logout'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
               >
           <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Signout
              </p>
            </a>
          </li>

          
          
          
            <?php } ?>



















   
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php echo $admin_main_content; ?>
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://choloit.com">Cholo iT</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>2.0.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/backend/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/backend/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>assets/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->

<script src="<?php echo base_url();?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>


<!-- Datatable Jquery -->
<script src="<?php echo base_url();?>assets/backend/plugins/custom_dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/custom_dataTables/dataTables.bootstrap.js"></script>


<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/backend/dist/js/adminlte.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/moment/moment.min.js"></script>









<script>
  $(function () {
    $('#datatable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
</body>
<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
</html>
