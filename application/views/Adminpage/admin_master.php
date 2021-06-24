<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$get_user_login_info=$this->userModel->get_user_login_info_by_user_id($this->session->userdata('user_id'));
if($get_user_login_info=='0'){
  redirect('Backend/AdminController/logout');
}
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
  <title>Transport Malik Somity| Dashboard</title>
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


    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  
  
 
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
.brand-link .brand-image{
  background: white;
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






      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            Logout
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>





      <!-- Notifications Dropdown Menu -->
    <!--  <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
         
        
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->


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
    <a href="<?php echo base_url();?>Cholotransportowner/Dashboard" class="brand-link">
      <img src="<?php echo base_url();?>assets/backend/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle">
      <span class="brand-text font-weight-light">Transport Malik Somity</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/backend/dist/img/profile.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
       <span style="color:white"><?php echo $this->session->userdata('fullname');?></span>  &nbsp; &nbsp;<a href="<?php echo base_url(); ?>Backend/AdminController/logout" title="Sign Out" style="color:red;font-weight:bold;"><i class="fas fa-sign-out-alt"></i></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url();?>Cholotransportowner/Dashboard" 
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
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>












          <?php
          if(in_array("frontend_control_panel",$this->session->userdata('user_permission'))){
         ?>           
          <li class="nav-item has-treeview">
            <a href="#" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='ManageImageSlider' || 
                  $page=='ManageTruckLagbe'||
                  $page=='ManageChooseUs'||
                  $page=='ManageTruckCategory'||
                  $page=='ManageCorporateClient'||
                  $page=='ManageIndustriesWeCover'||
                  $page=='ManageGpsTrackerFeatures'
                ){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fas fa fa-tools"></i>
              <p>
                Frontend Control Panel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">



              <?php
              if(in_array("manage_slider",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageImageSlider" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageImageSlider'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                 >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Slider</p>
                </a>
              </li>
              <?php } ?>






              <?php
              if(in_array("manage_truck_lagbe",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageTruckLagbe" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageTruckLagbe'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage President Panel</p>
                </a>
              </li>

              <?php } ?>







              <?php
              if(in_array("manage_choose_us",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageChooseUs" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageChooseUs'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Choose Us</p>
                </a>
              </li>

              <?php } ?>






              <?php
              if(in_array("manage_truck_category",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageTruckCategory" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageTruckCategory'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Truck Category</p>
                </a>
              </li>
                  <?php } ?>




              

              <?php
              if(in_array("manage_corporate_client",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageCorporateClient" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageCorporateClient'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Corporate Client</p>
                </a>
              </li>

              <?php } ?>








              <?php
              if(in_array("manage_cover_industries",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageIndustriesWeCover" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageIndustriesWeCover'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Cover Industries</p>
                </a>
              </li>
              <?php } ?>






              <?php
              if(in_array("manage_tracking_features",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageGpsTrackerFeatures" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageGpsTrackerFeatures'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Tracking Features</p>
                </a>
              </li>
              <?php } ?>






            </ul>
          </li>
<?php } ?>


















        <?php
          if(in_array("all_request_control_panel",$this->session->userdata('user_permission')))
            {
          ?>
          <li class="nav-item has-treeview">
            <a href="" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='AllVehiclesRequest' 
                || $page=='PendingVehiclesRequest'
                || $page=='ProcessingVehiclesRequest'
                || $page=='AcceptedVehiclesRequest'
                || $page=='CompletedVehiclesRequest'
                || $page=='CancelVehiclesRequest'
                || $page=='AllDeviceScheduleRequest'
                || $page=='UserAccountRequest'
                ){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fa fa-bell"></i>
              <p>
                All Request Panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">



            <?php
          if(in_array("all_vehicles_request",$this->session->userdata('user_permission')))
            {
          ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/AllVehiclesRequest" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='AllVehiclesRequest'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Vehicles Request</p>
                </a>
              </li>
              <?php } ?>







              <?php
                if(in_array("user_registration_request",$this->session->userdata('user_permission')))
                  {
                ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/UserAccountRequest"
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='UserAccountRequest'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Registration Request</p>
                </a>
              </li>

              <?php } ?>





              <?php
                if(in_array("device_tracking_scheduling",$this->session->userdata('user_permission')))
                  {
                ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/AllDeviceScheduleRequest" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='AllDeviceScheduleRequest'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Device Tracker Scheduling</p>
                </a>
              </li>
              <?php } ?>
           
            </ul>
          </li>
          <?php } ?>












  


          <?php
            if(in_array("cnf_control_panel",$this->session->userdata('user_permission')))
              {
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
              <i class="nav-icon fas fa-chalkboard-teacher"></i>
              <p>
                CNF Control Panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <?php
            if(in_array("add_cnf",$this->session->userdata('user_permission')))
              {
            ?>
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

              <?php } ?>





              <?php
            if(in_array("manage_cnf",$this->session->userdata('user_permission')))
              {
            ?>
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
              <?php } ?>



            
            </ul>
          </li>
          <?php } ?>











          <?php
            if(in_array("importer_control_panel",$this->session->userdata('user_permission')))
              {
            ?>
          <li class="nav-item has-treeview">
            <a href="#" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='AddImporter' || $page=='ManageImporter'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fas fa-file-import"></i>
              <p>
                Transport Malik Panel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">



            <?php
            if(in_array("add_importer",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/AddImporter" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='AddImporter'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                 >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Transport Malik </p>
                </a>
              </li>
              <?php } ?>






              <?php
              if(in_array("manage_importer",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageImporter" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageImporter'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Transport Malik</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageTransportMalikSms" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageTransportMalikSms'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Transport Malik SMS</p>
                </a>
              </li>
              <?php } ?>




            </ul>
          </li>
          <?php } ?>











          <?php
            if(in_array("exporter_control_panel",$this->session->userdata('user_permission')))
              {
            ?>
          <li class="nav-item has-treeview">
            <a href="#" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='AddExporter' || $page=='ManageExporter'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fas fa-file-export"></i>
              <p>
                Exporter Control Panel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">



            <?php
            if(in_array("add_exporter",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/AddExporter" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='AddExporter'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                 >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Exporter </p>
                </a>
              </li>
              <?php } ?>






              <?php
              if(in_array("manage_exporter",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageExporter" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageExporter'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Exporter</p>
                </a>
              </li>
              <?php } ?>





            </ul>
          </li>

          <?php } ?>











            <?php
              if(in_array("vehicles_control_panel",$this->session->userdata('user_permission')))
                {
              ?>
          <li class="nav-item has-treeview">
            <a href="#" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='AddVehicles' || $page=='ManageVehicles'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fa fa-truck"></i>
              <p>
                Vehicles Control Panel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <?php
              if(in_array("add_vehicles",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/AddVehicles" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='AddVehicles'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                 >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Vehicles </p>
                </a>
              </li>
              <?php } ?>





              <?php
              if(in_array("manage_vehicles",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageVehicles" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageVehicles'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Vehicles</p>
                </a>
              </li>
              <?php } ?>




            </ul>
          </li>
          <?php } ?>













          <?php
            if(in_array("driver_control_panel",$this->session->userdata('user_permission')))
              {
            ?>
          <li class="nav-item has-treeview">
            <a href="#" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='AddDriver' || $page=='ManageDriver'){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fas fa-car-side"></i>
              <p>
                Driver Control Panel
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">



            <?php
            if(in_array("add_driver",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/AddDriver" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='AddDriver'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                 >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Driver </p>
                </a>
              </li>
              <?php } ?>






              <?php
            if(in_array("manage_driver",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
              <a href="<?php echo base_url();?>Cholotransportowner/ManageDriver" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageDriver'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Driver</p>
                </a>
              </li>
              <?php } ?>




            </ul>
          </li>

          <?php } ?>
 











          <?php
            if(in_array("chalan_control_panel",$this->session->userdata('user_permission')))
              {
            ?>
          <li class="nav-item has-treeview">
            <a href="" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='AddChalan' 
                || $page=='ManageChalan' 
                || $page=='ViewLiveChalanLocation'
                ){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fas fa-file-invoice"></i>
              <p>
                Chalan Control Panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <?php
            if(in_array("add_chalan",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/AddChalan" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='AddChalan'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Chalan</p>
                </a>
              </li>
              <?php } ?>





              <?php
            if(in_array("manage_chalan",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/ManageChalan" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageChalan'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Chalan</p>
                </a>
              </li>
              <?php } ?>





            
            </ul>
          </li>

          <?php } ?>















          <?php
            if(in_array("account_control_panel",$this->session->userdata('user_permission')))
              {
            ?>
          <li class="nav-item has-treeview">
            <a href="" 
            <?php
                $path=current_url();
                $page= basename($path);
                if(
                $page=='ManageIncomeCategory'||
                $page=='AddIncomeDetails'||
                $page=='ManageIncomeDetails'||
                $page=='AddCostCategory'||
                $page=='ManageCostCategory'||
                $page=='AddCostDetails'||
                $page=='ManageCostDetails'||
                $page=='ManageAllReport'||
                $page=='TodayTransactionReport'||
                $page=='DailyTransactionReport'||
                $page=='GetDailyTransactionReport'
                ){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fas fa-donate"></i>
              <p>
               Account Control Panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">



            <?php
            if(in_array("manage_income_category",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/ManageIncomeCategory" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageIncomeCategory'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Income Category</p>
                </a>
              </li>
              <?php } ?>







              <?php
            if(in_array("manage_income_details",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/ManageIncomeDetails" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageIncomeDetails'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Income Details</p>
                </a>
              </li>
              <?php } ?>




          <?php
            if(in_array("manage_costing_category",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/ManageCostCategory" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageCostCategory'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Costing Category</p>
                </a>
              </li>
              <?php } ?>
              




              <?php
            if(in_array("manage_costing_details",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/ManageCostDetails" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageCostDetails'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Costing Details</p>
                </a>
              </li>
              <?php } ?>





              <?php
            if(in_array("manage_all_report",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/ManageAllReport" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if(
                      $page=='ManageAllReport'||
                      $page=='TodayTransactionReport'
                    )
                    {
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage All Report</p>
                </a>
              </li>
              <?php } ?>



            
            </ul>
          </li>

          <?php } ?>

          








          <?php
            if(in_array("administrator_control_panel",$this->session->userdata('user_permission')))
              {
            ?>
          <li class="nav-item has-treeview">
            <a href="" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='SmsControl' ||
                   $page=='ManageFlashNotification'||
                   $page=='NotificationControl'||
                   $page=='ManageUser'
                 ){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fas fa-cogs"></i>
              <p>
               Administrator Panel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">




            <?php
            if(in_array("sms_control_panel",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/SmsControl" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='SmsControl'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMS Control</p>
                </a>
              </li>
              <?php } ?>





              <?php
              if(in_array("manage_user",$this->session->userdata('user_permission')))
                {
              ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/ManageUser" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='ManageUser'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage User</p>
                </a>
              </li>
              <?php } ?>




              <?php
            if(in_array("notification_control",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/NotificationControl" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if(
                      $page=='NotificationControl'||
                      $page=='ManageFlashNotification'||
                      $page=='ManageNormalNotification'

                    ){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notification Control</p>
                </a>
              </li>
              <?php } ?>




            
            </ul>
          </li>

          <?php } ?>








        




          <?php
            if(in_array("admin_power",$this->session->userdata('user_permission')))
              {
            ?>
          <li class="nav-item has-treeview">
            <a href="" 
            <?php
                $path=current_url();
                $page= basename($path);
                if($page=='UserLoggedInfo' ||
                   $page=='ActiveLoginUser'
                 ){
              echo "class='nav-link active'";
                }else{
                  echo "class='nav-link'";
                }
                ?>
            >
              <i class="nav-icon fas fa-cogs"></i>
              <p>
              User Logged Info
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">




            <?php
            if(in_array("admin_power",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/UserLoggedInfo" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if($page=='UserLoggedInfo'){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>All User Logged Info</p>
                </a>
              </li>
              <?php } ?>






              <?php
            if(in_array("admin_sp_power",$this->session->userdata('user_permission')))
              {
            ?>
              <li class="nav-item">
                <a href="<?php echo base_url();?>Cholotransportowner/ActiveLoginUser" 
                <?php
                    $path=current_url();
                    $page= basename($path);
                    if(
                      $page=='ActiveLoginUser'

                    ){
                  echo "class='nav-link active'";
                    }else{
                      echo "class='nav-link'";
                    }
                ?>
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Currently Login User</p>
                </a>
              </li>
              <?php } ?>




            
            </ul>
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
    <strong>©Copyright &copy; 2021 <a href="https://choloit.com">Cholo iT Team</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b>1.0.1
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

<!-- Select2 -->
<script src="<?php echo base_url();?>assets/backend/plugins/select2/js/select2.full.min.js"></script>
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
