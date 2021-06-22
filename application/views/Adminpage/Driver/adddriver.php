
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>Add Driver Info Data</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddDriver">Add New Driver Data</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageDriver">Manage Driver Info</a></li>
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
                <h3 class="card-title">Add Driver Info</h3>
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
              <form role="form" action="<?php echo base_url();?>Cholotransportowner/Savedriver" enctype="multipart/form-data" method="post">
              <input type="hidden" name="<?=DriverController::csrf_name();?>" value="<?=DriverController::csrf_token();?>" />
                <div class="card-body">
           

                <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="cnf_name">Driver Full Name <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="driver_name" required id="driver_name" required placeholder="Enter Driver Fullname">
                  </div>

           

                
                  <div class="form-group">
                    <label for="cnf_address">Driver Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="driver_address" id="driver_address" placeholder="Enter Driver Address">
                  </div>

                  
                  <div class="form-group">
                    <label for="cnf_email_address">Driver Mobile Number (Main) <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="driver_mobile_number" id="driver_mobile_number" required placeholder="Enter Driver Mobile Number">
                  </div>



                  
                  <div class="form-group">
                    <label for="cnf_mobile_number">Driver Mobile Number(Optional) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="driver_op_mobile_number" id="driver_op_mobile_number" placeholder="Enter Driver Optional Number , You Can Add Multiple Separate By coma">
                  </div>


                  <div class="form-group">
                    <label for="cnf_mobile_number">Driver Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="driver_card_no" id="driver_card_no" placeholder="Enter Driver Card No">
                  </div>


                  <div class="form-group">
                    <label for="cnf_mobile_number">Driver Parents Mobile Number <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="driver_parents_mobile_number " id="driver_parents_mobile_number " placeholder="Enter Driver Parents Mobile Number">
                  </div>

                  <div class="form-group">
                    <label for="cnf_mobile_number">Driver Account Password <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="password" class="form-control form-control-sm" name="driver_account_password " id="driver_account_password " placeholder="Enter Driver Account Password">
                  </div>


                  
                  </div>




				<div class="col-sm-6">
				          <div class="form-group">
                    <label for="cnf_mobile_number">Driver License Number <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="driver_license_number" id="driver_license_number" placeholder="Enter Driver License No">
                  </div>


                  <div class="form-group">
                    <label for="cnf_mobile_number">Driver License End Date <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="driver_license_end_date" id="license_datepicker">
                  </div>


                  <div class="form-group">
                    <label for="cnf_mobile_number">Driver NID Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="driver_nid_card_no" id="driver_nid_card_no" placeholder="Enter Driver NID Card No">
                  </div>


             



                  <div class="form-group">
                    <label for="cnf_mobile_number">NID Card Front Side Picture <span style="color:black;font-weight:bold;font-size:17px;"> * </span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                    <input type="file" class="form-control form-control-sm" name="driver_nid_card_front_side_image" id="driver_nid_card_front_side_image" placeholder="Enter CNF NID Card Number">
                  </div>

                  <div class="form-group">
                    <label for="cnf_mobile_number">NID Card Back Side Picture <span style="color:black;font-weight:bold;font-size:17px;">*</span><span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                    <input type="file" class="form-control form-control-sm" name="driver_nid_card_back_side_image" id="driver_nid_card_back_side_image" >
                  </div>

                  <div class="form-group">
                    <label for="cnf_mobile_number">Driver Profile Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                    <input type="file" class="form-control form-control-sm" name="driver_profile_photo" id="driver_profile_photo" >
                  </div>


              <div class="row">
                  <div class="col-sm-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio1" value="driver_active" name="driver_is_active" checked>
                      <label for="customRadio1" class="custom-control-label">Driver Active</label>
                    </div>
                  </div>
                  </div>

                  <div class="col-sm-4">
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio2" value="driver_deactive" name="driver_is_active">
                      <label for="customRadio2" class="custom-control-label">Driver Deactive</label>
                    </div>
                  </div>
                  </div>
              </div>

          </div>
				

				


                  <button type="submit"  class="btn btn-primary right_align">Save Driver Info</button>
                  </div>
                </div>
                
                </form>
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



<script src="<?php echo base_url();?>assets/backend/noman_datepicker/datepicker_jquery_1.7.1.js"></script>
<script type="text/javascript">
    $('#license_datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#license_datepicker').datepicker("setDate", new Date());




</script>


