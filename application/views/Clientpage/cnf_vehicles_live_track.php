<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->

<meta http-equiv="refresh" content="30">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>CNF Vehicles Live Tracking</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Client/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest">Vehicles Request</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/CnfChalanInfo">Chalan Info</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 animated headShake">
         
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Vehicles Live Tracking, <span style="color:black;font-weight:bold;">Chalan No- <?php echo $chalan_data->chalan_no; ?> And Vehicles No- <?php echo $chalan_data->chalan_vehicles_no; ?></span></h3>
                <h3 class="card-title">
              <?php
              $success_message=$this->session->flashdata('success_message');
              $error_message = $this->session->flashdata('error_message');
              if($success_message){
              echo '<script type="text/javascript">toastr.success("'.$success_message.'")</script>';
              }
              if($error_message){
                  echo '<script type="text/javascript">toastr.error("'.$error_message.'")</script>';
                  
                  }

              ?>
              </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                
                  <?php if(isset($lat)){?>
                <iframe id="Frame" width="100%" height="600"  scrolling="no" marginheight="0" marginwidth="0"  frameborder="0" name="myiframe" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=<?php echo $lat;?>,<?php echo $lng;?>&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                   <?php } else{?>
                    <p style="color:red;font-weight:bold;text-align:center;">Vehicles Location Not Found! ... Device Imei Or GPS Tracker No Response...</p>
                   <?php } ?>
                  </div>
                </div>
                
                </div>
             </div>
                <!-- /.card-body -->
         </div>
      </div>
            <!-- /.card -->





    
    </section>
    <!-- /.content -->
</div>



  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
