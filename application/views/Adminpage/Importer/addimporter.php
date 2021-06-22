
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>Add Transport Malik Data</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddImporter">Add New Transport Malik Data</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageImporter">Manage Transport Malik Info</a></li>
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
                <h3 class="card-title">Add Transport Malik Info</h3>
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
              <form role="form" action="<?php echo base_url();?>Cholotransportowner/Saveimporter" enctype="multipart/form-data" method="post">
              <input type="hidden" name="<?=ImporterController::csrf_name();?>" value="<?=ImporterController::csrf_token();?>" />
                <div class="card-body">
           

                <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="importer_name">ট্রান্সপোর্ট মালিক নাম (বাংলায়) <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_full_name_bn" required id="transport_owner_full_name_bn" placeholder="ট্রান্সপোর্ট মালিক নাম বাংলায় ......">
                  </div>

                  <div class="form-group">
                    <label for="importer_name">ট্রান্সপোর্ট মালিক নাম (ইংরেজি) <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_full_name_en" required id="transport_owner_full_name_bn" placeholder="ট্রান্সপোর্ট মালিক নাম ইংরেজি">
                  </div>

           

                
                  <div class="form-group">
                    <label for="importer_address">Transport Malik Present Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_address" id="importer_address" placeholder="Enter Transport Present Malik Address">
                  </div>

                  <div class="form-group">
                    <label for="importer_address">Transport Malik Permanent Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_permanent_address" id="importer_address" placeholder="Enter Transport Permanent Malik Address">
                  </div>

                  
                  <div class="form-group">
                    <label for="importer_email_address">Transport Malik Email Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="email" class="form-control form-control-sm" name="importer_email_address" id="importer_email_address" placeholder="Enter Transport Malik Email Address">
                  </div>



                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Mobile Number(Main)<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="importer_primary_mobile_number" required id="importer_primary_mobile_number" placeholder="Enter Transport Malik Primary Mobile Number">
                  </div>


                  
                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Mobile Number(Optional1) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="importer_op1_mobile_number" id="importer_op1_mobile_number" placeholder="Enter Transport Malik Optional Mobile Number">
                  </div>

                  
               

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Wife/Husband/Children Name <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_relative_name" id="transport_owner_relative_name" placeholder="Enter Transport Malik Wife/Husband/Children Name">
                  </div>

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Wife/Husband/Children Number <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_relative_number" id="transport_owner_relative_number" placeholder="Enter Transport Malik Wife/Husband/Children Number">
                  </div>
                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Name (English) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_name_en" id="transport_name_en" placeholder="Enter Transport Name in English">
                  </div>
				          <div class="form-group">
                    <label for="importer_mobile_number">Transport Name (Bangla) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_name_bn" id="transport_name_bn" placeholder="Enter Transport Name in Bangla">
                  </div>
                 
				  
                  
                  </div>




          <div class="col-sm-6">
               <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Blood Group <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_blood_group" id="transport_owner_blood_group" placeholder="Enter Transport Malik Blood Group">
                  </div>

				          <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Member No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_member_no" id="transport_owner_member_no" placeholder="Enter Transport Malik Member Number...">
                  </div>

				          <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_card_no" id="transport_owner_card_no" placeholder="Enter Transport Malik Card No....">
                  </div>
                  
				          <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik QR Code No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_QRcode_no" id="transport_owner_QRcode_no" placeholder="Enter Transport Malik QR Code No...">
                  </div>


                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Account Password <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="password" class="form-control form-control-sm" name="importer_user_password" required id="importer_user_password" placeholder="Enter Transport Malik User Password">
                  </div>

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik NID Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_nid_number" id="importer_nid_number" placeholder="Enter Transport Malik NID Card Number">
                  </div>


             



                  <div class="form-group">
                    <label for="importer_mobile_number">NID Card Front Side Picture <span style="color:black;font-weight:bold;font-size:17px;"> * </span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                    <input type="file" class="form-control form-control-sm" name="importer_nid_card_front_side_image" id="importer_nid_card_front_side_image" placeholder="Enter Transport Malik NID Card Number">
                  </div>

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Signature <span style="color:black;font-weight:bold;font-size:17px;">*</span><span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                    <input type="file" class="form-control form-control-sm" name="importer_nid_card_back_side_image" id="importer_nid_card_back_side_image" >
                  </div>

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik  Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                    <input type="file" class="form-control form-control-sm" name="importer_profile_photo" id="importer_profile_photo" >
                  </div>


              <div class="row">
                  <div class="col-sm-4">
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio1" value="importer_active" name="importer_is_active" checked>
                      <label for="customRadio1" class="custom-control-label">Malik Active</label>
                    </div>
                  </div>
                  </div>

                  <div class="col-sm-5">
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio2" value="importer_deactive" name="importer_is_active">
                      <label for="customRadio2" class="custom-control-label">Malik Deactive</label>
                    </div>
                  </div>
                  </div>
                  
              </div>





              <div class="row">
                  <div class="col-sm-4">
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="transport_owner_member" value="transport_owner_member" name="transport_owner_member_type" checked>
                      <label for="transport_owner_member" class="custom-control-label">Member</label>
                    </div>
                  </div>
                  </div>

                  <div class="col-sm-5">
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="transport_owner_president" value="transport_owner_president" name="transport_owner_member_type">
                      <label for="transport_owner_president" class="custom-control-label">President</label>
                    </div>
                  </div>
                  </div>
                  
              </div>

              <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Designation <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_designation" id="transport_owner_designation" value="member" placeholder="Enter Transport Malik Designation">
                  </div>

          </div>
				

				


                  <button type="submit"  class="btn btn-primary right_align">Save Transport Malik Info</button>
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
 


  $("#transport_owner_member") // select the radio by its id
    .change(function(){ // bind a function to the change event
        if( $(this).is(":checked") ){ // check if the radio is checked
            var val = $(this).val(); // retrieve the value
            $("#transport_owner_designation").val('member');
        }
    });
  $("#transport_owner_president") // select the radio by its id
    .change(function(){ // bind a function to the change event
        if( $(this).is(":checked") ){ // check if the radio is checked
            var val = $(this).val(); // retrieve the value
            $("#transport_owner_designation").val('President');
        }
    });
  </script>


  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});






</script>
