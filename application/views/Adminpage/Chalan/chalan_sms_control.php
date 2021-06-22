<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    textarea {
  width: 150px;
  height: 30px;
}
</style>
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All SMS Control</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ChalanSmsControl">Chalan Sms Control</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All SMS Control</h3>
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
            <div class="card-body">
        <a href="<?php echo base_url();?>Cholotransportowner/ChalanSmsControl"><button class="btn btn-primary">Chalan SMS Control</button></a>
       <!-- <a href="<?php echo base_url();?>Cholotransportowner/PendingVehiclesRequest"><button class="btn btn-warning">Pending Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/ProcessingVehiclesRequest"><button class="btn btn-info">Processing Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/AcceptedVehiclesRequest"><button class="btn btn-basic" style="background:blue;color:#fff;">Accepted, Processing Chalan</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/CompletedVehiclesRequest"><button class="btn btn-success">Completed Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/CancelVehiclesRequest"><button class="btn btn-danger">Cancel</button></a>
                -->
          <hr>         
           


            <fieldset class="border p-2">
            <legend  class="w-auto" style="color:#007932;font-weight:bold;">Chalan Sms Control</legend>
            &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php if($chalan_sms_data){?>
            <label class="checkbox-inline">
            <input type="checkbox" data-toggle="toggle" id="cnf_sms" <?php if($chalan_sms_data->chalan_cnf_sms==1){echo "checked";} ?> data-offstyle="outline-danger">CNF SMS
            </label>


            &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <label class="checkbox-inline">
            <input type="checkbox" data-toggle="toggle" id="importer_sms" <?php if($chalan_sms_data->chalan_importer_sms==1){echo "checked";} ?> data-offstyle="outline-danger"> Importer SMS
            </label>


            &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <label class="checkbox-inline">
            <input type="checkbox" data-toggle="toggle" id="exporter_sms" <?php if($chalan_sms_data->chalan_exporter_sms==1){echo "checked";} ?> data-offstyle="outline-danger"> Exporter SMS
            </label>
          <?php }else{ ?>
          
          <h3>SMS Database Not Connected....</h3>

          <?php } ?>

            </fieldset>
            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <script>
 $("#cnf_sms").change(function() {
    if($('#cnf_sms').is(':checked')){
        $.ajax({
		    url:"<?php echo base_url();?>Backend/ChalanController/active_cnf_sms_notification",
		    type:"GET",
		    success:function(data)
		    {
             window.location.reload();   
		    }
		   });
    }else{
        $.ajax({
		    url:"<?php echo base_url();?>Backend/ChalanController/deactive_cnf_sms_notification",
		    type:"GET",
		    success:function(data)
		    {
             window.location.reload();   
		    }
		   });
    }
 });




 $("#importer_sms").change(function() {
    if($('#importer_sms').is(':checked')){
        $.ajax({
		    url:"<?php echo base_url();?>Backend/ChalanController/active_importer_sms_notification",
		    type:"GET",
		    success:function(data)
		    {
             window.location.reload();   
		    }
		   });
    }else{
        $.ajax({
		    url:"<?php echo base_url();?>Backend/ChalanController/deactive_importer_sms_notification",
		    type:"GET",
		    success:function(data)
		    {
             window.location.reload();   
		    }
		   });
    }
 });





 
 $("#exporter_sms").change(function() {
    if($('#exporter_sms').is(':checked')){
        $.ajax({
		    url:"<?php echo base_url();?>Backend/ChalanController/active_exporter_sms_notification",
		    type:"GET",
		    success:function(data)
		    {
             window.location.reload();   
		    }
		   });
    }else{
        $.ajax({
		    url:"<?php echo base_url();?>Backend/ChalanController/deactive_exporter_sms_notification",
		    type:"GET",
		    success:function(data)
		    {
             window.location.reload();   
		    }
		   });
    }
 });
</script>








  