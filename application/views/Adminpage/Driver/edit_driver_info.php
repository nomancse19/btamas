
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>Edit Or Update Driver Data</h1>
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
                <h3 class="card-title">Update Driver Data</h3>
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
              <form role="form" action="<?php echo base_url();?>Cholotransportowner/SaveUpdateDriverInfo/<?php echo $edit_driver_data->driver_info_id;?>" enctype="multipart/form-data" method="post">
         
       
                
              <div class="card-body">
           

           <div class="row">
             <div class="col-sm-6">
             <div class="form-group">
               <label for="cnf_name">Driver Full Name <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
               <input type="text" class="form-control form-control-sm" name="driver_name" value="<?php echo $edit_driver_data->driver_name;?>" required id="driver_name" required placeholder="Enter Driver Fullname">
             </div>

      

           
             <div class="form-group">
               <label for="cnf_address">Driver Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
               <input type="text" class="form-control form-control-sm" name="driver_address" value="<?php echo $edit_driver_data->driver_address;?>" id="driver_address" placeholder="Enter Driver Address">
             </div>

             
             <div class="form-group">
               <label for="cnf_email_address">Driver Mobile Number (Main) <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
               <input type="number" class="form-control form-control-sm" name="driver_mobile_number" value="<?php echo $edit_driver_data->driver_mobile_number;?>"  id="driver_mobile_number" required placeholder="Enter Driver Mobile Number">
             </div>



             
             <div class="form-group">
               <label for="cnf_mobile_number">Driver Mobile Number(Optional) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
               <input type="text" class="form-control form-control-sm" name="driver_op_mobile_number" value="<?php echo $edit_driver_data->driver_op_mobile_number;?>"  id="driver_op_mobile_number" placeholder="Enter Driver Optional Number , You Can Add Multiple Separate By coma">
             </div>


             <div class="form-group">
               <label for="cnf_mobile_number">Driver Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
               <input type="text" class="form-control form-control-sm" name="driver_card_no" id="driver_card_no" value="<?php echo $edit_driver_data->driver_card_no;?>" placeholder="Enter Driver Card No">
             </div>


             <div class="form-group">
               <label for="cnf_mobile_number">Driver Parents Mobile Number <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
               <input type="text" class="form-control form-control-sm" name="driver_parents_mobile_number " id="driver_parents_mobile_number" value="<?php echo $edit_driver_data->driver_parents_mobile_number;?>"  placeholder="Enter Driver Parents Mobile Number">
             </div>

             <div class="form-group">
               <label for="cnf_mobile_number">Driver Account Password <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
               <input type="text" class="form-control form-control-sm" name="driver_account_password " id="driver_account_password" value="<?php echo $edit_driver_data->driver_account_password;?>" placeholder="Enter Driver Account Password">
             </div>


             <div class="form-group">
               <label for="cnf_mobile_number">Driver License Number <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
               <input type="text" class="form-control form-control-sm" name="driver_license_number" id="driver_license_number" value="<?php echo $edit_driver_data->driver_license_number;?>" placeholder="Enter Driver License No">
             </div>
             </div>




   <div class="col-sm-6">
           


             <div class="form-group">
               <label for="cnf_mobile_number">Driver License End Date <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
               <input type="text" class="form-control form-control-sm" name="driver_license_end_date" id="license_datepicker" value="<?php echo $edit_driver_data->driver_license_end_date;?>" >
             </div>


             <div class="form-group">
               <label for="cnf_mobile_number">Driver NID Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
               <input type="text" class="form-control form-control-sm" name="driver_nid_card_no" id="driver_nid_card_no" value="<?php echo $edit_driver_data->driver_nid_card_no;?>" placeholder="Enter Driver NID Card No">
             </div>


        



             <div class="form-group">
               <label for="cnf_mobile_number">NID Card Front Side Picture <span style="color:black;font-weight:bold;font-size:17px;"> * </span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
               <img src="<?php echo base_url().$edit_driver_data->driver_nid_card_front_side_image;?>" alt="" width="200" height="100">
              <input type="hidden" name="hidden_driver_nid_card_front_side_image" value="<?php echo $edit_driver_data->driver_nid_card_front_side_image;?>">
               <input type="file" class="form-control form-control-sm" name="driver_nid_card_front_side_image" id="driver_nid_card_front_side_image" placeholder="Enter CNF NID Card Number">
             </div>

             <div class="form-group">
               <label for="cnf_mobile_number">NID Card Back Side Picture <span style="color:black;font-weight:bold;font-size:17px;">*</span><span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
               <img src="<?php echo base_url().$edit_driver_data->driver_nid_card_back_side_image;?>" alt="" width="200" height="100">
                <input type="hidden" name="hidden_driver_nid_card_back_side_image" value="<?php echo $edit_driver_data->driver_nid_card_back_side_image;?>">
               <input type="file" class="form-control form-control-sm" name="driver_nid_card_back_side_image" id="driver_nid_card_back_side_image" >
             </div>

             <div class="form-group">
               <label for="cnf_mobile_number">Driver Profile Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
               <img src="<?php echo base_url().$edit_driver_data->driver_profile_photo;?>" alt="" width="200" height="100">
                <input type="hidden" name="hidden_driver_profile_photo" value="<?php echo $edit_driver_data->driver_profile_photo;?>">
               <input type="file" class="form-control form-control-sm" name="driver_profile_photo" id="driver_profile_photo" >
             </div>




     </div>
   

   


             <button type="submit"  class="btn btn-primary right_align">Update Driver Info</button>
             </div>
           </div>





                 



               
                </div>
                </form>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->





          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
    $('#license_datepicker').datepicker("setDate", "<?php echo $edit_driver_data->driver_license_end_date;?>");


 
   
</script>
