<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
 <!-- Content Wrapper. Contains page content -->
 <style>
   .small-box >.inner_a > .inner {
    padding: 10px;
}
.center_img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
}
 </style>


<?php if($this->session->userdata('cnf_info_id')){ ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">CNF User Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Client/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/Dashboard">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
          <?php
          $cnf_normal_notification=$this->clientControllerModel->get_cnf_normal_notification_by_cnf_user_id($this->session->userdata('cnf_info_id'));
          if($cnf_normal_notification){
            $cnf_normal_notification_id=$cnf_normal_notification->normal_notification_id;
          }else{
            $cnf_normal_notification_id='';
          }
          $get_cnf_normal_notification_details=$this->clientControllerModel->get_normal_notification_details_by_id($cnf_normal_notification_id);
          if($get_cnf_normal_notification_details){
          ?>
          <marquee behavior="scroll" direction="left" scrolldelay="140"
           onmouseover="this.stop();"
           onmouseout="this.start();"><span style="color:red;font-weight:bold;font-size:20px;"><?php echo $get_cnf_normal_notification_details->normal_notification_title.' -'.$get_cnf_normal_notification_details->normal_notification_details; ?></span></marquee>
          <?php } ?>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <span  id="image_click"  data-toggle="modal" data-target="#exampleModal">

  </span>








<!-- Modal -->
<?php
    $cnf_flash_notification=$this->clientControllerModel->get_cnf_flash_notification_by_cnf_user_id($this->session->userdata('cnf_info_id'));
    if($cnf_flash_notification){
      $cnf_flash_notification_id=$cnf_flash_notification->flash_notification_id;
    }else{
      $cnf_flash_notification_id='';
    }
    $get_cnf_flash_notification_details=$this->clientControllerModel->get_flash_notification_details_by_id($cnf_flash_notification_id);

    ?>

<?php if($get_cnf_flash_notification_details) { ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="modal-header">
        <h5 class="modal-title" style="color:red;font-weight:bold;" id="exampleModalLabel"><?php echo $get_cnf_flash_notification_details->flash_notification_title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
           <h4 style="color:red;font-weight:300;"><?php echo $get_cnf_flash_notification_details->flash_notification_details; ?></h4>
          </div>
          <?php if($get_cnf_flash_notification_details->flash_notification_image!=''){ ?>
          <div class="form-group">
            <img class="center_img" src="<?php echo base_url().$get_cnf_flash_notification_details->flash_notification_image; ?>" alt="">
          </div>
          <?php } ?>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
     
    </div>
  </div>
</div>
<!--- Model --->
<?php } ?>









        <div class="row">


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Tracking Vehicles</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fa fa-map-marker" aria-hidden="true"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Bid Your Truck</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fas fa-truck"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Pending Request</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_cnf_pending_request($this->session->userdata('cnf_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->





          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
            <a href="<?php echo base_url(); ?>Client/CnfChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">On The Way </h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_cnf_on_the_way_chalan($this->session->userdata('cnf_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/CnfChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->



        </div>



               
        <div class="row">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Import History</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fa fa-history" aria-hidden="true"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Export History</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fa fa-history" aria-hidden="true"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Complete</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_cnf_on_complete_chalan($this->session->userdata('cnf_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Cancel</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"> <?php echo $this->clientControllerModel->count_cnf_on_cancel_chalan($this->session->userdata('cnf_info_id')); ?> </p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url();?>Client/CnfChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->



        </div>












        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
   

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <!-- /.card-header -->

              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

            <!-- TO DO List -->
            <!-- /.card -->
          </section>

          <section class="col-lg-5 connectedSortable">



          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php } ?>



<?php if($this->session->userdata('importer_info_id')){ ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Importer User Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Client/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/Dashboard">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
          <?php
          $importer_normal_notification=$this->clientControllerModel->get_importer_normal_notification_by_importer_user_id($this->session->userdata('importer_info_id'));
          if($importer_normal_notification){
            $importer_normal_notification_id=$importer_normal_notification->normal_notification_id;
          }else{
            $importer_normal_notification_id='';
          }
          $get_importer_normal_notification_details=$this->clientControllerModel->get_normal_notification_details_by_id($importer_normal_notification_id);
          if($get_importer_normal_notification_details){
          ?>
          <marquee behavior="scroll" direction="left" scrolldelay="140"
           onmouseover="this.stop();"
           onmouseout="this.start();"><span style="color:red;font-weight:bold;font-size:20px;"><?php echo $get_importer_normal_notification_details->normal_notification_title.' -'.$get_importer_normal_notification_details->normal_notification_details; ?></span></marquee>
          <?php } ?>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
<!-- Modal -->
<?php
    $importer_flash_notification=$this->clientControllerModel->get_importer_flash_notification_by_cnf_user_id($this->session->userdata('importer_info_id'));
    if($importer_flash_notification){
      $importer_flash_notification_id=$importer_flash_notification->flash_notification_id;
    }else{
      $importer_flash_notification_id='';
    }
    $get_importer_flash_notification_details=$this->clientControllerModel->get_flash_notification_details_by_id($importer_flash_notification_id);

    ?>

<?php if($get_importer_flash_notification_details) { ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="modal-header">
        <h5 class="modal-title" style="color:red;font-weight:bold;" id="exampleModalLabel"><?php echo $get_importer_flash_notification_details->flash_notification_title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
           <h4 style="color:red;font-weight:300;"><?php echo $get_importer_flash_notification_details->flash_notification_details; ?></h4>
          </div>
          <?php if($get_importer_flash_notification_details->flash_notification_image!=''){ ?>
          <div class="form-group">
            <img class="center_img" src="<?php echo base_url().$get_importer_flash_notification_details->flash_notification_image; ?>" alt="">
          </div>
          <?php } ?>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
     
    </div>
  </div>
</div>
<!--- Model --->
<?php } ?>








        <div class="row">


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Tracking Vehicles</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fa fa-map-marker" aria-hidden="true"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <a href="<?php echo base_url(); ?>Client/ImporterAllVehiclesRequest" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Bid Your Truck</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fas fa-truck"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ImporterAllVehiclesRequest" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <a href="<?php echo base_url(); ?>Client/ImporterAllVehiclesRequest" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Pending Request</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_importer_pending_request($this->session->userdata('importer_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ImporterAllVehiclesRequest" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->





          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
            <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">On The Way </h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_importer_on_the_way_chalan($this->session->userdata('importer_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->



        </div>



               
        <div class="row">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Import History</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fa fa-history" aria-hidden="true"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Export History</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fa fa-history" aria-hidden="true"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Complete</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_importer_on_complete_chalan($this->session->userdata('importer_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Cancel</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_importer_on_cancel_chalan($this->session->userdata('importer_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ImporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->



        </div>












        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
   

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <!-- /.card-header -->

              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

            <!-- TO DO List -->
            <!-- /.card -->
          </section>

          <section class="col-lg-5 connectedSortable">



          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php } ?>



<?php if($this->session->userdata('exporter_info_id')){ ?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Exporter User Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Client/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/Dashboard">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
          <?php
          $exporter_normal_notification=$this->clientControllerModel->get_exporter_normal_notification_by_importer_user_id($this->session->userdata('exporter_info_id'));
          if($exporter_normal_notification){
            $exporter_normal_notification_id=$exporter_normal_notification->normal_notification_id;
          }else{
            $exporter_normal_notification_id='';
          }
          $get_exporter_normal_notification_details=$this->clientControllerModel->get_normal_notification_details_by_id($exporter_normal_notification_id);
          if($get_exporter_normal_notification_details){
          ?>
          <marquee behavior="scroll" direction="left" scrolldelay="140"
           onmouseover="this.stop();"
           onmouseout="this.start();"><span style="color:red;font-weight:bold;font-size:20px;"><?php echo $get_exporter_normal_notification_details->normal_notification_title.' -'.$get_exporter_normal_notification_details->normal_notification_details; ?></span></marquee>
          <?php } ?>


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <?php
    $exporter_flash_notification=$this->clientControllerModel->get_exporter_flash_notification_by_cnf_user_id($this->session->userdata('exporter_info_id'));
    if($exporter_flash_notification){
      $exporter_flash_notification_id=$exporter_flash_notification->flash_notification_id;
    }else{
      $exporter_flash_notification_id='';
    }
    $get_exporter_flash_notification_details=$this->clientControllerModel->get_flash_notification_details_by_id($exporter_flash_notification_id);

    ?>

<?php if($get_exporter_flash_notification_details) { ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="modal-header">
        <h5 class="modal-title" style="color:red;font-weight:bold;" id="exampleModalLabel"><?php echo $get_exporter_flash_notification_details->flash_notification_title; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
           <h4 style="color:red;font-weight:300;"><?php echo $get_exporter_flash_notification_details->flash_notification_details; ?></h4>
          </div>
          <?php if($get_exporter_flash_notification_details->flash_notification_image!=''){ ?>
          <div class="form-group">
            <img class="center_img" src="<?php echo base_url().$get_exporter_flash_notification_details->flash_notification_image; ?>" alt="">
          </div>
          <?php } ?>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
     
    </div>
  </div>
</div>
<!--- Model --->
<?php } ?>






        <div class="row">


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Tracking Vehicles</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fa fa-map-marker" aria-hidden="true"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <a href="<?php echo base_url(); ?>Client/ExporterAllVehiclesRequest" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Bid Your Truck</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fas fa-truck"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ExporterAllVehiclesRequest" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <a href="<?php echo base_url(); ?>Client/ExporterAllVehiclesRequest" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Pending Request</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_exporter_pending_request($this->session->userdata('exporter_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ExporterAllVehiclesRequest" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->





          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">On The Way </h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_exporter_on_the_way_chalan($this->session->userdata('exporter_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->



        </div>



               
        <div class="row">

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
            <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Import History</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fa fa-history" aria-hidden="true"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
            <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Export History</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><i class="fa fa-history" aria-hidden="true"></i></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
            <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Complete</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_exporter_on_complete_chalan($this->session->userdata('exporter_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->




          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
            <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Cancel</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->clientControllerModel->count_exporter_on_cancel_chalan($this->session->userdata('exporter_info_id')); ?></p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo base_url(); ?>Client/ExporterChalanInfo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->



        </div>












        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
   

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <!-- /.card-header -->

              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

            <!-- TO DO List -->
            <!-- /.card -->
          </section>

          <section class="col-lg-5 connectedSortable">



          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php } ?>


<script type="text/javascript">
$(document).ready(function(){
  document.getElementById("image_click").click();
});


setTimeout(function(){
  $('#exampleModal').modal('hide')
}, 35000);
</script>

<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->





